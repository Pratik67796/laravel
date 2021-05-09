    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">
        
        <div class="section-title">
          <h2 data-aos="fade-in">Frequently Asked Questions</h2>
          <p data-aos="fade-in">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        
        <?php $__currentLoopData = $data7; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $print): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4><?php echo e($print->qestion); ?></h4>
          </div>
          <div class="col-lg-7">
            <p>
              <?php echo e($print->answer); ?>

            </p>
          </div>
        </div><!-- End F.A.Q Item-->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </section><!-- End Frequently Asked Questions Section -->
<?php /**PATH C:\xampp\htdocs\bocor\resources\views/layouts/partials/qes.blade.php ENDPATH**/ ?>