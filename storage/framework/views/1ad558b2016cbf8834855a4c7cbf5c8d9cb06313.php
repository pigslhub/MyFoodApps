<?php $__env->startSection('breadcrumb-title', 'Create Drivers'); ?>
<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="container-fluid">
        <?php echo $__env->make("flashMessages", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Driver Management</h4>
                        <p class="card-category">Driver Names</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form action="<?php echo e(route('admin.driver.store')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="driver_id" class="bmd-label-floating">Driver ID (disabled)</label>
                                            <input type="text" class="form-control" name="driver_id" id="driver_id" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="driver_name" class="bmd-label-floating">Enter Driver Name</label>
                                            <input type="text" class="form-control" name="driver_name" id="driver_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="driver_email" class="bmd-label-floating">Enter Email </label>
                                            <input type="text" class="form-control" name="driver_email" id="driver_email" required>
                                        </div>
                                    </div>

                                </div>

                                <div class="row py-2">

                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="driver_password" class="bmd-label-floating">Enter Password</label>
                                            <input type="text" class="form-control" name="driver_password" id="driver_password" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="driver_gender" class="bmd-label-floating">Select Gender</label>
                                            <input type="text" list="gender" class="form-control" name="driver_gender" id="driver_gender" required>
                                            <datalist id="gender">
                                                <option value="male"></option>
                                                <option value="female"></option>
                                            </datalist>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="driver_address" class="bmd-label-floating">Enter Driver Address</label>
                                            <input type="text" class="form-control" name="driver_address" id="driver_address" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="driver_phone" class="bmd-label-floating">Enter Driver Phone </label>
                                            <input type="text" class="form-control" name="driver_phone" id="driver_phone" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="driver_area_code" class="bmd-label-floating">Enter Driver Area code</label>
                                            <input type="text" class="form-control" name="driver_area_code" id="driver_area_code" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="driver_dob" class="bmd-label-floating">Select date of birth</label>
                                            <input type="date" class="form-control" name="driver_dob" id="driver_dob" required>
                                        </div>
                                    </div>
                                </div>


                                <div class="row py-2">
                                    <div class="col-md-3">
                                        <input type="submit" value="Add Driver" class="btn btn-block btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">All Drivers</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="" class="dataTables_wrapper no-footer">

                                <table id="driver_table" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
                                    <thead class="text-primary">
                                        <tr role="row">
                                            <th class="sorting_asc">ID</th>
                                            <th class="sorting">Name</th>
                                            <th class="sorting">Email</th>
                                            <th class="sorting">Address</th>
                                            <th class="sorting">Phone</th>
                                            <th class="sorting">date of birth</th>
                                            <th class="sorting">gender</th>
                                            <th class="sorting">Area Code</th>
                                            <th class="sorting">Status</th>
                                            <th class="sorting">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $drivers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr role="row">
                                            <td><?php echo e($driver->id); ?></td>
                                            <td><?php echo e($driver->name); ?></td>
                                            <td><?php echo e($driver->email); ?></td>
                                            <td><?php echo e($driver->address); ?></td>
                                            <td><?php echo e($driver->phone); ?></td>
                                            <td><?php echo e($driver->dob); ?></td>
                                            <td><?php echo e($driver->gender); ?></td>
                                            <td><?php echo e($driver->area_code); ?></td>
                                            <td>
                                                <?php if($driver->status == "1"): ?>
                                                <h6 style="color: green">Activated</h6>
                                                <?php else: ?>
                                                <h6 style="color: red">Deactivated</h6>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($driver->status == "1"): ?>
                                                <a href="<?php echo e(route('admin.driver.deactivate', $driver->id)); ?>" class="btn btn-sm btn-danger">Deactivate</a>
                                                <?php else: ?>
                                                <a href="<?php echo e(route('admin.driver.activate', $driver->id)); ?>" class="btn btn-sm btn-success">Activate</a>
                                                <?php endif; ?>

                                                <a href="<?php echo e(route('admin.driver.edit', $driver->id)); ?>" class="btn btn-sm btn-warning">edit</a>
                                                <a href="<?php echo e(route('admin.driver.destroy', $driver->id)); ?>" class="btn btn-sm btn-danger">delete</a>
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

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script>
        $(document).ready(function() {
            $('#driver_table').DataTable();
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Sir Imran\MyFoodApps\resources\views/admin/driverMgt/create.blade.php ENDPATH**/ ?>