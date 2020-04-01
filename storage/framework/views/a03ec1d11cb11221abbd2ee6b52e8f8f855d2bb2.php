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
          <h4>ADMIN LOGIN</h4>
          <h6>Enter your Username and Password </h6>
        </div>
        <form method="POST" action="<?php echo e(route('admin.login.submit')); ?>" class="theme-form">
          <?php echo csrf_field(); ?>
          <div class="form-group">
            <label class="col-form-label pt-0">Your Name</label>
             <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
          </div>
          <div class="form-group">
            <label class="col-form-label">Password</label>
            <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="current-password">
          </div>
         
          <div class="form-group form-row mt-3 mb-0">
            <button class="btn btn-primary btn-block" type="submit">Login</button>
          </div>
         
          <div class="login-divider"></div>
         
        </form>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.auth.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/LocalDisk2/Projects/Food Project/MyFoodApps/resources/views/admin/auth/login-image.blade.php ENDPATH**/ ?>