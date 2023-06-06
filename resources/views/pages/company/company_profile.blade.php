@extends('layouts.app-with-header-footer')
@section('title', 'Company Profile')
@section('content')

    <div class="container">
        <div class="row profile-titel profile-info-tite">
            <div class="col-md-12">
                <h2>Profile Information</h2>
            </div>
        </div>
    </div>
    <div class=" sign-up profile-info">
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Email</label>
                        <input type="email" placeholder="Email" class="email" name="email" value="{{ $user->email }}"
                            readonly>
                        @if ($errors->has('email'))
                            <span class="error error-message">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label>Website</label>
                        <input type="text" placeholder="Website" name="website" id="website"
                            value="{{ $user->website }}">
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
                            value="{{ @$user->userProfile->city }}">
                        @if ($errors->has('city'))
                            <span class="error error-message">{{ $errors->first('city') }}</span>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label>State</label>
                        <select class="form-select" name="state" value ="{{@$user->userProfile->state}}">
                            @foreach ($state as $show)
                                <option value = "{{$show->state_name}}" @if (@$user->userProfile->state == $show->state_name) selected @endif >{{ $show->state_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Zip code</label>
                        <input type="text" placeholder="Zip code" id="zip-code" name="zip_code"
                            value="{{ @$user->userProfile->zip_code }}">
                        @if ($errors->has('zip_code'))
                            <span class="error error-message">{{ $errors->first('zip_code') }}</span>
                        @endif
                    </div>


                </div>


                <div class="row">
                    <div class="col-md-12">
                        <label for="username">Bio Information</label>
                        <textarea class="personalization" name="bio_info" value="" placeholder="Bio Information">{{ @$user->userProfile->bio_info }}</textarea>
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
                        <label>Available to film</label>
                         <select class="form-select" name="available_to_film"  value="{{ @$user->userProfile->available_to_film }}">
                                <option value='1' {{@$user->userProfile->available_to_film == '1' ? 'selected' : ''}}>Yes</option>
                                <option value='0' {{@$user->userProfile->available_to_film == '0' ? 'selected' : ''}}>No</option>
                        </select>
                    </div>
                    <div class="mb-1 radio-main">
                        <label>Genre</label>
                        <select class="form-select" name = "genres_id" value={{@$user->userProfile->genres_id}}>
                            @foreach($genres as $genre)
                            <option value= "{{$genre->id}}" @if(@$user->userProfile->genres_id == $genre->id) selected @endif>{{$genre->title}}</option>
                            @endforeach
                    </select>
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


        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://unpkg.com/jquery-input-mask-phone-number@1.0.14/dist/jquery-input-mask-phone-number.js"></script>

        <style>
            .modal.fade:not(.show) {
                opacity: 1;
            }
        </style>
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

            let industryname = $('#industryname').attr('value');
            if (industryname != "") {
                $("#industryname").val(industryname.split(",")).trigger('change');
            }

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
