<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="auth-bg">
  <div class="authentication-box">
    <div class="text-center"><img src="<?php echo e(asset('assets/images/endless-logo.png')); ?>" alt=""></div>
    <div class="card mt-4">
      <div class="card-body">
        <div class="text-center">
          <h4>SHOP LOGIN</h4>
          <h6>Enter your Email and Password </h6>
        </div>
        <form method="POST" action="<?php echo e(route('shop.login.submit')); ?>" class="theme-form">
            <?php echo csrf_field(); ?>
          <div class="form-group">
            <label for="email" class="col-form-label pt-0">Your Email</label>
            <input class="form-control" type="text" name="email" id="email" required="">
          </div>
          <div class="form-group">
            <label for="password" class="col-form-label">Password</label>
            <input class="form-control" type="password" name="password" id="password" required="">
          </div>
          <div class="checkbox p-0">
            <input id="remember" name="remember" type="checkbox">
            <label for="remember">Remember me</label>
          </div>
          <div class="form-group form-row mt-3 mb-0">
            <button class="btn btn-primary btn-block" type="submit">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('shop.auth.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Sir Imran\MyFoodApps\resources\views/shop/auth/login-image.blade.php ENDPATH**/ ?>