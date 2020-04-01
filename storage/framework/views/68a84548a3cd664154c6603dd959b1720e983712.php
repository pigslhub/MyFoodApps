<?php $__env->startSection('pageName', 'Admins'); ?>
<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="container-fluid">
        <?php echo $__env->make("flashMessages", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Admin Management</h4>
                        <p class="card-category">Admin Names</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form action="<?php echo e(route('admin.store')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="admin_id" class="bmd-label-floating">Admin ID (disabled)</label>
                                            <input type="text" class="form-control" name="admin_id" id="admin_id" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="admin_name" class="bmd-label-floating">Enter Admin Name</label>
                                            <input type="text" class="form-control" name="admin_name" id="admin_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="admin_email" class="bmd-label-floating">Enter Admin Email </label>
                                            <input type="text" class="form-control" name="admin_email" id="admin_email" required>
                                        </div>
                                    </div>

                                </div>

                                <div class="row py-2">

                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="admin_password" class="bmd-label-floating">Enter Password</label>
                                            <input type="text" class="form-control" name="admin_password" id="admin_password" required>
                                        </div>
                                    </div>


                                </div>

                                <div class="row py-2">
                                    <div class="col-md-3">
                                        <input type="submit" value="Add Admin" class="btn btn-block btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if(Auth::user()->type == '0'): ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">All Admins</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="" class="dataTables_wrapper no-footer">

                                    <table id="category_table" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
                                        <thead class="text-primary">
                                        <tr role="row">
                                            <th class="sorting_asc">ID</th>
                                            <th class="sorting">Name</th>
                                            <th class="sorting">Email</th>
                                            <th class="sorting">Status</th>
                                            <th class="sorting">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr role="row">
                                                <td><?php echo e($admin->id); ?></td>
                                                <td><?php echo e($admin->name); ?></td>
                                                <td><?php echo e($admin->email); ?></td>
                                                <td>
                                                    <?php if($admin->status == "1"): ?>
                                                        <h6 style="color: green">Activated</h6>
                                                    <?php else: ?>
                                                        <h6 style="color: red">Deactivated</h6>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if($admin->status == "1"): ?>
                                                        <a href="<?php echo e(route('admin.deactivate', $admin->id)); ?>" class="btn btn-sm btn-danger">Deactivate</a>
                                                    <?php else: ?>
                                                        <a href="<?php echo e(route('admin.activate', $admin->id)); ?>" class="btn btn-sm btn-success">Activate</a>
                                                    <?php endif; ?>
                                                    <a href="<?php echo e(route('admin.edit', $admin->id)); ?>" class="btn btn-sm btn-warning">edit</a>
                                                    <a href="<?php echo e(route('admin.destroy', $admin->id)); ?>" class="btn btn-sm btn-danger">delete</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr role="row">
                                                <td colspan="3" style="text-align: center">No record found!</td>

                                            </tr>
                                        <?php endif; ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>

        <?php endif; ?>



    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-admin', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/LocalDisk2/Projects/Food Project/MyFoodApps/resources/views/admin/auth/register.blade.php ENDPATH**/ ?>