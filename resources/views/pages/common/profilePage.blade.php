@extends('layouts.app-with-header-footer-discount')
@section('title', 'Profile')
@section('content')
<div class="profile-titel">
        <div class="container">
            <h2>Profile</h2>
        </div>
    </div>
@livewire('profile.profile-page')

@endsection