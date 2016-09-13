@extends('common')

@section('content')
    @include('header-bar')
    <div class="offset-header">
        <div class="button-bar">
            <a href="../dashboard">
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
                        <label>Exam name</label>
                        <input type="text" placeholder="Exam name" value="Equations"/>
                    </div>
                    <div class="field">
                        <label>Passing score</label>
                        <input type="number" placeholder="Enter passing score" value="2"/>
                    </div>
                </div>
                <div class="ui divider"></div>
                <div class="field">
                    <label>Questions</label>
                    <button class="ui button small">
                        <i class="icon plus"></i>
                        Add question
                    </button>
                    <br/><br/>
                    <div class="ui styled fluid accordion">
                        <div class="title">
                            <i class="dropdown icon"></i>
                            Find value of x on this equation: x + 7x = 64
                        </div>
                        <div class="content">
                            <div class="transition hidden">
                                <div class="grouped fields">
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
                            </div>
                        </div>
                        <div class="title">
                            <i class="dropdown icon"></i>
                            Find value of x on this equation: 2x - 8 = 4
                        </div>
                        <div class="content">

                        </div>
                        <div class="title">
                            <i class="dropdown icon"></i>
                            Find value of x on this equation: x + 1 = 2x - 6
                        </div>
                        <div class="content">

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection