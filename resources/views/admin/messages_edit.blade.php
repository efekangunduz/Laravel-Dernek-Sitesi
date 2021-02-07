<!-- Stylesheet -->
<link rel="stylesheet" href="{{asset('assets')}}/style.css">
<div class="content">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Edit Duyuru</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Message Detail</li>
                            @include('home.message')
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
                    <h3 class="card-title">Edit Message</h3>

            </div>
            <div class="card-body">
                    <!-- form start -->
                    <form role="form" action="{{route('admin_message_update',['id'=>$data->id])}}" method="post">
                        @csrf
                        <div class="card-body">
                            <table class="table table-hover">
                                <tr>
                                    <th>ID</th><td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th>Name</th><td>{{$data->name}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th><td>{{$data->email}}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th><td>{{$data->phone}}</td>
                                </tr>
                                <tr>
                                    <th>Subject</th><td>{{$data->subject}}</td>
                                </tr>
                                <tr>
                                    <th>Message</th><td>{{$data->message}}</td>
                                </tr>
                                <tr>
                                    <th>Admin Note</th>
                                    <td>
                                    <textarea id="note" name="note">{{$data->note}}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Update Message</button>
                                        </div>
                                    </td>
                                </tr>
                            </table>


                        </div>

                        <!-- /.card-body -->

                    </form>



            <!--/.card-body -->
                <div class="card-footer">

                </div>
                <!--/.card-footer-->

                <!--/.card-->

        </section>
        <!--/.content -->
    </div>
    <!-- /.content-wrapper-->


</div>

