@extends('common')

@section('content')
    @include('header-bar')
    <div class="offset-header">
        <div class="dashboard-container">
            <div class="ui segment">
                <div class="segment-title">
                    <h3>My rooms</h3>
                    <i class="plus icon right aligned"></i>
                </div>
                <div class="ui divider"></div>
                <div class="ui relaxed divided list">
                    <div class="item">
                        <i class="large university middle aligned icon"></i>
                        <div class="content">
                            <a class="header">Maths 2</a>
                            <div class="description">Exam "Equations" starts on 00:00h 23 Oct. 2016</div>
                        </div>
                    </div>
                    <div class="item">
                        <i class="large university middle aligned icon"></i>
                        <div class="content">
                            <a class="header">Physics</a>
                            <div class="description">Exam "Electromagnetic Field" ended on 23:59h 15 Jun. 2016</div>
                        </div>
                    </div>
                    <div class="item">
                        <i class="large university middle aligned icon"></i>
                        <div class="content">
                            <a class="header">Philosophy</a>
                            <div class="description">No exam attached</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui segment">
                <div class="segment-title">
                    <h3>My invitations</h3>
                    <a class="ui red circular label">1</a>
                </div>
                <div class="ui divider"></div>
                <div class="ui relaxed divided list">
                    <div class="item">
                        <i class="large university middle aligned icon"></i>
                        <div class="content">
                            <a class="header">Digital Whiteboard Course</a>
                            <div class="description">Exam "Final test" starts on 00:00h 19 Nov. 2016</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui segment full-width">
                <div class="segment-title">
                    <h3>My exams</h3>
                    <i class="plus icon right aligned"></i>
                </div>
                <div class="ui divider"></div>
                <div class="ui relaxed divided list">
                    <div class="item">
                        <i class="large file text middle aligned icon"></i>
                        <div class="content">
                            <a class="header">Equations</a>
                            <div class="description">On "Maths 2" room</div>
                        </div>
                    </div>
                    <div class="item">
                        <i class="large file text middle aligned icon"></i>
                        <div class="content">
                            <a class="header">Electromagnetic Field</a>
                            <div class="description">On "Physics" room</div>
                        </div>
                    </div>
                    <div class="item">
                        <i class="large file text middle aligned icon"></i>
                        <div class="content">
                            <a class="header">European countries and capitals</a>
                            <div class="description">No room attached</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection