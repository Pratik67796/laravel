<section id="services" class="services section-bg">
   
      <div class="container">
        <div class="section-title">

          <h2 data-aos="fade-in">Services</h2>
          <?php $__currentLoopData = $data3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $print): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <p data-aos="fade-in"><?php echo e($print->heading); ?></p>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </div>
          <div class="row">
            <?php $__currentLoopData = $data3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $print): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="<?php echo e(asset("/storage/cover_images2/".$print->image_one)); ?>" style="height:500px;width:500px">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Temporibus laudantium</a></h5>
                <p class="card-text"><?php echo e($print->title_one); ?></p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          
         
        </div>
         </div>
      </div>
   
    </section><!-- End Services Section -->
<?php /**PATH C:\xampp\htdocs\bocor\resources\views/layouts/partials/services.blade.php ENDPATH**/ ?>