<?php $__env->startSection('title', '500 Error | Endless Admin Panel'); ?>
<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- error-500 start-->
<div class="error-wrapper">
  <div class="container"><img class="img-100" src="<?php echo e(asset('assets/images/other-images/sad.png')); ?>" alt="">
    <div class="error-heading">
      <h2 class="headline font-primary">500</h2>
    </div>
    <div class="col-md-8 offset-md-2">
      <p class="sub-content">The page you are attempting to reach is currently not available. This may be because the page does not exist or has been moved.</p>
    </div>
    <div><a class="btn btn-primary-gradien btn-lg" href="index.html">BACK TO HOME PAGE</a></div>
  </div>
</div>
<!-- error-500 end-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('errors.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\endless_laravel\resources\views/errors/500.blade.php ENDPATH**/ ?>