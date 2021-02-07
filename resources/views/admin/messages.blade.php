@extends('layouts.admin')

@section('title', 'Contact Message List')
@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
@endsection
@section('content')
<div class="content">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Messages</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Messages</li>
                        </ol>
                    </div>
                </div><!--/.container-fluid-->
            </div>
        </section>
<!-- Main Content -->
        <section class="content">

            <!-- Default box -->
            <div class="col-md-12">
                <div class="card card-plain">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title mt-0"> Message List</h4>
                        @include('home.message')
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Admin Note</th>
                                    <th colspan="3">Actions</th>
                                </tr></thead>
                                <tbody>
                                @foreach($datalist as $rs)

                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->name}}</td>
                                        <td>{{$rs->email}}</td>
                                        <td>{{$rs->phone}}</td>
                                        <td>{{$rs->subject}}</td>
                                        <td>{{$rs->message}}</td>
                                        <td>{{$rs->note}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('admin_message_edit', ['id'=>$rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=800,height=600')" >
                                                <img src="{{asset('assets/admin/img')}}/edit.png" height="25"></a></td>
                                        <td><a class="btn btn-primary btn-round" href="{{route('admin_message_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete? Are you sure?')">Delete</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <!--/.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!--/.card-footer-->

            </div>
                <!--/.card-->


        <!--/.content -->
    </div>
    <!-- /.content-wrapper-->


@endsection


