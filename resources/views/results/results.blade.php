@extends('common')

@section('content')
    @include('header-bar')
    <div class="offset-header">
        <div class="room-form-container">
            <h2><i class="icon check"></i>My Results</h2>
            <div class="ui divider"></div>
            <button class="ui button"><i class="icon left arrow"></i>Back</button>
            <div class="ui segment">
                <table class="ui very basic celled table fluid">
                    <thead>
                    <tr><th>Exam</th>
                        <th>Score</th>
                    </tr></thead>
                    <tbody>
                    <tr>
                        <td>
                            <h4 class="ui header">
                                <i class="icon file text"></i>
                                <div class="content">
                                    Equations
                                    <div class="sub header">16:46h 23 Oct. 2016
                                    </div>
                                </div>
                            </h4></td>
                        <td>
                            5.6
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4 class="ui header">
                                <i class="icon file text"></i>
                                <div class="content">
                                    Equations
                                    <div class="sub header">17:41h 23 Oct. 2016
                                    </div>
                                </div>
                            </h4></td>
                        <td>
                            6.8
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4 class="ui header">
                                <i class="icon file text"></i>
                                <div class="content">
                                    Equations
                                    <div class="sub header">18:25h 23 Oct. 2016
                                    </div>
                                </div>
                            </h4></td>
                        <td>
                            9.15
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection