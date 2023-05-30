@extends('layouts.app-with-header-footer')

@section('title', 'Change Password')

@section('content')

<div class="row profile-titel profile-info-tite">
            <div class="col-md-12">
                <h2>Change Password</h2>
            </div>
        </div>

<!-- <section class="title-box">

    <div class="container">

        <div class="row">

            <div class="col-12 py-3 py-md-4">

                <h2 class="change-password-title">CHANGE PASSWORD</h2>

            </div>

        </div>

    </div>

</section> -->

<section>

    <div class="container profile-info">

        <div class="row">

            <div class="col-md-7">

                <form action="{{ route('update-company-password') }}" method="POST" class="change-password-form">

                    @csrf

                    <div class="row ">

                        <div class="col-md-12">
                            <input type="password" placeholder="Current Password" name="current_password" />

                            @if($errors->has('current_password'))

                            <span class="error error-message">{{ $errors->first('current_password') }}</span>

                            @endif

                        </div>

                        <div class="col-md-12">
                            <input type="password" placeholder="New Password" name="password" />

                            @if($errors->has('password'))

                            <span class="error error-message">{{ $errors->first('password')  }}</span>

                            @endif

                        </div>

                        <div class="col-md-12 ">

                            @if(Auth::user()->status == "pending" || Auth::user()->status == "unapproved")

                            <input type="submit" disabled value="UPDATE" class="btns" />

                            @else

                            <input type="submit" value="UPDATE" class="btns" />

                            @endif

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

</section>



@endsection