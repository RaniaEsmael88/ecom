@extends('backend.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">{{auth()->user()->role}} -DashBoard</h5>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                        <i class="fas fa-wrench"></i>
                                    </button>

                                </div>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    Welcome to {{auth()->user()->role}} -DashBoard
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                </div>
            </div><!--/. container-fluid -->
        </div>
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <div class="wrapper">


        <!-- Main content -->
        <section class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add new category form</h3>
                            </div>
                            <!-- /.card-header -->

                            <div class="card-body">

                                <form action="{{route('category.store')}}" method="post">
                                    <div class="form-group">
                                        @csrf
                                        <label for="exampleInputEmail1">Category Name</label>
                                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" >

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Category description</label>
                                        <input type="text" class="form-control" name="description" id="exampleInputPassword1" >
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
