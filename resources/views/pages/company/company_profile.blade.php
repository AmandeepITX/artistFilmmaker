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
                        <input placeholder="Business Name" type="text" name="b_name" value="{{$company->b_name}}">
                @if($errors->has('b_name'))
                <span class="error error-message">{{ $errors->first('b_name') }}</span>
                @endif
            </div>
        </div> --}}
        {{-- <div class="col-md-4">
                    <p>Who should we contact to verify the discount at your business?</p>
                </div> --}}
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <label>Name</label>
                    <input type="text" placeholder="Name" class="first-name" name="name" value="{{$company->name }}">
                    @if($errors->has('name'))
                    <span class="error error-message">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="col-md-6">
                    <label>Media URL</label>
                    <input type="text" placeholder="Media URL" class="media_url" name="media_url" value="{{$company->media_url}}">
                    @if($errors->has('media_url'))
                    <span class="error error-message">{{ $errors->first('media_url') }}</span>
                    @endif
                </div>
            </div>
        </div>
</div>
<div class="row">
    <div class="col-md-6">
        <label>Email</label>
        <input type="email" placeholder="Email" class="email" name="email" value="{{$company->email}}" readonly>
        @if($errors->has('email'))
        <span class="error error-message">{{ $errors->first('email') }}</span>
        @endif
    </div>
    <div class="col-md-6">
        <label>Website</label>
        <input type="text" placeholder="Website" name="website" id="website" value="{{$company->website}}">
        @if($errors->has('website'))
        <span class="error error-message">{{ $errors->first('website') }}</span>
        @endif
    </div>
</div>
<div class="row">
    {{-- <div class="col-md-12">
        <label>Business Address</label>
        <input type="text" placeholder="Business Address" class="business-adderss" name="address" value="{{$company->address}}">
        @if($errors->has('address'))
        <span class="error error-message">{{ $errors->first('address') }}</span>
        @endif
    </div> --}}

</div>
<div class="row">
    {{-- <div class="col-md-4">
        <label>City</label>
        <input type="text" placeholder="City" class="city" name="city" value="{{$company->city}}">
        @if($errors->has('city'))
        <span class="error error-message">{{ $errors->first('city') }}</span>
        @endif
    </div>
    <div class="col-md-4">
        <label>State</label>
        <select class="form-select" name="state_name">
            @foreach ($state as $show )
            <option>{{$show->state_name}}</option>
            @endforeach
        </select>
    </div> --}}
    {{-- <div class="col-md-4">
        <label>Zip code</label>
        <input type="text" placeholder="Zip code" id="zip-code" name="zip_code" value="{{$company->zip_code}}">
        @if($errors->has('zip_code'))
        <span class="error error-message">{{ $errors->first('zip_code') }}</span>
        @endif
    </div> --}}
</div>


<div class="row">
    <div class="col-md-12">
        <label for="username">Bio Information</label>
        <textarea class="personalization" name="bio_info" value="" placeholder="Bio Information">{{$company->bio_info}}</textarea>
        @if($errors->has('bio_info'))
        <span class="error error-message">{{ $errors->first('bio_info') }}</span>
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
