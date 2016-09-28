@extends('common')

@section('content')
    @include('header-bar')
    <div class="offset-header">
        <div class="dashboard-container">
            <div class="ui segment">
                <div class="segment-title">
                    <h3>My rooms</h3>
                    <a href="room/new" class="inherit-color"><i class="plus icon right aligned"></i></a>
                </div>
                <div class="ui divider"></div>
                <div class="ui relaxed divided list">
                    @foreach($rooms as $room)
                        <div class="item">
                            <i class="large university middle aligned icon"></i>
                            <div class="content">
                                <a class="header">{{ $room->name }}</a>
                                <div class="description">Exam "{{ App\Exam::find($room->examId)->name }}" starts on {{ date_format(date_create($room->openedAt), 'Y M n H:i') }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="ui segment">
                <div class="segment-title">
                    <h3>My invitations</h3>
                    <a class="ui red circular label">{{ sizeof($invitations) }}</a>
                </div>
                <div class="ui divider"></div>
                <div class="ui relaxed divided list">
                    @foreach($invitations as $invitation)
                        <div class="item">
                            <i class="large university middle aligned icon"></i>
                            <div class="content">
                                <a class="header">{{ $invitation->name }}</a>
                                <div class="description">Exam "{{ $invitation->exam()->first()->name }}" starts on {{ date_format(date_create($invitation->openedAt), 'Y M n H:i') }}</div>
                            </div>
                        </div>
                    @endforeach
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