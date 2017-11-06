@extends('common')

@section('content')
    @include('header-bar')
    <div class="offset-header">
        <div class="button-bar">
            <a href="{{ url('dashboard') }}">
                <button class="ui button small">
                        <i class="icon left arrow"></i>
                        Back
                </button>
            </a>
            <button class="ui primary button small" id="button-save">
                <i class="icon floppy save"></i>
                Save
            </button>
            <button class="ui green button small" id="button-save-back">
                <i class="icon check circle"></i>
                Save and go back
            </button>
        </div>

        <div class="room-form-container">
            <form class="ui form" id="new-room-form" method="POST" action="{{ url('room/new') }}">
                <div class="two fields">
                    <div class="field">
                        <label>Room name</label>
                        <input type="text" placeholder="Room name" name="name"/>
                    </div>
                    <div class="field">
                        <label>Exam attached</label>
                        <div class="ui selection dropdown">
                            <input type="hidden" name="examId">
                            <i class="dropdown icon"></i>
                            <div class="default text">Select Exam</div>
                            <div class="menu">
                                <div class="item" data-value="-1">No exam</div>
                                @foreach($exams as $exam)
                                    <div class="item" data-value="{{$exam->id}}">{{$exam->name}}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>Opening datetime</label>
                            <input type="datetime-local" placeholder="Date" name="openedAt"/>
                    </div>
                    <div class="field">
                        <label>Closing datetime</label>
                        <input type="datetime-local" placeholder="Date" name="closedAt"/>                            
                    </div>
                </div>
                <div class="ui divider"></div>
                <div class="two fields">
                    <div class="field">
                        <label>Invite users</label>
                        <div class="ui icon input">
                            <i class="search icon"></i>
                            <input type="text" placeholder="Search user..." id="search-user"/>
                        </div>
                        <div class="ui relaxed divided list" id="inviting-users">
                            <!-- Users to invite will be rendered here -->
                        </div>
                    </div>
                    <div class="field">
                        <label>Users invited</label>
                        <div class="ui relaxed divided list" id="invited-users"> 
                            
                        </div>
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <input type="hidden" name="goBack" value="0" id="go-back-input" />
                <input type="hidden" name="usersInvited" id="users-invited-input" /> 
            </form>
        </div>
    </div>

    <script>
        var form = document.getElementById('new-room-form'),
            buttonSave = document.getElementById('button-save'),
            buttonSaveAndGoBack = document.getElementById('button-save-back'),
            searchUser = document.getElementById('search-user'),
            usersInvited = $('.user-invited');

        buttonSave.addEventListener('click', function(e) {
            form.submit();
        });


        buttonSaveAndGoBack.addEventListener('click', function(e) {
            document.getElementById('go-back-input').value = 1;
            form.submit();
        });

        var timer;
        searchUser.addEventListener('keyup', function(e) {
            if (timer) {
                clearTimeout(timer);
            }

            timer = setTimeout(function() {
                $('#inviting-users').empty();
                var term = searchUser.value;
                if (term.length && term.length > 2) {
                    $.get(`{{ url('rest/findUser') }}?searchTerm=${term}`, 
                        function(data) {
                            if (data.length) {
                                for (var userIndex in data) {
                                    var user = data[userIndex];
                                    if (!$(`.user-invited[data-id=${user.id}]`).length) {
                                        var template = getUserToInviteTemplate(user);
                                        $('#inviting-users').append(template);
                                    }
                                }

                                $('.user-to-invite').on('click', function() {
                                    var userId = $(this).attr('data-id');
                                    inviteUser(userId);
                                })
                            }
                            else {
                                $('#inviting-users').append('No users found.');
                            }
                        });
                }
            }, 500);
        });

        usersInvited.on('click', function() {
            uninviteUser($(this).attr('data-id'));
        })

        function getUserToInviteTemplate(user) {
            return `<div class="item" >
                        <div class="right floated content user-to-invite" data-id="${user.id}">
                            <i class="icon large plus"></i>
                        </div>
                        <i class="large user middle aligned icon"></i>
                        <div class="content">
                            <span class="header user-data" data-name="${user.name}">${user.name}</span>
                            <div class="description user-data" data-email="${user.email}">${user.email}</div>
                        </div>
                    </div>
                    `;
        };

        function getUserInvitedTemplate(user) {
            return `<div class="item" >
                        <div class="right floated content user-invited" data-id="${user.id}">
                            <i class="icon large remove"></i>
                        </div>
                        <i class="large user middle aligned icon"></i>
                        <div class="content">
                            <span class="header">${user.name}</span>
                            <div class="description">${user.email}</div>
                        </div>
                    </div>
                    `;
        };

        function inviteUser(userId) {
            var input = $('#users-invited-input');
            var users = input.val().split(',') || [];
            if (input.val() === "") {
                users = [];
            }
            if (users.indexOf(userId) < 0) {
                users.push(userId);
                input.val(users.join());
                var itemToRemove = $(`.user-to-invite[data-id=${userId}]`).parent();
                var data = {
                    id: itemToRemove.children('.user-to-invite').attr('data-id'),
                    name: itemToRemove.find('.user-data[data-name]').attr('data-name'),
                    email: itemToRemove.find('.user-data[data-email]').attr('data-email')
                }
                itemToRemove.remove();
                var newElement = $(getUserInvitedTemplate(data));
                $('#invited-users').append(newElement);
                newElement.children('.user-invited').on('click', function() {
                    uninviteUser($(this).attr('data-id'));
                });
            }
        };

        function uninviteUser(userId) {
            var input = $('#users-invited-input');
            var users = input.val().split(',') || [];
            var index = users.indexOf(userId)
            if (index > -1) {
                users.splice(index, 1);
                input.val(users.join());
                $(`.user-invited[data-id=${userId}]`).parent().remove();
            }
            
        };
    </script>
@endsection