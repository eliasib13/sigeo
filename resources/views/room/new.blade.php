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
                        <input type="text" placeholder="Room name"/>
                    </div>
                    <div class="field">
                        <label>Exam attached</label>
                        <div class="ui selection dropdown">
                            <input type="hidden" name="exam-id">
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
                        <div class="two fields">
                            <div class="field"><input type="date" placeholder="Date" /></div>
                            <div class="field"><input type="time" placeholder="Time" /></div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Closing datetime</label>
                        <div class="two fields">
                            <div class="field"><input type="date" placeholder="Date" /></div>
                            <div class="field"><input type="time" placeholder="Time" /></div>
                        </div>
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
            </form>
        </div>
    </div>
@endsection