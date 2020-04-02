<?php $__env->startSection('title', 'Signup'); ?>
<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="auth-bg">
  <div class="authentication-box">
    <div class="text-center"><img src="<?php echo e(asset('assets/images/endless-logo.png')); ?>" alt=""></div>
    <div class="card mt-4 p-4">
      <h4 class="text-center">NEW USER</h4>
      <h6 class="text-center">Please Fill The Following Form For Signup</h6>
      <form action="<?php echo e(route('user.create')); ?>" method="post" class="theme-form">
          <?php echo csrf_field(); ?>
        <div class="form-row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name" class="col-form-label">Name</label>
              <input class="form-control" type="text" name="name" id="name" placeholder="Enter your Name" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="email" class="col-form-label">Email</label>
              <input class="form-control" type="email" name="email" id="email" placeholder="Enter your Email" required>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="password" class="col-form-label">Password</label>
              <input class="form-control" type="password" name="password" id="password" placeholder="Enter your Password" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="gender" class="col-form-label">Gender</label>
              <input class="form-control" list="select-gender" type="text" name="gender" id="gender" placeholder="Select your Gender" required>
                <datalist id="select-gender">
                    <option value="male"></option>
                    <option value="female"></option>
                </datalist>
            </div>
          </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="area_code" class="col-form-label">Area Code</label>
                    <input class="form-control" type="number" name="area_code" id="area_code" placeholder="Enter your Area code" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="address" class="col-form-label">Address</label>
                    <input class="form-control" type="text" name="address" id="address" placeholder="Enter your Address" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="phone" class="col-form-label">Phone</label>
                    <input class="form-control" type="text" name="phone" id="phone" placeholder="Enter your Phone" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="date_of_birth" class="col-form-label">Date Of Birth</label>
                    <input class="form-control" type="date" name="date_of_birth" id="date_of_birth" placeholder="Select your DOB" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="user_type" class="col-form-label">User Type</label>
                    <input class="form-control" list="select-type" type="text" name="user_type" id="user_type" placeholder="Select User Type" required>
                    <datalist id="select-type">
                        <option value="Customer"></option>
                        <option value="Driver"></option>
                        <option value="Home Base Chef"></option>
                        <option value="Restaurant"></option>
                    </datalist>
                </div>
            </div>
        </div>
        <div class="form-row">
          <div class="col-sm-4">
            <button class="btn btn-primary" type="submit">Sign Up</button>
          </div>
          <div class="col-sm-8">
            <div class="text-left mt-2 m-l-20">Are you already user?  <a class="btn-link text-capitalize" href="#">Login</a></div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('shop.auth.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/LocalDisk2/Projects/Food Project/MyFoodApps/resources/views/signup-image.blade.php ENDPATH**/ ?>