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
            <button class="ui primary button small">
                <i class="icon floppy save"></i>
                Save
            </button>
            <button class="ui green button small">
                <i class="icon check circle"></i>
                Save and go back
            </button>
        </div>

        <div class="room-form-container">
            <form class="ui form">
                <div class="two fields">
                    <div class="field">
                        <label>Room name</label>
                        <input type="text" value="{{ $room->name }}" placeholder="Room name"/>
                    </div>
                    <div class="field">
                        <label>Exam attached</label>
                        <div class="ui selection dropdown">
                            <input type="hidden" name="examId" value="{{$room->exam->id}}">
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
                        <input type="datetime-local" placeholder="Date" name="openedAt" value="{{ date_format(date_create($room->openedAt), 'Y-m-d') . 'T' . date_format(date_create($room->openedAt), 'H:i') }}"/>
                    </div>
                    <div class="field">
                        <label>Closing datetime</label>
                        <input type="datetime-local" placeholder="Date" name="closedAt" value="{{ date_format(date_create($room->closedAt), 'Y-m-d') . 'T' . date_format(date_create($room->closedAt), 'H:i') }}"/>
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
                            @foreach($room->invited()->get() as $userInvited)
                                <div class="item">
                                    <div class="right floated content">
                                        <i class="icon large remove"></i>
                                    </div>
                                    <i class="large user middle aligned icon"></i>
                                    <div class="content">
                                        <span class="header">{{ $userInvited->name }}</span>
                                        <div class="description">{{ $userInvited->email }}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection