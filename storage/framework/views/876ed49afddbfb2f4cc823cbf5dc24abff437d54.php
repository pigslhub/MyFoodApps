<?php $__env->startSection('breadcrumb-title', 'Admin Profile Edit'); ?>
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
                            <form action="<?php echo e(route('admin.profile.update')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" id="id" value="<?php echo e($admin->id); ?>">
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="admin_name" class="bmd-label-floating">Name</label>
                                            <input type="text" class="form-control" name="admin_name" value="<?php echo e($admin->name); ?>" id="admin_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="admin_email" class="bmd-label-floating">E-mail</label>
                                            <input type="email" class="form-control" name="admin_email" value="<?php echo e($admin->email); ?>" id="admin_email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="admin_password" class="bmd-label-floating">Password</label>
                                            <input type="password" class="form-control" name="admin_password" id="admin_password">
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-md-12">
                                        <div>
                                            <label for="admin_image" class="bmd-label-floating">Image</label>
                                            <input type="file" class="form-control" name="admin_image" id="admin_image">
                                        </div>
                                    </div>

                                </div>

                                <div class="row py-2">
                                    <div class="col-md-12">
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
                        <img src="<?php echo e(asset($admin->avatar)); ?>" alt="profile">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php echo e($admin->name); ?>

                        </h4>
                        <p class="card-description">
                            Some description about the admin, i.e Its qualification and skills.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/LocalDisk2/Projects/Food Project/MyFoodApps/resources/views/admin/profile/edit.blade.php ENDPATH**/ ?>