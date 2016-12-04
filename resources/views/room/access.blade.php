@extends('common')

@section('content')
    @include('header-bar')
    <div class="offset-header">
        <div class="room-form-container">
            <h2><i class="icon university"></i>Maths 2</h2>
            <div class="ui divider"></div>
            <a href="{{ url('dashboard') }}">
                <button class="ui button"><i class="icon left arrow"></i>Back</button>
            </a>
            <h3>On this room: <i class="icon text file"></i>Equations</h3>
            <table class="ui celled table">
                <tr>
                    <td class="active"><b>Opening date:</b></td>
                    <td>00:00h 23 Oct. 2016</td>
                </tr>
                <tr>
                    <td class="active"><b>Closing date:</b></td>
                    <td>23:59h 23 Oct. 2016</td>
                </tr>
            </table>
            <br><br><br>
            <button class="ui button green fluid"><i class="icon write"></i>Start attempt</button>
        </div>

    </div>
@endsection