@extends('layouts.app-with-header-footer-contact')

@section('title', 'Contact Us')

@section('content')

<div class="contact-us-form sign-up">
    <div class="contact-us-titel">
        <div class="container">
            <h2>Contact Us</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 sm-offset-2">
                @include('sweetalert::alert')
                <form action="{{ route('contact-store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" placeholder="Name" class="first-name" name="name">
                            @if($errors->has('name'))
                            <div class="error error-message">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        {{-- <div class="col-md-6">
                            <input type="text" placeholder="Last Name" class="last-name" name="l_name">
                            @if($errors->has('l_name'))
                            <div class="error error-message">{{ $errors->first('l_name') }}</div>
                            @endif
                        </div> --}}
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" placeholder="Email" class="email" name="email">
                            @if($errors->has('email'))
                            <div class="error error-message">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        {{-- <div class="col-md-6">
                            <input type="text" placeholder="Business name" class="first-name" name="b_name">
                            @if($errors->has('b_name'))
                            <div class="error error-message">{{ $errors->first('b_name') }}</div>
                            @endif
                        </div> --}}
                        {{-- <div class="col-md-6">
                            <input type="text" placeholder="Business website" class="first-name" name="business_website">
                            @if($errors->has('business_website'))
                            <div class="error error-message">{{ $errors->first('business_website') }}</div>
                            @endif
                        </div> --}}
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <textarea type="text" placeholder="Description" class="first-name" name="description"></textarea>
                            @if($errors->has('description'))
                            <div class="error error-message">{{ $errors->first('description') }}</div>
                            @endif
                        </div>
                        {{-- <div class="col-md-6">
                            <select class="form-select multiple-select" id="industry" name="industryname[]" aria-label="Default select example" multiple>
                                @foreach ($industryName as $list )
                                <option value="{{$list->industry_name}}">{{$list->industry_name}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('industryname'))
                            <div class="error error-message">{{ $errors->first('industryname') }}</div>
                            @endif
                        </div> --}}

                    </div>
                    <div class="row">
                        {{-- <div class="col-md-6">
                            <select class="form-select multiple-select" id="biggest" placholder="Select Biggest" name="biggest[]" aria-label="Default select example" multiple>
                                <option value="More customers and clients">More customers and clients</option>
                                <option value="Website and marketing">Website and marketing</option>
                                <option value="Funding / Access to capital">Funding / Access to capital</option>
                            </select>
                            @if($errors->has('biggest'))
                            <div class="error error-message">{{ $errors->first('biggest') }}</div>
                            @endif
                        </div>
                         <div class="col-md-6">

                        </div> --}}

                    </div>
                    <div class="sub-btn">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>





@endsection
@section('scripts')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $("#industry").select2({
        placeholder: "Select an Industry",
    });

      $("#biggest").select2({
        placeholder: "Select an Biggest",
    });
</script>

@endsection
