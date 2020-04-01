<?php $__env->startSection('breadcrumb-title', 'All Customers'); ?>

<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="container-fluid">
        <?php echo $__env->make("flashMessages", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">All Customers</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="" class="dataTables_wrapper no-footer">

                                <table id="customer_table" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
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
                                        <?php $__empty_1 = true; $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr role="row">
                                            <td><?php echo e($customer->id); ?></td>
                                            <td><?php echo e($customer->name); ?></td>
                                            <td><?php echo e($customer->email); ?></td>
                                            <td><?php echo e($customer->address); ?></td>
                                            <td><?php echo e($customer->phone); ?></td>
                                            <td><?php echo e($customer->dob); ?></td>
                                            <td><?php echo e($customer->gender); ?></td>
                                            <td><?php echo e($customer->area_code); ?></td>
                                            <td>
                                                <?php if($customer->status == "1"): ?>
                                                <h6 style="color: green">Activated</h6>
                                                <?php else: ?>
                                                <h6 style="color: red">Deactivated</h6>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($customer->status == "1"): ?>
                                                <a href="<?php echo e(route('admin.customer.deactivate', $customer->id)); ?>" class="btn btn-sm btn-danger">Deactivate</a>
                                                <?php else: ?>
                                                <a href="<?php echo e(route('admin.customer.activate', $customer->id)); ?>" class="btn btn-sm btn-success">Activate</a>
                                                <?php endif; ?>

                                                <a href="<?php echo e(route('admin.customer.destroy', $customer->id)); ?>" class="btn btn-sm btn-danger">delete</a>
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
            $('#customer_table').DataTable();
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/LocalDisk2/Projects/Food Project/MyFoodApps/resources/views/admin/customer/viewAll.blade.php ENDPATH**/ ?>