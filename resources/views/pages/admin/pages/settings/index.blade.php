@extends('pages.admin.layouts.includes.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Settings </h1>
                </div>

            </div>
        </div>
    </div>


    <!-- /.content-header -->

    <!-- Main content -->

 
    <section class="content">
        <div class="container-fluid">
            <div class="card-body">
                @livewire('admin.settings')
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection