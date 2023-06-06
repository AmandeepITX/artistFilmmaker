@extends('layouts.app-with-header-footer-discount')
@section('title', 'Market Place')
@section('content')
<div class="discounts-services">
    <div class="">

        @livewire('deals.deals-index')
        <div class="business-bottom-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="/img/bottom-phone-image.png">
                    </div>
                    <div class="col-md-7">
                        <h2>Does your business need more customers and clients?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a class="yellow-btn" href="#">YES, I NEED MORE CUSTOMERS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
