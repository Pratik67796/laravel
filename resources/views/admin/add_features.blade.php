@extends('admin.layouts.mainlayout')
@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>hear You can add you features</h1>
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
              <form action="{{ route('sendd') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Heading</label>
                    <input type="text" name="one" class="form-control" id="exampleInputEmail1" placeholder="Write your heading">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1"></label>
                    <input type="file" name="photo_one" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title 1</label>
                    <input type="text" name="two" class="form-control" id="exampleInputEmail1" placeholder="Enter your First line ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title 2</label>
                    <input type="text" name="three" class="form-control" id="exampleInputEmail1" placeholder="Enter your second line">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title 3</label>
                    <input type="text" name="four" class="form-control" id="exampleInputEmail1" placeholder="Enter your third line">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title 4</label>
                    <input type="text" name="five" class="form-control" id="exampleInputEmail1" placeholder="Enter your fourth line">
                  </div>








                  

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
