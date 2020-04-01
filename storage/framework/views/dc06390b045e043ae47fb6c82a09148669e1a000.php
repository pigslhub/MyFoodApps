<?php $__env->startSection('breadcrumb-title', 'Advertisement'); ?>
<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="container-fluid">
        <?php echo $__env->make("flashMessages", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Advertisement Management</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form action="<?php echo e(route('shop.advertisement.store')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="advertisement_id" class="bmd-label-floating">Advertisement ID (disabled)</label>
                                            <input type="text" class="form-control" name="advertisement_id" id="advertisement_id" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="title" class="bmd-label-floating">Enter Title</label>
                                            <input type="text" class="form-control" name="title" id="title" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="advertisement_description" class="bmd-label-floating">Enter Description</label>
                                            <input type="text" class="form-control" name="advertisement_description" id="advertisement_description" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="advertisement_due_date" class="bmd-label-floating">Validity</label>
                                            <input type="date" class="form-control" name="advertisement_due_date" id="advertisement_due_date" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <label for="banner" class="bmd-label-floating">Upload Advertisement Banner</label>
                                            <input type="file" class="form-control" name="banner" id="banner" required>
                                        </div>
                                    </div>
                                </div>



                                <div class="row py-2">
                                    <div class="col-md-3">
                                        <input type="submit" value="Create" class="btn btn-block btn-primary">
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
                        <h4 class="card-title">All Advertisements</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="" class="dataTables_wrapper no-footer">

                                <table id="advertisement_table" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
                                    <thead class="text-primary">
                                        <tr role="row">
                                            <th class="sorting_asc">ID</th>
                                            <th class="sorting">Title</th>
                                            <th class="sorting">Description</th>
                                            <th class="sorting">Expiry Date</th>
                                            <th class="sorting">Status</th>
                                            <th class="sorting">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $advertisements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advertisement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr role="row">
                                            <td><?php echo e($advertisement->id); ?></td>
                                            <td><?php echo e($advertisement->title); ?></td>
                                            <td><?php echo e($advertisement->description); ?></td>
                                            <td><?php echo e($advertisement->due_date); ?></td>
                                            <td>
                                                <?php if($advertisement->status == 1): ?>
                                                    Active
                                                <?php else: ?>
                                                    Not Active
                                                <?php endif; ?>
                                            <td>
                                                <a href="<?php echo e(route('shop.advertisement.edit', $advertisement->id)); ?>" class="btn btn-sm btn-warning">edit</a>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr role="row">
                                            <td colspan="3">No record found!</td>

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
            $('#advertisement_table').DataTable();
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.shop.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Sir Imran\MyFoodApps\resources\views/shop/advertisement/create.blade.php ENDPATH**/ ?>