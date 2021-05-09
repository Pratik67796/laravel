
<?php $__env->startSection('content'); ?>
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

            <th>Image</th>
            <th>Heading_1</th>
            <th>Des_1</th>
            <th>Heading_2</th>
            <th>Des_2</th>
            <th>Heading_3</th>
            <th>Des_3</th>
            <th>Heading_4</th>
            <th>Des_4</th>
            <th>Heading_5</th>
            <th>Des_5</th>
            <th>Controls</th>
            </tr>
            </thead>
            <tbody>
            
             <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><img src="<?php echo e(asset("/storage/cover_images/".$s->image)); ?>" style="height:100px;width:100px"></td>
                    <td><?php echo e($s -> heading_one); ?></td>
                    <td><?php echo e($s -> des_one); ?></td>
                    <td><?php echo e($s -> heading_two); ?></td>
                    <td><?php echo e($s -> des_two); ?></td>
                    <td><?php echo e($s -> heading_three); ?></td>
                    <td><?php echo e($s -> des_three); ?></td>
                    <td><?php echo e($s -> heading_four); ?></td>
                    <td><?php echo e($s -> des_four); ?></td>
                    <td><?php echo e($s -> heading_five); ?></td>
                    <td><?php echo e($s -> des_five); ?></td>
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

<?php echo $__env->make('admin.layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bocor\resources\views/admin/view_about.blade.php ENDPATH**/ ?>