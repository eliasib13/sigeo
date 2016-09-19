@extends('common')

@section('content')
    @include('header-bar')
    <div class="offset-header">
        <div class="login-container">
            <form class="ui form" method="post" action="{{ $loginAction }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="field">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="example@email.com">
                </div>
                <div class="field">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="········">
                </div>
                <div class="field">
                    <button class="ui button" type="submit">Login</button>
                    <a href="" id="forgot-password"><i class="info circle icon"></i>Forgot your password?</a>
                </div>
            </form>
            @if($errorLogin)
                <div class="ui negative message">
                    <div class="header">
                        Login error
                    </div>
                    <p>Incorrect email or password. Try again.
                    </p>
                </div>
            @endif
        </div>
    </div>
@endsection