@extends('common')

@section('content')
    @include('header-bar')
    <div class="offset-header">
        <div class="room-form-container">
            <h2><i class="icon university"></i>{{ $room->name }}</h2>
            <div class="ui divider"></div>
            <a href="{{ url('dashboard') }}">
                <button class="ui button"><i class="icon left arrow"></i>Back</button>
            </a>
            <h3>On this room: <i class="icon text file"></i>{{ $room->exam()->first()->name  }}</h3>
            <table class="ui celled table">
                <tr>
                    <td class="active"><b>Opening date:</b></td>
                    <td>{{ date_format(date_create($room->openedAt), 'Y M n H:i')  }}</td>
                </tr>
                <tr>
                    <td class="active"><b>Closing date:</b></td>
                    <td>{{ date_format(date_create($room->closedAt), 'Y M n H:i')  }}</td>
                </tr>
            </table>
            <br><br><br>
            <button class="ui button green fluid"><i class="icon write"></i>Start attempt</button>
        </div>

    </div>
@endsection