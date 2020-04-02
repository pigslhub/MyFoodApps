<?php $__env->startSection('breadcrumb-title', 'Edit Profile'); ?>
<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item active">Edit Profile</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="edit-profile">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">My Profile</h4>
                        <div class="card-options"><a class="card-options-collapse" href="#" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('shop.profile.updateEmailAndPassword')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id" id="id" value="<?php echo e($shop->id); ?>">
                            <div class="row mb-2">
                                <div class="col-auto"><img class="img-70 rounded-circle" alt="" src="<?php echo e(auth('shop')->user()->avatar); ?>"></div>
                                <div class="col">
                                    <h3 class="mb-1"><?php echo e(auth('shop')->user()->name); ?></h3>
                                    <p class="mb-4"><?php echo e(auth('shop')->user()->email); ?></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="shop_email" class="form-label">Email-Address</label>
                                <input type="email" class="form-control" name="shop_email" id="shop_email" value="<?php echo e($shop->email); ?>" placeholder="your-email@domain.com" required>
                            </div>
                            <div class="form-group">
                                <label for="shop_password" class="form-label">Password</label>
                                <input class="form-control" type="password" name="shop_password" id="shop_password" placeholder="New Password">
                            </div>
                            <div class="form-footer">
                                <button class="btn btn-primary btn-block">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-8">

                <form method="post" action="<?php echo e(route('shop.profile.update')); ?>" class="card">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" id="id" value="<?php echo e($shop->id); ?>">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Edit Profile</h4>
                        <div class="card-options"><a class="card-options-collapse" href="#" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="shop_name" class="form-label">Company</label>
                                    <input class="form-control" type="text" name="shop_name" id="shop_name" value="<?php echo e($shop->name); ?>" placeholder="Company Name" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="shop_owner_name" class="form-label">Owner</label>
                                    <input class="form-control" type="text" name="shop_owner_name" id="shop_owner_name" value="<?php echo e($shop->owner_name); ?>" placeholder="Owner Name" required>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="shop_area_code" class="form-label">Area Code</label>
                                    <input class="form-control" type="number" name="shop_area_code" id="shop_area_code" value="<?php echo e($shop->area_code); ?>" placeholder="Area Code" required>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="shop_phone" class="form-label">Phone</label>
                                    <input class="form-control" type="text" name="shop_phone" id="shop_phone" value="<?php echo e($shop->phone); ?>" placeholder="Phone Number" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="shop_address" class="form-label">Address</label>
                                    <input class="form-control" type="text" name="shop_address" id="shop_address" value="<?php echo e($shop->address); ?>" placeholder="Restaurant Address" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <label for="about" class="form-label">About Our Services</label>
                                    <textarea class="form-control" rows="5" name="about" id="about" placeholder="Enter About your description"><?php echo e($shop->about); ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary" type="submit">Update Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.shop.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Sir Imran\MyFoodApps\resources\views/shop/profile/edit.blade.php ENDPATH**/ ?>