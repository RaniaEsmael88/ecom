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
                                <h3 class="card-title">Product Table</h3>
                            </div>
                            <!-- /.card-header -->

                            <div class="card-body">

                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Product price</th>
                                        <th>Category</th>
                                        <th>Product description</th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($all as $cat)
                                        <tr>

                                            <td>{{$cat->name}}</td>
                                            <td>{{$cat->price}}</td>
                                            <td>{{$cat->category->name}}</td>
                                            <td>{{$cat->description}}</td>
                                            <td><a type="button" href="{{route('product.edit',$cat->id)}}" class="btn btn-primary">Edit</a></td>
                                            <td>
                                                <form action="{{route('product.destroy',$cat->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button></td>
                                               </form>
                                        </tr>
                                    @endforeach
                                    </tfoot>
                                </table>
                                <br>
                                <a type="button" href="{{route('product.create')}}" class="btn btn-info">Create</a>
                                <br>
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
