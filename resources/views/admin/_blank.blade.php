@extends('layouts.admin')

@section('title', 'Admin Panel Anasayfa')

@section('content')
<div class="content">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Blank Page</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div><!--/.container-fluid-->
            </div>
        </section>
<!-- Main Content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Title</h3>

            </div>
            <div class="card-body">
                Body Area
            </div>
            <!--/.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!--/.card-footer-->
            </div>
                <!--/.card-->

        </section>
        <!--/.content -->
    </div>
    <!-- /.content-wrapper-->


</div>
@endsection
