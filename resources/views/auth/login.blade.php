@extends('layouts.app-with-header-footer')
@section('title', 'Login')
@section('content')
<div class="profile-titel">
        <div class="container">
            <h2>Login</h2>
        </div>
    </div>
    <div class="container">
<div class="row">
    <div class="col-md-6 offset-md-3 col-12">
        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf

            @if(session('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
            @endif
            @if(session('message'))
            <div class="alert alert-info">{{session('message')}}</div>
            @endif
            <div class="row pt-3 pb-0 loginform">
                <div class="col-md-12">
                    <input type="text" placeholder="Email" name="email" value="{{ old('email')}}" autofocus>
                    @if($errors->has('email'))
                    <span class="error error-message">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="col-md-12 password pt-lg-1">
                    <input placeholder="Password" type="password" name="password" />
                    @if($errors->has('password'))
                    <span class="error error-message">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="col-md-12 text-end">


                    @if (Route::has('password.request'))
                    <a class="blk-text" href="{{ route('password.request') }}">
                        {{ __('Forgot Password?') }}
                    </a>
                    @endif
                </div>
                <div class="col-md-12 art-submit-btn py-3">
                    <input type="submit" value="SUBMIT" name="" class="btns" />
                </div>
                <div class="col-md-12 art-submit-btn py-2">
                    <p> Not a member? <a href="{{ route('business-signup') }}" >Sign up </a> </p>
                </div>
                <!-- @extends('layouts.signup-modal') -->
            </div>
        </form>
    </div>
</div>
</div>

@endsection