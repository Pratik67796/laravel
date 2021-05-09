<section id="about" class="about section-bg">
      <div class="container">
      <?php $__currentLoopData = $data2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>        
        <div class="row">

          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start">
            <img src="<?php echo e(asset("/storage/cover_images/".$s->image)); ?>" class="img-fluid" alt="" style="height:400px;width:1000px">
          </div>
          <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3 data-aos="fade-in" data-aos-delay="100"><?php echo e($s->heading_one); ?></h3>
              <p data-aos="fade-in">
                <?php echo e($s->des_one); ?>

              </p>
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-receipt"></i>
                  <h4><?php echo e($s->heading_two); ?></h4>
                  <p><?php echo e($s->des_two); ?></p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-cube-alt"></i>
                  <h4><?php echo e($s->heading_three); ?></h4>
                  <p><?php echo e($s->des_three); ?></p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-images"></i>
                  <h4><?php echo e($s->heading_four); ?></h4>
                  <p><?php echo e($s->des_four); ?></p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-shield"></i>
                  <h4><?php echo e($s->heading_five); ?></h4>
                  <p><?php echo e($s->des_five); ?></p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </section><!-- End About Section -->
<?php /**PATH C:\xampp\htdocs\bocor\resources\views/layouts/partials/about.blade.php ENDPATH**/ ?>