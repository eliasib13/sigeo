@extends('common')

@section('content')
    @include('header-bar')
    <div class="offset-header">
        <div class="dashboard-container">
            <div class="ui segment">
                <div class="segment-title">
                    <h3>My rooms</h3>
                    <a href="{{ url('room/new') }}" class="inherit-color" title="New room"><i class="plus icon right aligned"></i></a>
                </div>
                <div class="ui divider"></div>
                <div class="ui relaxed divided list">
                    @foreach($rooms as $room)
                        <div class="item">
                            <i class="large university middle aligned icon"></i>
                            <div class="content">
                                <a class="header" href="{{ url('room/details/' . $room->id) }}">{{ $room->name }}</a>
                                <div class="description">Exam "{{ $room->exam()->first()->name }}" starts on {{ date_format(date_create($room->openedAt), 'Y M j H:i') }}</div>
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
                                <a class="header" href="{{ url('room/access/' . $invitation->id) }}">{{ $invitation->name }}</a>
                                <div class="description">Exam "{{ $invitation->exam()->first()->name }}" starts on {{ date_format(date_create($invitation->openedAt), 'Y M j H:i') }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="ui segment full-width">
                <div class="segment-title">
                    <h3>My exams</h3>
                    <a href="{{ url('exam/new') }}" class="inherit-color" title="New exam"><i class="plus icon right aligned"></i></a>
                </div>
                <div class="ui divider"></div>
                <div class="ui relaxed divided list">
                    @foreach($exams as $exam)
                        <div class="item">
                            <i class="large file text middle aligned icon"></i>
                            <div class="content">
                                <a class="header" href="{{ url('exam/details/' . $exam->id) }}">{{ $exam->name }}</a>
                                <div class="description">On {{ sizeof($exam->rooms()->get()) }} room(s)</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection