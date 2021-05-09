
<?php $__env->startSection('content'); ?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact Detail</h1>
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
                <button type="button" class="btn btn-info float-right" onclick="window.location='<?php echo e(url("/adduser")); ?>'"><i class="fas fa-plus"></i> Add User</button>
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
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Controls</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $print): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
                  <tr>
                    <td><?php echo e($print->id); ?></td>
                    <td><?php echo e($print->name); ?></td>
                    <td><?php echo e($print->email); ?></td>
                    <td><?php echo e($print->subject); ?></td>
                    <td><?php echo e($print->message); ?></td>
                    <td></td>
                  </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                    
            
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

<?php $__env->stopSection(); ?>
<b></b>

<?php echo $__env->make('admin.layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bocor\resources\views/admin/view_contact_form.blade.php ENDPATH**/ ?>