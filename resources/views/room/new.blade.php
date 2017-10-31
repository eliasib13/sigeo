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
                            <input type="text" placeholder="Search user..." />
                        </div>
                    </div>
                    <div class="field">
                        <label>Users invited</label>
                        <div class="ui relaxed divided list">
                            <div class="item">
                                No users invited.
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <input type="hidden" name="goBack" value="0" id="go-back-input" />
            </form>
        </div>
    </div>

    <script>
        var form = document.getElementById('new-room-form'),
            buttonSave = document.getElementById('button-save'),
            buttonSaveAndGoBack = document.getElementById('button-save-back');

        buttonSave.addEventListener('click', function(e) {
            form.submit();
        });


        buttonSaveAndGoBack.addEventListener('click', function(e) {
            document.getElementById('go-back-input').value = 1;
            form.submit();
        })
    </script>
@endsection