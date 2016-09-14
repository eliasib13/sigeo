@extends('common')

@section('content')
    @include('header-bar')
    <div class="offset-header">
        <div class="button-bar">
            <a href="/sigeo/dashboard">
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
                        <input type="text" value="Maths 2" placeholder="Room name"/>
                    </div>
                    <div class="field">
                        <label>Exam attached</label>
                        <div class="ui selection dropdown">
                            <input type="hidden" name="exam-id">
                            <i class="dropdown icon"></i>
                            <div class="default text">Select Exam</div>
                            <div class="menu">
                                <div class="item" data-value="-1">No exam</div>
                                <div class="item" data-value="">Equations</div>
                                <div class="item" data-value="1">Electromagnetic Field</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>Opening datetime</label>
                        <div class="two fields">
                            <div class="field"><input type="date" placeholder="Date" value="2016-10-20"/></div>
                            <div class="field"><input type="time" placeholder="Time" value="00:00"/></div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Closing datetime</label>
                        <div class="two fields">
                            <div class="field"><input type="date" placeholder="Date" value="2016-10-30"/></div>
                            <div class="field"><input type="time" placeholder="Time" value="23:59"/></div>
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
                                <div class="right floated content">
                                    <i class="icon large remove"></i>
                                </div>
                                <i class="large user middle aligned icon"></i>
                                <div class="content">
                                    <span class="header">Ricky Town</span>
                                    <div class="description">r.town@email.com</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="right floated content">
                                    <i class="icon large remove"></i>
                                </div>
                                <i class="large user middle aligned icon"></i>
                                <div class="content">
                                    <span class="header">Alex Sanders</span>
                                    <div class="description">a.sanders@email.com</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection