@extends('layouts.app-with-header-footer')
@section('title', 'Company Profile')
@section('content')
<div class=" sign-up sign-up-2 ">
    <div class="container" style="width:100%;">
        <div class="row">
            <div class="col-md-12">
                <h2>PROFILE INFORMATION</h2>
            </div>
        </div>
        <form method="POST" action="{{ route('company-profile-update') }}">
            @csrf

            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <label>First Name</label><br>
                            <input type="text" class="first-name" name="f_name" value="{{$company->f_name }}">
                            @if($errors->has('f_name'))
                            <span class="error error-message">{{ $errors->first('f_name') }}</span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label>Last Name</label><br>
                            <input type="text" class="last-name" name="l_name" value="{{$company->l_name}}">
                            @if($errors->has('l_name'))
                            <span class="error error-message">{{ $errors->first('l_name') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Contact Email</label><br>
                    <input type="email" class="email" name="email" value="{{$company->email}}">
                    @if($errors->has('email'))
                    <span class="error error-message">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="col-md-6">
                    <label>Contact Phone</label><br>
                    <input type="tel" name="phone" value="{{$company->phone}}">
                    @if($errors->has('phone'))
                    <span class="error error-message">{{ $errors->first('phone') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Business Address</label>
                    <input type="text" class="business-adderss" name="address" value="{{$company->address}}">
                    @if($errors->has('address'))
                    <span class="error error-message">{{ $errors->first('address') }}</span>
                    @endif
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <label>City</label><br>
                    <input type="text" class="city" name="city" value="{{$company->city}}">
                    @if($errors->has('city'))
                    <span class="error error-message">{{ $errors->first('city') }}</span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label>State</label>
                    <br>
                    <input class="state" name="state" value="{{$company->state}}">
                    @if($errors->has('state'))
                    <span class="error error-message">{{ $errors->first('state') }}</span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label>Zip code</label><br>
                    <input type="text" id="zip-code" name="zip_code" value="{{$company->zip_code}}">
                    @if($errors->has('zip_code'))
                    <span class="error error-message">{{ $errors->first('zip_code') }}</span>
                    @endif
                </div>
            </div>

            <div class="sub-btn">
                @if(Auth::user()->status == "pending" || Auth::user()->status == "unapproved")
                <input type="submit" value="Update" disabled>
                @else
                <input type="submit" value="Update">
                @endif

            </div>
        </form>
    </div>


    <div class="content-wrapper">

      
        <!-- Company Create Deal -->
        <div class="create_form">
            @include('pages.company.create_deal')
        </div>
        <section class="content filtertabledata">
            <div class="container-fluid">
                <div>
                    <!-- <div class="col-sm-4 mt-lg-3 serchbox">
                        <input type="text" placeholder="Search" wire:model="searchTerm" placeholder="Search" class="serchin">
                    </div> -->
                    <table class="table table-bordered mt-2 data-table mb-2">
                        <thead>
                            <tr>
                                <!--<th>No.</th>-->
                                <th>Discount</th>
                                <th>Description</th>
                                <th>Deal Type</th>
                                <th>Logo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($company_datas as $value)

                            <tr>
                                <!--<td>{{ $value->id }}</td>-->
                                <td>{{ $value->discount }}%</td>
                                <td>{{ $value->description }}</td>
                                <td>{{@$value->category->category_name}}</td>
                                <!-- <td>{{ $value->category_id }}</td> -->
                                <td class="imagesize"> <img src="{{ asset('uploads/company/logo/' . $value->logo) }}" style="height:60px; width:60px"></td>
                                @if(Auth::user()->status == "pending" || Auth::user()->status == "unapproved")
                                <td class="btnsgp">
                                    <button disabled class="btn btn-primary btndeit  btn-sm">Edit</button>
                                    <button disabled class="btn btn-danger btndel btn-sm">Delete</button>
                                </td>
                                @else
                                <td class="btnsgroup">
                                    <button type="button" class="btn btn-danger btn-sm btndel" data-toggle="modal" data-target="#editModal_{{ $value->id }}">Edit</button>
                                    <a class="btn btn-danger btn-sm btndel" href="{{ route('delete_deal',$value->id) }}">Delete</a>

                                    @include('pages.company.edit_modal', ['data'=>$value, 'categories'=>$categories])
                                </td>


                                @endif

                            </tr>
                            @endforeach
                        </tbody>
                    </table>



                </div>

            </div>
        </section>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<style>
    .modal.fade:not(.show) {
        opacity: 1;
    }
</style>
<script>
    $('.data-table').DataTable({
        "lengthChange": false,
        "pageLength": 3,


    });

    $(document).ready(function() {
        $(".update_form").hide();

    });


    function openfileDialog() {
        $("#other_id").click();
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
                $('#logo_text').hide();
            }

            reader.readAsDataURL(this.files[0]);

        });

    });

    $(document).on('click', '.editDeal', function(e) {
        e.preventDefault();

        var stud_id = $(this).val();
        $.ajax({
            type: "GET",
            url: "/edit-deal/" + stud_id,
            success: function(response) {
                if (response.status == 404) {
                    alert("Something Went Wrong!");
                } else {
                    // console.log(response.student.name);
                    $('#discount').val(response.companydeal.discount);
                    $('#category_id').val(response.companydeal.category_id);
                    $('#description').val(response.companydeal.description);
                    $('#logo').attr('src', '/uploads/company/logo/' + response.companydeal.logo);
                    $('#update_id').val(response.companydeal.id);

                }
            }
        });

        // alert(stud_id);
        $(".update_form").show();
        $(".create_form").hide();

        window.location = "?#update_deal_view";
    });

    function openfileUpdate() {
        $("#logo_update").click();
    }
    $(document).ready(function(e) {


        $('#logo_update').change(function() {

            var file = $("#logo_update")[0].files[0];
            var fileName = file.name;
            $("#hide_text").hide();
            $("#show_text").append(fileName);
            let reader = new FileReader();

            reader.onload = (e) => {
                $('#updated_preview').attr('src', e.target.result);
                $('#logo_view_modal').show();
                $('#hide_text').hide();
            }

            reader.readAsDataURL(this.files[0]);

        });


    });


    // update deal
    $(document).on('click', '#update_deal', function(e) {
        e.preventDefault();

        // $(this).text('Updating..');
        var id = $('#update_id').val();
        alert(id);

        var data = {
            'logo': $('#logo_update').val(),
            'discount': $('#discount').val(),
            'category_id': $('#category_id').val(),
            'description': $('#description').val(),
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "PUT",
            url: "/update-deal/" + id,
            data: data,
            dataType: "json",
            success: function(response) {
                // console.log(response);
                if (response.status == 400) {
                    alert('Something went wrong')
                    // $('.update_student').text('Update');
                } else {
                    alert('successfull');
                    // $('#update_msgList').html("");

                    // $('#success_message').addClass('alert alert-success');
                    // $('#success_message').text(response.message);
                    // $('#editModal').find('input').val('');
                    // $('.update_student').text('Update');
                    // $('#editModal').modal('hide');
                    // fetchstudent();
                }
            }
        });

    });
</script>

@endsection