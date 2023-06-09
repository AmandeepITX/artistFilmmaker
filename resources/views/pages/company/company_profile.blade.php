@extends('layouts.app-with-header-footer')
@section('title', 'Filmmaker Profile')
@section('content')

    <div class="container">
        <div class="row profile-titel profile-info-tite pb-3 pt-5 mt-4">
            <div class="col-md-12">
                <h2>Profile Information</h2>
            </div>
        </div>
    </div>
    <div class=" sign-up  ">
        <form method="POST" action="{{ route('add_deal') }}">
            @csrf
            <div class="container" style="width:100%;">

                <div class="row">
                    {{-- <div class="row">
                    <div class="col-md-12" style="padding-right:0px;">
                        <input placeholder="Business Name" type="text" name="b_name" value="{{$user->b_name}}">
                @if ($errors->has('b_name'))
                <span class="error error-message">{{ $errors->first('b_name') }}</span>
                @endif
            </div>
        </div> --}}
                    {{-- <div class="col-md-4">
                    <p>Who should we contact to verify the discount at your business?</p>
                </div> --}}
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>First Name</label>
                                    <input type="text" placeholder="First Name" class="first-name" name="first_name"
                                        value="{{ old('first_name', $user->first_name) }}">
                                    @if ($errors->has('first_name'))
                                        <span class="error error-message">{{ $errors->first('first_name') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label>Last Name</label>
                                    <input type="text" placeholder="Last Name" class="last-name" name="last_name"
                                        value="{{ old('last_name', $user->last_name) }}">
                                    @if ($errors->has('last_name'))
                                        <span class="error error-message">{{ $errors->first('last_name') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Email</label>
                        <input type="email" placeholder="Email" class="email" name="email"
                            value="{{ old('email', $user->email) }}" readonly>
                        @if ($errors->has('email'))
                            <span class="error error-message">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label>Website</label>
                        <input type="text" placeholder="Website" name="website" id="website"
                            value="{{ old('website', $user->website) }}">
                        @if ($errors->has('website'))
                            <span class="error error-message">{{ $errors->first('website') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">

                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>City</label>
                        <input type="text" placeholder="City" class="city" name="city"
                            value="{{ old('city', @$user->userProfile->city) }}">
                        @if ($errors->has('city'))
                            <span class="error error-message">{{ $errors->first('city') }}</span>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label>State</label>
                        <select class="form-select" name="state" value="{{ old('state', @$user->userProfile->state) }}">
                            <option value=''> Select State... </option>
                            @foreach ($state as $show)
                                <option value="{{ $show->state_name }}" @if (old('state', @$user->userProfile->state) == $show->state_name) selected @endif>
                                    {{ $show->state_name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('state'))
                            <span class="error error-message">{{ $errors->first('state') }}</span>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label>Zip code</label>
                        <input type="text" placeholder="Zip code" id="zip-code" name="zip_code"
                            value="{{ old('zip_code', @$user->userProfile->zip_code) }}">
                        @if ($errors->has('zip_code'))
                            <span class="error error-message">{{ $errors->first('zip_code') }}</span>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="username">Bio Information</label>
                        <textarea class="personalization" name="bio_info" value=" " placeholder="Bio Information">{{ old('bio_info', @$user->userProfile->bio_info) }}</textarea>
                        @if ($errors->has('bio_info'))
                            <span class="error error-message">{{ $errors->first('bio_info') }}</span>
                        @endif
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label>Facebook</label>
                        <input type="text" placeholder="Facebook url" class="facebook" name="facebook_link"
                            value="{{ old('facebook_link', @$user->userProfile->facebook_link) }}">
                        @if ($errors->has('facebook_link'))
                            <span class="error error-message">{{ $errors->first('facebook_link') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label>Twitter</label>
                        <input type="text" placeholder="Twitter url" class="twitter_link" name="twitter_link"
                            value="{{ old('twitter_link', @$user->userProfile->twitter_link) }}">
                        @if ($errors->has('twitter_link'))
                            <span class="error error-message">{{ $errors->first('twitter_link') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label>Youtube</label>
                        <input type="text" placeholder="Youtube url" id="youtube_link" name="youtube_link"
                            value="{{ old('youtube_link', @$user->userProfile->youtube_link) }}">
                        @if ($errors->has('youtube_link'))
                            <span class="error error-message">{{ $errors->first('youtube_link') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label>Instagram</label>
                        <input type="text" placeholder="Instagram url" id="instagram_link" name="instagram_link"
                            value="{{ old('instagram_link', @$user->userProfile->instagram_link) }}">
                        @if ($errors->has('instagram_link'))
                            <span class="error error-message">{{ $errors->first('instagram_link') }}</span>
                        @endif
                    </div>
                    <div class="mb-1  col-md-6">
                        <label>Available to film</label>
                        <select class="form-select" name="available_to_film"
                            value="{{ old('available_to_film', @$user->userProfile->available_to_film) }}">
                            <option value=''>Select Available to film..... </option>
                            <option value='1'
                                {{ old('available_to_film', @$user->userProfile->available_to_film) == '1' ? 'selected' : '' }}>
                                Yes</option>
                            <option value='0'
                                {{ old('available_to_film', @$user->userProfile->available_to_film) == '0' ? 'selected' : '' }}>
                                No</option>
                        </select>
                        @if ($errors->has('available_to_film'))
                            <span class="error error-message">{{ $errors->first('available_to_film') }}</span>
                        @endif
                    </div>


                    <div class="mb-1  col-md-6">
                        <label for="select2Multiple">Genre</label>
                        <select class="js-example-basic-multiple-limit" name="genres_id[]" multiple>

                            @foreach ($genres as $genre)
                                {{-- <option value="{{ $genre->id }}" @if (old('genres_id') && in_array(old('genres_id'), $genre->id, $selectedGenres)) selected @endif> --}}

                                <option value="{{ $genre->id }}" @if (in_array($genre->id, old('genres_id', $selectedGenres))) selected @endif>
                                    {{ $genre->title }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('genres_id'))
                            <span class="error error-message">{{ $errors->first('genres_id') }}</span>
                        @endif
                    </div>
                </div>
            </div>


            <div class="content-wrapper">
                <!-- Company Create Deal -->
                <div class="create_form">
                    @include('pages.company.create_deal')
                </div>
            </div>

        </form>

    @endsection

    @section('custom-scripts')

        <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
        <!-- <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

                    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

                    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->



        {{-- <script src="https://unpkg.com/jquery-input-mask-phone-number@1.0.14/dist/jquery-input-mask-phone-number.js"></script> --}}


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        {{-- selec2 cdn --}}



        <style>
            .modal.fade:not(.show) {
                opacity: 1;
            }
        </style>


        <script>
            $(document).ready(function() {
                // Select2 Multiple
                $(".js-example-basic-multiple-limit").select2({
                    //   maximumSelectionLength: 2
                });

            });
        </script>

        <script>
            // $('.data-table').DataTable({
            //     "lengthChange": false,
            //     "pageLength": 3,
            // });

            $('#phone').usPhoneFormat({

                format: 'xxx-xxx-xxxx',

            });

            $('#industryname').select2({
                placeholder: "Select Industry",
            });

            // let industryname = $('#industryname').attr('value');
            // if (industryname != "") {
            //     $("#industryname").val(industryname.split(",")).trigger('change');
            // }

            $(document).ready(function() {
                $(".update_form").hide();

            });


            function openfileDialog() {
                $("#other_id").click();
            }

            function openfileDialog1() {
                $("#profile_id").click();
            }


            $(document).ready(function(e) {
                $('#other_id').change(function() {

                    var file = $("#other_id")[0].files[0];
                    var fileName = file.name;
                    $("#logo_view").hide();
                    $("#other_text1").append(fileName);
                    let reader = new FileReader();

                    reader.onload = (e) => {
                        $('#logo_preview').attr('src', e.target.result);
                        $('#logo_view').show();
                        // $('#logo_text').hide();
                    }

                    reader.readAsDataURL(this.files[0]);

                });


                $('#profile_id').change(function() {
                    var file = $("#profile_id")[0].files[0];
                    var fileName = file.name;
                    $("#profile_view").hide();
                    $("#other_text2").append(fileName);
                    let reader = new FileReader();

                    reader.onload = (e) => {
                        $('#profile_preview').attr('src', e.target.result);
                        $('#profile_view').show();
                        // $('#logo_text').hide();
                    }

                    reader.readAsDataURL(this.files[0]);

                });


                // sub category
                $('#category').on('change', function() {
                    $.ajaxSetup({
                        headers: {
                            'X-CSSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                    var category_id = this.value;
                    $.ajax({
                        url: "/get-sub-category",
                        type: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            category_id: category_id
                        },
                        success: function(dataResult) {
                            let html = '';
                            if (dataResult.data.length) {
                                for (let ky of dataResult.data) {
                                    html += `<option value="${ky.id}">${ky.name}</option>`;
                                }
                            }
                            $("#sub_category").html(html);
                        }
                    });
                });

            });
        </script>
    @endsection
