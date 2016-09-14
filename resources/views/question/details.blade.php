@extends('common')

@section('content')
    @include('header-bar')
    <div class="offset-header">
        <div class="button-bar">
            <a href="/sigeo/exam/details/{{ $examId }}">
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
                <div class="three fields">
                    <div class="field">
                        <label>Question</label>
                        <input type="text" placeholder="Enter question here" value="Find value of x on this equation: x + 7x = 64"/>
                    </div>
                    <div class="field">
                        <label>Question type</label>
                        <div class="ui selection dropdown">
                            <input type="hidden" name="question-type">
                            <i class="dropdown icon"></i>
                            <div class="default text">Select Type</div>
                            <div class="menu">
                                <div class="item" data-value="">Single answer test</div>
                                <div class="item" data-value="1">Multiple answer test</div>
                                <div class="item" data-value="2">Free answer</div>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Score</label>
                        <input type="number" placeholder="Enter question's score here" value="1"/>
                    </div>
                </div>
                <div class="ui divider"></div>
                <div class="two fields">
                    <div class="field">
                        <label>Available answers</label>
                    </div>
                    <div class="field">
                        <label>Correct answer</label>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <input type="text" placeholder="Write an answer here" value="8"/>
                    </div>
                    <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="fruit" tabindex="0" class="hidden" checked/>
                        </div>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <input type="text" placeholder="Write an answer here" value="5"/>
                    </div>
                    <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="fruit" tabindex="0" class="hidden" />
                        </div>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <input type="text" placeholder="Write an answer here" value="7"/>
                    </div>
                    <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="fruit" tabindex="0" class="hidden" />
                        </div>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <input type="text" placeholder="Write an answer here" value="None answer is correct."/>
                    </div>
                    <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="fruit" tabindex="0" class="hidden" />
                        </div>
                    </div>
                </div>
                <br>
                <button class="ui button"><i class="icon plus"></i>Add answer</button>
            </div>
        </div>
    </div>
@endsection