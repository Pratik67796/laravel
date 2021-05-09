<!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Team</h2>
          <p data-aos="fade-in">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        
        <div class="row">
          <?php $__currentLoopData = $data6; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $print): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-xl-3 col-lg-4 col-md-6">

            <div class="member" data-aos="fade-up">
              <div class="pic"><img src="<?php echo e(asset("/storage/cover_team/".$print->image)); ?>" class="img-fluid" alt="" style="height:400px;width:1000px"></div>
              <h4><?php echo e($print->name); ?></h4>
              <span><?php echo e($print->post); ?></span>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>



      </div>
    </section><!-- End Team Section -->
<?php /**PATH C:\xampp\htdocs\bocor\resources\views/layouts/partials/team.blade.php ENDPATH**/ ?>