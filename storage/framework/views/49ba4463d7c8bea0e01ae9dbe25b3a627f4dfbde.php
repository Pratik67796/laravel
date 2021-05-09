<section id="features" class="features section-bg">
     
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Features</h2>
          <?php $__currentLoopData = $data4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $select): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <p data-aos="fade-in"><?php echo e($select->h_one); ?></p>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </div>

        <?php $__currentLoopData = $data4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $select): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row content">
          
          <div class="col-md-5" data-aos="fade-right">
           
            <img src="<?php echo e(asset("/storage/cover_features/".$select->image)); ?>" style="height:400px;width:400px">
         </div>
          <div class="col-md-7 pt-4" data-aos="fade-left">
            <h3><?php echo e($select->h_two); ?></h3>
            <p class="font-italic">
              <?php echo e($select->h_three); ?>

            </p>
            <ul>
              <li><i class="icofont-check"></i><?php echo e($select->h_four); ?></li>
              <li><i class="icofont-check"></i> <?php echo e($select->h_five); ?></li>
            </ul>

          </div>
        </div>
      
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       

       
      </div>
       
    </section><!-- End Features Section -->
<?php /**PATH C:\xampp\htdocs\bocor\resources\views/layouts/partials/features.blade.php ENDPATH**/ ?>