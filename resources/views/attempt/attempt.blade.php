@extends('common')

@section('content')
    @include('header-bar')
    <div class="offset-header">
        <div class="room-form-container">
            <h2><i class="icon file text"></i>Equations</h2>
            <br>
            <button class="ui button small">
                <i class="icon floppy save"></i>
                End attempt
            </button>
            <br>
            <div class="ui segment">
                <b>1. Find value of x on this equation: x + 7x = 64</b>
                <div class="ui divider"></div>
                <div class="fields">
                    <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="fruit" tabindex="0" class="hidden">
                            <label>8</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="fruit" tabindex="0" class="hidden">
                            <label>5</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="fruit" tabindex="0" class="hidden">
                            <label>7</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="fruit" tabindex="0" class="hidden">
                            <label>None answer is correct.</label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="button-bar" style="text-align: center">
                    <button class="ui button" disabled><i class="icon left arrow"></i>Previous question</button>
                    <button class="ui button">Next question<i class="icon right arrow"></i></button>
                </div>
            </div>
        </div>
    </div>
@endsection