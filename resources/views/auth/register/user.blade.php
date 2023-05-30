@extends('layouts.app-with-header-footer')
@section('title', 'Hero Sign Up')
@section('content')

<div class="signupp">
    <div class="container">
        <h2>AMERICAN HERO SIGN UP</h2>
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_type" value="user">
            <!--@if($errors->any())-->
            <!--<div class="alert alert-danger">-->
            <!--    <p><strong>Opps Something went wrong</strong></p>-->
            <!--    <ul>-->
            <!--        @foreach ($errors->all() as $error)-->
            <!--        <li>{{ $error }}</li>-->
            <!--        @endforeach-->
            <!--    </ul>-->
            <!--</div>-->
            <!--@endif-->
            <div class="row">
                <div class="col-md-6">
                    <label>First Name</label><br>
                    <input type="text" class="first-name" name="f_name" value="{{ old('f_name') }}">
                    @if($errors->has('f_name'))
                    <span class="error error-message">{{ $errors->first('f_name') }}</span>
                    @endif
                </div>
                <div class="col-md-6">
                    <label>Last Name</label><br>
                    <input type="text" class="last-name" name="l_name" value="{{ old('l_name') }}">
                    @if($errors->has('l_name'))
                    <span class="error error-message">{{ $errors->first('l_name') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Email</label><br>
                    <input type="email" class="email" name="email" value="{{ old('email') }}">
                    @if($errors->has('email'))
                    <span class="error error-message">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="col-md-6">
                    <label>Phone</label><br>
                    <input type="tel" name="phone" value="{{ old('phone') }}">
                    @if($errors->has('phone'))
                    <span class="error error-message">{{ $errors->first('phone') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>City</label><br>
                    <input type="text" class="city" name="city" value="{{ old('city') }}">
                    @if($errors->has('city'))
                    <span class="error error-message">{{ $errors->first('city') }}</span>
                    @endif
                </div>
                <div class="col-md-3">
                    <label>State</label>
                    <br>
                    <input class="state" name="state" value="{{ old('state') }}">
                    @if($errors->has('state'))
                    <span class="error error-message">{{ $errors->first('state') }}</span>
                    @endif
                </div>
                <div class="col-md-3">
                    <label>Zip code</label><br>
                    <input type="text" id="zip-code" name="zip_code" value="{{ old('zip_code') }}">
                    @if($errors->has('zip_code'))
                    <span class="error error-message">{{ $errors->first('zip_code') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Service (Army, Police, Volunteer Firefighter, etc.)</label>
                    <br>
                    <input class="Service" name="service" value="{{ old('service') }}">
                    @if($errors->has('service'))
                    <span class="error error-message">{{ $errors->first('service') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Personalization on card (i.e. Name of ship or city served, years served, wars served in,
                        combat veteran, medic, etc.)</label>
                    <br>

                    <textarea class="personalization" name="personalization" value="{{ old('personalization') }}"></textarea>
                    @if($errors->has('personalization'))
                    <span class="error error-message">{{ $errors->first('personalization') }}</span>
                    @endif
                </div>
            </div>
            
            <div class="row" id="dateofservice">

                <label>Dates of service</label>
                <div class="form-check col-1">
                    <input type="radio" class="form-check-input" id="date_active" name="active_service" value="active">
                    <label class="form-check-label" for="check1">Active</label>
                </div>
                <div class="form-check col-1">
                    <input type="radio" class="form-check-input" id="service_inactive" value="inactive_service">
                    <label class=" form-check-label" for="check2">Inactive</label>
                </div>
                <div id="service_date" style="display: none">
                    <div class="row">
                        <div class="started col-md-6">
                            <label>Started :</label>
                            <input class="date-own serive_from form-control" autocomplete="off" name="service_from" type="text">
                            <span id="service_from_validation"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="started col-md-6">
                            <label>End :</label>
                            <input class="date-own form-control" autocomplete="off" name="service_to" type="text">
                        </div>
                    </div>
                </div>

                <div id="servicedateappend"></div>
            </div>

            <!-- <div class="row" id="dateofservice">-->

            <!--    <label>Dates of service</label>-->
            <!--    <div class="form-check col-1">-->
            <!--        <input type="radio" class="form-check-input" id="date_active" name="active_service" value="active">-->
            <!--        <label class="form-check-label" for="check1">Active</label>-->
            <!--    </div>-->
            <!--    <div class="form-check col-1">-->
            <!--        <input type="radio" class="form-check-input" id="service_inactive" value="inactive_service">-->
            <!--        <label class=" form-check-label" for="check2">Inactive</label>-->
            <!--    </div>-->
            <!--    <div id="service_date" style="display: none">-->

            <!--        <label>Started :</label>-->
            <!--        <input class="date-own serive_from form-control" autocomplete="off" name="service_from" style="width: 300px;" type="text">-->
            <!--        <span id="service_from_validation"></span>-->
            <!--        <label>End :</label>-->
            <!--        <input class="date-own form-control" autocomplete="off" name="service_to" style="width: 300px;" type="text">-->
            <!--    </div>-->

            <!--    <div id="servicedateappend"></div>-->
            <!--</div>-->
            <div class="row Upload-btn">
                <div class="col-md-3">
                    <p>Other ID (drivers license, School ID, State ID)</p>
                </div>
                <div class="col-md-3 Upload-img">
                    <input type="file" class="real-file" id="other_id" name="other_id" value="" hidden="hidden">
                    <a type="button" class="custom-button" onclick="openfileDialog()">UPLOAD FILE</a><br>
                    <span class="custom-text" id="other_text">No file chosen.</span>
                    <div class="custom-text" id="other_text1"></div>
                    @if($errors->has('other_id'))
                    <div class="error error-message">{{ $errors->first('other_id') }}</div>
                    @endif
                </div>
                <div class="col-md-3 Upload-img" id="other_view" style="display:none;">

                    <img id="other_id_preview" alt="previewimage" style="height:100px; width:150px">
                </div>

            </div>
            <div class="row Upload-btn">
                <div class="col-md-3">
                    <p>Headshot for your card</p>
                </div>
                <div class="col-md-3 Upload-img">
                    <input type="file" class="real-file" id="headshot_card" value="" name="headshot_card" hidden="hidden">

                    <a type="button" class="custom-button" onclick="openfileforHead()">UPLOAD FILE</a><br>
                    <span class="custom-text" id="headshot_text">No file chosen.</span>
                    <div class="custom-text" id="headshot_text1"></div>
                    @if($errors->has('headshot_card'))
                    <div class="error error-message">{{ $errors->first('headshot_card') }}</div>
                    @endif
                </div>

                <div class="col-md-3 Upload-img" id="headshot_view" style="display:none;">

                    <img id="headshot_card_preivew" alt="previewimage" style="height:100px; width:150px">
                </div>
            </div>

            <div class="row Upload-btn">
                <div class="col-md-6">
                    <label>Password</label>
                    <input type="password" class="business-adderss" name="password">
                    @if($errors->has('password'))
                    <span class="error error-message">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="col-md-6">
                    <label>Confirm Password</label>
                    <input type="password" class="business-adderss" name="confirm_password">
                    @if($errors->has('confirm_password'))
                    <span class="error error-message">{{ $errors->first('confirm_password') }}</span>
                    @endif
                </div>
            </div>
            <div class="sub-btn">
                <input type="submit" value="SUBMIT" id="submit">
        </form>
    </div>
</div>

<style>
    .ui-datepicker-calendar {
        display: none;
    }
</style>
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


    $(document).ready(function() {
        $("#other_view").hide();
        $("#headshot_view").hide();
    });

    function openfileDialog() {
        $("#other_id").click();
    }



    $(document).ready(function(e) {


        $('#other_id').change(function() {

            var file = $("#other_id")[0].files[0];
            var fileName = file.name;
            $("#other_text").hide();
            $("#other_text1").append(fileName);
            $('#other_view').show();

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
            $('#headshot_view').show();

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
        $("#date-own").val('');
        $("#service_date").hide();
    });



  
    $(".date-own").datepicker({
        autoclose: true,
        dateFormat: "dd/mm/yy",
        changeYear: true,
        changeMonth: true,
    });
</script>

@endsection