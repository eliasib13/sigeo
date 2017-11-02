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
            <button class="ui primary button small" id="button-save">
                <i class="icon floppy save"></i>
                Save
            </button>
            <button class="ui green button small" id="button-save-back">
                <i class="icon check circle"></i>
                Save and go back
            </button>
        </div>

        <div class="room-form-container">
            <form class="ui form" id="new-exam-form" method="POST" action="{{ url('exam/new') }}">
                <div class="ui form">
                    <div class="two fields">
                        <div class="field">
                            <label>Exam name</label>
                            <input type="text" placeholder="Exam name" name="name"/>
                        </div>
                        <div class="field">
                            <label>Passing score</label>
                            <input type="number" placeholder="Enter passing score" name="passingScore"/>
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
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <input type="hidden" name="goBack" value="0" id="go-back-input" />
            </form>
        </div>
    </div>

    <script>
        var form = document.getElementById('new-exam-form'),
            buttonSave = document.getElementById('button-save'),
            buttonSaveAndGoBack = document.getElementById('button-save-back');

        buttonSave.addEventListener('click', function(e) {
            form.submit();
        });


        buttonSaveAndGoBack.addEventListener('click', function(e) {
            document.getElementById('go-back-input').value = 1;
            form.submit();
        })
    </script>
@endsection