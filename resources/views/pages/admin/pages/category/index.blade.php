@extends('pages.admin.layouts.includes.app')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Category</h1>
                </div>

            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card-body">
                @livewire('admin.category.category-index')
            </div>
        </div>
    </section>

</div>

@endsection