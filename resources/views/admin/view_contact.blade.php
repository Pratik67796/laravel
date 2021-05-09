@extends('admin.layouts.mainlayout')
@section('content')
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
                <div class="card-footer clearfix">
                <button type="button" class="btn btn-info float-right" onclick="window.location='{{ url("/adduser") }}'"><i class="fas fa-plus"></i> Add User</button>
              </div>
              </div>

              <!-- /.card-header -->
             
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

        <div class="card">
          <div class="card-header">
          <h3 class="card-title">DataTable with default features</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
            <th>Id</th>
            <th>Address</th>
            <th>Email</th>
            <th>Call</th>                        
            <th>Controls</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $p)
              
                  <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->address }}</td>
                    <td>{{ $p->email }}</td>
                    <td>{{ $p->call }}</td>
                    <td></td>
                  </tr>
            @endforeach
            
            <!-- <td>extra</td> -->
            
         
            
            </tbody>
            <tfoot>
            </tfoot>
          </table>
          </div>
          <!-- /.card-body -->
        </div>
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
<b></b>
