<?php $__env->startSection('breadcrumb-title', 'Edit Profile'); ?>
<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit Profile</h4>

                    </div>
                    <div class="card-body">


                        <div class="table-responsive">
                            <form action="<?php echo e(route('shop.profile.update')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" id="id" value="<?php echo e($shop->id); ?>">
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_name" class="bmd-label-floating">Shop Name</label>
                                            <input type="text" class="form-control" name="shop_name" value="<?php echo e($shop->name); ?>" id="shop_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_owner_name" class="bmd-label-floating">Owner Name</label>
                                            <input type="text" class="form-control" name="shop_owner_name" value="<?php echo e($shop->owner_name); ?>" id="shop_owner_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_email" class="bmd-label-floating">E-mail</label>
                                            <input type="email" class="form-control" name="shop_email" value="<?php echo e($shop->email); ?>" id="shop_email" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_password" class="bmd-label-floating">Password</label>
                                            <input type="password" class="form-control" name="shop_password" id="shop_password">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_address" class="bmd-label-floating">Address</label>
                                            <input type="text" class="form-control" name="shop_address" value="<?php echo e($shop->address); ?>" id="shop_address" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_phone" class="bmd-label-floating">Phone</label>
                                            <input type="text" class="form-control" name="shop_phone" value="<?php echo e($shop->phone); ?>" id="shop_phone" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_area_code" class="bmd-label-floating">Area Code</label>
                                            <input type="text" class="form-control" value="<?php echo e($shop->area_code); ?>" name="shop_area_code" id="shop_area_code" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_type" class="bmd-label-floating">Shop Type</label>
                                            <input type="text" list="shopTypes" class="form-control" name="shop_type" id="shop_type">
                                            <datalist id="shopTypes">
                                                <option value="<?php echo e($shop->shop_type_id); ?>"><?php echo e($shop->shop_type_name); ?></option>
                                                <option>---------------------------</option>
                                                <?php $__currentLoopData = $allShopTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allShopType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($allShopType->id); ?>"><?php echo e($allShopType->type); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </datalist>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <label for="shop_image" class="bmd-label-floating">Image</label>
                                            <input type="file" class="form-control" name="shop_image" id="shop_image">
                                        </div>
                                    </div>

                                </div>

                                <div class="row py-2">
                                    <div class="col-md-3">
                                        <input type="submit" value="Update Profile" class="btn btn-block btn-primary pull-right">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <img src="<?php echo e(asset($shop->avatar)); ?>" alt="profile">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php echo e($shop->name); ?>

                        </h4>
                        <p class="card-description">
                            Some description about the shop, i.e the services it provides its opening and closing timing.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.shop.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Sir Imran\MyFoodApps\resources\views/shop/profile/edit.blade.php ENDPATH**/ ?>