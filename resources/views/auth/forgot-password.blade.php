@extends('layouts.app-with-header-footer')

@section('title', 'Forgot Password')

@section('content')

<div class="profile-titel">
<div class="container">
    <h2>{{ __('Reset Password') }}</h2>
</div>
</div>
<div class="container">
<div class="row justify-content-center">

    <div class="col-md-12">



        



        <div class="reset-password py-5">

            @if (session('status'))

            <div class="alert alert-success" role="alert">

                {{ session('status') }}

            </div>

            @endif



            <form method="POST" action="{{ route('password.email') }}">

                @csrf



                <div class="form-group row">

                    <div class="col-md-6 offset-3">
                        <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>



                        @error('email')

                        <span class="invalid-feedback" role="alert">

                            <strong>{{ $message }}</strong>

                        </span>

                        @enderror

                    </div>
                    <div class="col-md-6 offset-3 mt-3">

                        <button type="submit" class="pink-btn">

                            {{ __('Send Password Reset Link') }}

                        </button>

                    </div>

                </div>

            </form>

        </div>



    </div>

</div>
</div>


@endsection