@extends('common')

@section('content')
    @include('header-bar')
    <div class="offset-header">
        <div class="button-bar">
            <a href="{{ url('dashboard') }}">
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
                        <input type="text" placeholder="Exam name" value="{{ $exam->name }}"/>
                    </div>
                    <div class="field">
                        <label>Passing score</label>
                        <input type="number" placeholder="Enter passing score" value="{{ $exam->passingScore }}"/>
                    </div>
                </div>
                <div class="ui divider"></div>
                <div class="field">
                    <label>Questions</label>
                    <a href="{{ url('exam/details/' . $id . '/question/new') }}">
                        <button class="ui button small">
                            <i class="icon plus"></i>
                            Add question
                        </button>
                    </a>
                    <br/><br/>
                    <div class="ui styled fluid accordion">
                        @foreach($exam->questions()->get() as $question)
                            <div class="title">
                                <i class="dropdown icon"></i>
                                {{ $question->wording }}
                            </div>
                            <div class="content">
                                <div class="transition hidden">
                                    <div class="grouped fields">
                                        @foreach($question->answers()->get() as $answer)
                                            @if(sizeof($question->answers()->where('correct', true)->get()) > 1)
                                                <div class="field">
                                                    <div class="ui checkbox">
                                                        <input type="checkbox" name="fruit" {{ $answer->correct ? 'checked' : '' }} tabindex="0" class="hidden" disabled>
                                                        <label>{{ $answer->text }}</label>
                                                    </div>
                                                </div>
                                            @elseif(sizeof($question->answers()->where('correct', true)->get()) == 1)
                                                <div class="field">
                                                    <div class="ui radio checkbox">
                                                        <input type="radio" name="fruit" {{ $answer->correct ? 'checked' : '' }} tabindex="0" class="hidden" disabled>
                                                        <label>{{ $answer->text }}</label>
                                                    </div>
                                                </div>
                                            @elseif(sizeof($question->answers()->where('correct', null)->get()) == sizeof($question->$answers()->get()))
                                                <!-- TODO: Keywords -->
                                                Palabras clave...
                                            @endif
                                        @endforeach
                                        <br>
                                        <div class="two fields">
                                            <div class="field">
                                                <label>Question score</label>
                                                <input disabled type="number" value="{{ $question->score }}" />
                                            </div>
                                        </div>
                                        <br>
                                        <button class="ui blue button"><i class="icon pencil"></i>Edit question</button>
                                        <button class="ui red button"><i class="icon remove"></i>Remove question</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection