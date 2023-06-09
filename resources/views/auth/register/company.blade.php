@extends('layouts.app-with-header-footer')
@section('title', 'List Your Business ')
@section('content')
    <div class="signup-titel">
        <div class="container">
            <h2>Sign Up</h2>
        </div>
    </div>
    <div class="container">
        <div class="businessform sign-up">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf

                <div class="row mt-5">
                <div class="mb-1 radio-main">
                    <label class="radio-nw"><input type="radio" name="type" value="filmmaker" /> Filmmaker</label>
                    <label class="radio-nw"><input type="radio" name="type" value="artist" /> Artist</label>

                    <input type="hidden" class="radioBtnChoose" name="user_type" value="{{ old('user_type') }}">

                    @if ($errors->has('user_type'))
                        <span class="error error-message">{{ $errors->first('user_type') }}</span>
                    @endif
                </div>
                    {{-- <div class="col-md-12 upload-btn">

                        <input class="file-upload" name="image" id="upload" type="file" accept="image/*"
                            placeholder="Upload Image" />

                        @if ($errors->has('image'))
                            <span class="error error-message">{{ $errors->first('image') }}</span>
                        @endif

                        <input type="hidden" name="croplogo" id="upload-img" />
                        <img src="" style="display: none;" id="dis-img" height="120" width="120">
                    </div> --}}
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" placeholder="First Name" class="name" name="first_name" value="{{ old('first_name') }}">
                        @if ($errors->has('first_name'))
                            <span class="error error-message">{{ $errors->first('first_name') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <input type="text" placeholder="Last Name" class="name" name="last_name" value="{{ old('last_name') }}">
                        @if ($errors->has('last_name'))
                            <span class="error error-message">{{ $errors->first('last_name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    {{-- <div class="col-md-6">
                        <input type="url" placeholder="Website" name="website" value="{{ old('website') }}">
                        @if ($errors->has('website'))
                            <span class="error error-message">{{ $errors->first('website') }}</span>
                        @endif
                    </div> --}}
                    <div class="col-md-6">
                        <input type="email" placeholder="Email" class="email" name="email"
                            value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="error error-message">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <input type="password" placeholder="Password" class="password" name="password"
                            value="{{ old('password') }}">
                        @if ($errors->has('password'))
                            <span class="error error-message">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <input type="password" placeholder="Password Confirmation" class="confirm_password"
                            name="confirm_password" value="{{ old('confirm_password') }}">

                        @if ($errors->has('confirm_password'))
                            <span class="error error-message">{{ $errors->first('confirm_password') }}</span>
                        @endif
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-md-12">
                        <textarea type="text" placeholder="Bio Information" name="bio_info" value="{{ old('bio_info') }}"> </textarea> --}}

                        {{-- @if ($errors->has('bio_info'))
                            <span class="error error-message">{{ $errors->first('bio_info') }}</span>
                        @endif --}}
                    {{-- </div>
                </div> --}}

                <input type="submit" value="SUBMIT">
                <div class="col-md-12 art-submit-btn py-2">
                    <p> Already have an account? <a href="{{ route('login') }}" >Login </a> </p>
                </div>
            </form>
        </div>
    </div>
    @include('layouts.crop_image')
@endsection
@section('script')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {{-- <script>
$(".multiple-select").select2({
placeholder: "Select a state",
});
</script> --}}
    <script>
        // Get the radio buttons and input field
        const radioButtons = document.querySelectorAll('input[type="radio"][name="type"]');
        const inputField = document.querySelector('.radioBtnChoose');

        // Add event listener to each radio button
        radioButtons.forEach(radio => {
            radio.addEventListener('change', function() {
                // Update the value of the input field
                inputField.value = this.value;
            });
        });
    </script>
@endsection
