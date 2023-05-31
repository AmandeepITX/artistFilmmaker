@extends('layouts.app-with-header-footer')
@section('title', 'Hero Profile')
@section('content')

<div class=" sign-up" id="signupclient">
    <div class="container">

        <h2>Artist Information</h2>
        <form method="POST" action="{{ route('user-profile-update') }}" enctype="multipart/form-data">
            @csrf
            @if($errors->any())
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
                    <label>Name</label><br>
                    <input type="text" class="first-name" name="name" value="{{$user->name}}">
                    @if($errors->has('name'))
                    <span class="error error-message">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="col-md-6">
                    <label>Website</label><br>
                    <input type="text" class="last-name" name="website" value="{{$user->website}}">
                    @if($errors->has('website'))
                    <span class="error error-message">{{ $errors->first('website') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Email</label><br>
                    <input type="email" class="email" name="email" value="{{$user->email}}">
                    @if($errors->has('email'))
                    <span class="error error-message">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="col-md-6">
                    <label>Media URl</label><br>
                    <input type="text" name="media_url" value="{{$user->media_url}}">
                    @if($errors->has('media_url'))
                    <span class="error error-message">{{ $errors->first('media_url') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">

                {{-- <div class="col-md-3">
                    <label>State</label>
                    <br>
                    <input class="state" name="state" value="{{$user->state}}">
                    @if($errors->has('state'))
                    <span class="error error-message">{{ $errors->first('state') }}</span>
                    @endif
                </div>
                <div class="col-md-3">
                    <label>Zip code</label><br>
                    <input type="text" id="zip-code" name="zip_code" value="{{$user->zip_code}}">
                    @if($errors->has('zip_code'))
                    <span class="error error-message">{{ $errors->first('zip_code') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Service (Army, Police, Volunteer Firefighter, etc.)</label>
                    <br>
                    <input class="Service" name="service" value="{{$user->service}}">
                    @if($errors->has('service'))
                    <span class="error error-message">{{ $errors->first('service') }}</span>
                    @endif
                </div>
            </div> --}}

            {{-- <div class="row" id="dateofservice">

                <label>Dates of service</label>
                <div class="form-check col-1">

                    <input type="radio" class="form-check-input" id="date_active" name="active_service" value="{{@$user->service_status}}">
                    <label class="form-check-label" for="check1">Active</label>
                </div>
                <div class="form-check col-1">

                    <input type="radio" class="form-check-input" id="service_inactive" value="{{@$user->service_from}}">
                    <label class=" form-check-label" for="check2">Inactive</label>
                </div>
                    <div id="service_date" style="display: none">
                    <div class="row">
                        <div class="started col-md-6">
                            <label>Started :</label>
                            <input class="date-own form-control" name="service_from" value="{{@$user->service_from}}" type="text">
                            <span id="service_from_validation"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="started col-md-6">
                            <label>End :</label>
                            <input class="date-own form-control" name="service_to" value="{{@$user->service_to}}" type="text">
                        </div>
                    </div>
                </div>
            </div>
 --}}


            <div class="row">
                <div class="col-md-12">
                    <label>Bio Information</label>
                    <br>
                    <textarea type="text" class="personalization" name="bio_info" value="{{$user->bio_info}}">{{$user->bio_info}}</textarea>
                    @if($errors->has('bio_info'))
                    <span class="error error-message">{{ $errors->first('bio_info') }}</span>
                    @endif
                </div>
            </div>

            <div class="row Upload-btn">
                <div class="col-md-3">
                    <p>Image</p>
                    {{-- <img src="{{"uploads/filmmaker/" .@$user->image}}" id="customerimagePreview"> --}}
                </div>
                <div class="col-md-3 Upload-img">

                    <input type="file" class="real-file" id="other_id" name="image" value="{{@$user->image}}" hidden="hidden">
                    <a type="button" class="custom-button" onclick="openfileDialog()">UPDATE IMAGE</a><br>
                    {{-- <span class="custom-text" id="other_text">No file chosen.</span> --}}
                    <div class="custom-text" id="other_text1"></div>

                </div>

                @if(@$user->image)
                <div class="col-md-3 Upload-img">

                    <img id="other_id_preview" src="{{asset('uploads/artist/' .$user->image)}}" style="height: 80px; width:80px">
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

                @if(@$user->headshot_card)
                <div class="col-md-3 Upload-img">

                    <img id="headshot_card_preivew" src="{{asset('uploads/user/headshot_card/'.$user->headshot_card)}}" style="height: 80px; width:80px">
                </div>
                @endif
            </div> --}}
            <div class="sub-btn">

                @if(Auth::user()->status == "pending" || Auth::user()->status == "unapproved")
                <input type="submit" disabled value="SUBMIT">
                @else
                   <input type="submit" value="SUBMIT" id=submit>
                @endif

            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

<script>

    $(function() {
        $("#submit").click(function(event) {
            var inactive_status = $("#service_inactive").prop("checked");
            if (inactive_status) {
                var getvalue = $("input[name=service_from]").val();
                if (getvalue == "") {
                    $("#service_from_validation").html('<p style="color: red;">Please Select Started Date </p>');
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
