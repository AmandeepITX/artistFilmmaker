@extends('layouts.app-with-header-footer-discount')
@section('title', 'Profile')
@section('content')
<div class="profile-titel">
    <a class="back-btn">
<i class="fa-solid fa-arrow-left"></i>
    </a>
        <div class="container">
            <h2>Profile</h2>
        </div>
    </div>
@livewire('profile.profile-page')

@endsection