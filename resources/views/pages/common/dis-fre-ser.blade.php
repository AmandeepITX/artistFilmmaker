@extends('layouts.app-with-header-footer-discount')
@section('title', 'Marketplace')
@section('content')
<div class="discounts-services">
    <div class="">

        @livewire('deals.deals-index')

    </div>
    @endsection
