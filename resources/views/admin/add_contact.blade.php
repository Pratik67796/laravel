@extends('admin.layouts.mainlayout')
@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact Us</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">heading Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('form3') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Add Address</label>
                    <input type="text" name="address" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Enter Email</label>
                    <input type="text" name="mail" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Add Call</label>
                    <input type="text" name="call" class="form-control">
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

      <!-- </div> --><!-- /.container-fluid -->
    </section>
    
  </div>
@endsection
<b></b>
