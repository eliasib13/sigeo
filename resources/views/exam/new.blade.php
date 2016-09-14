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
                        <input type="text" placeholder="Exam name"/>
                    </div>
                    <div class="field">
                        <label>Passing score</label>
                        <input type="number" placeholder="Enter passing score"/>
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

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection