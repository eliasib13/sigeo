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
            <div class="ui form">
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
                    <a href="{{ $id }}/question/new">
                        <button class="ui button small">
                            <i class="icon plus"></i>
                            Add question
                        </button>
                    </a>
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
                                            <input type="radio" name="fruit" checked tabindex="0" class="hidden" disabled>
                                            <label>8</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="fruit" tabindex="0" class="hidden" disabled>
                                            <label>5</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="fruit" tabindex="0" class="hidden" disabled>
                                            <label>7</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="fruit" tabindex="0" class="hidden" disabled>
                                            <label>None answer is correct.</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="two fields">
                                    <div class="field">
                                        <label>Question score</label>
                                        <input disabled type="number" value="1" />
                                    </div>
                                </div>
                                <br>
                                <button class="ui blue button"><i class="icon pencil"></i>Edit question</button>
                                <button class="ui red button"><i class="icon remove"></i>Remove question</button>
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
            </div>
        </div>
    </div>
@endsection