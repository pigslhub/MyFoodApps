<?php $__env->startSection('breadcrumb-title', 'All Customers'); ?>
<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="container-fluid">
        <?php echo $__env->make("flashMessages", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Shop Management</h4>
                        <p class="card-category">Shop Names</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form action="<?php echo e(route('admin.shop.store')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_id" class="bmd-label-floating">Shop ID (disabled)</label>
                                            <input type="text" class="form-control" name="shop_id" id="shop_id" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_name" class="bmd-label-floating">Enter Shop Name</label>
                                            <input type="text" class="form-control" name="shop_name" id="shop_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_owner_name" class="bmd-label-floating">Enter Owner Name</label>
                                            <input type="text" class="form-control" name="shop_owner_name" id="shop_owner_name" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_email" class="bmd-label-floating">Enter Email </label>
                                            <input type="text" class="form-control" name="shop_email" id="shop_email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_password" class="bmd-label-floating">Enter Password</label>
                                            <input type="password" class="form-control" name="shop_password" id="shop_password" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_address" class="bmd-label-floating">Enter Shop Address</label>
                                            <input type="text" class="form-control" name="shop_address" id="shop_address" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_phone" class="bmd-label-floating">Enter Shop Phone </label>
                                            <input type="text" class="form-control" name="shop_phone" id="shop_phone" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_area_code" class="bmd-label-floating">Enter Shop Area code</label>
                                            <input type="text" class="form-control" name="shop_area_code" id="shop_area_code" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_commision" class="bmd-label-floating">Enter Shop Commission</label>
                                            <input type="number" step="0.01" class="form-control" name="shop_commision" id="shop_commision" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_type_id" class="bmd-label-floating">Select Shop Type </label>
                                            <input type="text" list="shopTypes" class="form-control" name="shop_type_id" id="shop_type_id" required>
                                            <datalist id="shopTypes">
                                                <?php $__currentLoopData = $allShopTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allShopType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($allShopType->id); ?>"><?php echo e($allShopType->type); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </datalist>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <label for="shop_image" class="bmd-label-floating">Shop Image</label>
                                            <input type="file" class="form-control" name="shop_image" id="shop_image" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row py-2">
                                    <div class="col-md-3">
                                        <input type="submit" value="Add Shop" class="btn btn-block btn-primary">
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
                        <h4 class="card-title">All Shops</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="" class="dataTables_wrapper no-footer">

                                <table id="shop_table" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
                                    <thead class="text-primary">
                                        <tr role="row">
                                            <th class="sorting_asc">ID</th>
                                            <th class="sorting">Name</th>
                                            <th class="sorting">Type</th>
                                            <th class="sorting">Owner</th>
                                            <th class="sorting">Email</th>
                                            <th class="sorting">Address</th>
                                            <th class="sorting">Phone</th>
                                            <th class="sorting">Area Code</th>
                                            <th class="sorting">Commission</th>
                                            <th class="sorting">Status</th>
                                            <th class="sorting">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $shops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr role="row">
                                            <td><?php echo e($shop->id); ?></td>
                                            <td><?php echo e($shop->name); ?></td>
                                            <td><?php echo e($shop->shop_type_name); ?></td>
                                            <td><?php echo e($shop->owner_name); ?></td>
                                            <td><?php echo e($shop->email); ?></td>
                                            <td><?php echo e($shop->address); ?></td>
                                            <td><?php echo e($shop->phone); ?></td>
                                            <td><?php echo e($shop->area_code); ?></td>
                                            <td><?php echo e($shop->commision); ?></td>
                                            <td>
                                                <?php if($shop->status == "1"): ?>
                                                <h6 style="color: green">Activated</h6>
                                                <?php else: ?>
                                                <h6 style="color: red">Deactivated</h6>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($shop->status == "1"): ?>
                                                <a href="<?php echo e(route('admin.shop.deactivate', $shop->id)); ?>" class="btn btn-sm btn-danger">Deactivate</a>
                                                <?php else: ?>
                                                <a href="<?php echo e(route('admin.shop.activate', $shop->id)); ?>" class="btn btn-sm btn-success">Activate</a>
                                                <?php endif; ?>

                                                <a href="<?php echo e(route('admin.shop.edit', $shop->id)); ?>" class="btn btn-sm btn-warning">edit</a>
                                                <a href="<?php echo e(route('admin.shop.destroy', $shop->id)); ?>" class="btn btn-sm btn-danger">delete</a>
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
            $('#shop_table').DataTable();
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/LocalDisk2/Projects/Food Project/MyFoodApps/resources/views/admin/shopMgt/shop/create.blade.php ENDPATH**/ ?>