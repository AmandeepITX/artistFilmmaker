@extends('layouts.app-with-header-footer')
@section('title', 'Hero Profile')
@section('content')

    <div class=" sign-up" id="signupclient">
        <div class="container">

            <h2>Artist Information</h2>
            <form method="POST" action="{{ route('user-profile-update') }}" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <p><strong>Opps Something went wrong</strong></p>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-6">
                        <label>First Name</label>
                        <input type="text" placeholder="First Name" class="first-name" name="first_name"
                            value="{{ $user->first_name }}">
                        @if ($errors->has('first_name'))
                            <span class="error error-message">{{ $errors->first('first_name') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label>Last Name</label>
                        <input type="text" placeholder="Last Name" class="last-name" name="last_name"
                            value="{{ $user->last_name }}">
                        @if ($errors->has('last_name'))
                            <span class="error error-message">{{ $errors->first('last_name') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label>Website</label><br>
                        <input type="text" class="last-name" name="website" value="{{ $user->website }}">
                        @if ($errors->has('website'))
                            <span class="error error-message">{{ $errors->first('website') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label>Email</label><br>
                        <input type="email" class="email" name="email" value="{{ $user->email }}">
                        @if ($errors->has('email'))
                            <span class="error error-message">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label>City</label>
                        <input type="text" placeholder="City" class="city" name="city"
                            value="{{ @$user->userProfile->city }}">
                        @if ($errors->has('city'))
                            <span class="error error-message">{{ $errors->first('city') }}</span>
                        @endif
                    </div>

                    <div class="col-md-4">
                        <label>State</label>
                        <select class="form-select" name="state" value="{{ @$user->userProfile->state }}">
                            @foreach ($state as $show)
                                <option value="{{ $show->state_name }}" @if (@$user->userProfile->state == $show->state_name) selected @endif>
                                    {{ $show->state_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Zip code</label><br>
                        <input type="text" id="zip-code" name="zip_code" value="{{ $user->userProfile->zip_code }}">
                        @if ($errors->has('zip_code'))
                            <span class="error error-message">{{ $errors->first('zip_code') }}</span>
                        @endif
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <label>Bio Information</label>
                        <br>
                        <textarea type="text" class="personalization" name="bio_info" value="{{ $user->userProfile->bio_info }}">{{ $user->userProfile->bio_info }}</textarea>
                        @if ($errors->has('bio_info'))
                            <span class="error error-message">{{ $errors->first('bio_info') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Facebook</label>
                        <input type="text" placeholder="facebook url" class="facebook" name="facebook_link"
                            value="{{ @$user->userProfile->facebook_link }}">
                        @if ($errors->has('facebook_link'))
                            <span class="error error-message">{{ $errors->first('facebook_link') }}</span>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label>Twitter</label>
                        <input type="text" placeholder="Twitter url" class="twitter_link" name="twitter_link"
                            value="{{ @$user->userProfile->twitter_link }}">
                        @if ($errors->has('twitter_link'))
                            <span class="error error-message">{{ $errors->first('twitter_link') }}</span>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label>Youtube</label>
                        <input type="text" placeholder="youtube url" id="youtube_link" name="youtube_link"
                            value="{{ @$user->userProfile->youtube_link }}">
                        @if ($errors->has('youtube_link'))
                            <span class="error error-message">{{ $errors->first('youtube_link') }}</span>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label>Instagram</label>
                        <input type="text" placeholder="youtube url" id="instagram_link" name="instagram_link"
                            value="{{ @$user->userProfile->instagram_link }}">
                        @if ($errors->has('instagram_link'))
                            <span class="error error-message">{{ $errors->first('instagram_link') }}</span>
                        @endif
                    </div>
                    <div class="mb-1 radio-main">
                        <label>Seeking a film</label>
                        <select class="form-select" name="seekin_filmmaker"
                            value="{{ @$user->userProfile->seekin_filmmaker }}">
                            <option value='1' {{ @$user->userProfile->seekin_filmmaker == '1' ? 'selected' : '' }}>Yes
                            </option>
                            <option value='0' {{ @$user->userProfile->seekin_filmmaker == '0' ? 'selected' : '' }}>No
                            </option>
                        </select>
                    </div>
                    <div class="row Upload-btn">
                        <div class="col-md-3">
                            <p>Image</p>
                            {{-- <img src="{{"uploads/filmmaker/" .@$user->image}}" id="customerimagePreview"> --}}
                        </div>
                        <div class="col-md-3 Upload-img">

                            <input type="file" class="real-file" id="other_id" name="image"
                                value="{{ @$user->image }}" hidden="hidden">
                            <a type="button" class="custom-button" onclick="openfileDialog()">UPDATE IMAGE</a><br>
                            {{-- <span class="custom-text" id="other_text">No file chosen.</span> --}}
                            <div class="custom-text" id="other_text1"></div>

                        </div>

                        @if (@$user->image)
                            <div class="col-md-3 Upload-img">

                                <img id="other_id_preview" src="{{ asset('uploads/artist/' . $user->image) }}"
                                    style="height: 80px; width:80px">
                            </div>
                        @endif

                    </div>
                    {{-- <div class="row ">
                <div class="col-md-3">
                    <p>Headshot for your card</p>
                </div>
                <div class="col-md-3 Upload-img">
                    <input type="file" class="real-file" id="headshot_card" value="{{@$user->headshot_card}}" name="headshot_card" hidden="hidden">
                    <a type="button" class="custom-button" onclick="openfileforHead()">UPDATE FILE</a><br>
                    <span class="custom-text" id="headshot_text">No file chosen.</span>
                    <div class="custom-text" id="headshot_text1"></div>
                </div>

                @if (@$user->headshot_card)
                <div class="col-md-3 Upload-img">

                    <img id="headshot_card_preivew" src="{{asset('uploads/user/headshot_card/'.$user->headshot_card)}}" style="height: 80px; width:80px">
                </div>
                @endif
            </div> --}}
                    <div class="sub-btn">

                        @if (Auth::user()->status == 'pending' || Auth::user()->status == 'unapproved')
                            <input type="submit" disabled value="SUBMIT">
                        @else
                            <input type="submit" value="SUBMIT" id=submit>
                        @endif

                    </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet"
        type="text/css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

    <script>
        $(function() {
            $("#submit").click(function(event) {
                var inactive_status = $("#service_inactive").prop("checked");
                if (inactive_status) {
                    var getvalue = $("input[name=service_from]").val();
                    if (getvalue == "") {
                        $("#service_from_validation").html(
                            '<p style="color: red;">Please Select Started Date </p>');
                        window.location = "#dateofservice";
                        event.preventDefault();
                    }
                }
            });
        });



        function openfileDialog() {
            $("#other_id").click();
        }
        $(document).ready(function() {
            let status = $('input[name = active_service]').val()
            if (status == "inactive") {
                $("#service_inactive").prop('checked', true);
                $("#service_date").show();
            } else {
                $("#date_active").prop('checked', true);
            }
        });


        $(document).ready(function(e) {


            $('#other_id').change(function() {

                var file = $("#other_id")[0].files[0];

                var fileName = file.name;
                $("#other_text").hide();
                $("#other_text1").append(fileName);

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#other_id_preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });




        });

        function openfileforHead() {
            $("#headshot_card").click();
        }
        $(document).ready(function(e) {


            $('#headshot_card').change(function() {
                var file = $("#headshot_card")[0].files[0];
                var fileName = file.name;
                $("#headshot_text").hide();
                $("#headshot_text1").append(fileName);

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#headshot_card_preivew').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

        });

        //checkbox

        $("#service_inactive").click(function() {
            $("#date_active").prop('checked', false);
            $("#service_date").show();
        });

        $("#date_active").click(function() {

            $("#service_inactive").prop('checked', false);
            $("#service_date").hide();
            $('input[name = service_from]').val('');
            $('input[name = service_to]').val('')
        });

        $(".date-own").datepicker({
            autoclose: true,
            dateFormat: "dd/mm/yy",
            changeYear: true,
            changeMonth: true,
        });
    </script>

@endsection
