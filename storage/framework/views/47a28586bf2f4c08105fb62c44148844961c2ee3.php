<?php $__env->startSection('breadcrumb-title', 'Admin Dashboard'); ?>
<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-info card-header-icon">
                            <div class="card-icon">
                                <i class="fa fa-university"></i>
                            </div>
                            <p class="card-category">Total Shops</p>
                            <h3 class="card-title"><?php echo e($total_shops); ?>

                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="fa fa-info-circle fa-2x mr-2 text-info"></i>
                                <a class="text-info" href="<?php echo e(route('admin.shop.create')); ?>">View more...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-primary card-header-icon">
                            <div class="card-icon">
                                <i class="fa fa-truck"></i>
                            </div>
                            <p class="card-category">Total Drivers</p>
                            <h3 class="card-title"><?php echo e($total_drivers); ?>

                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="fa fa-info-circle fa-2x mr-2 text-primary"></i>
                                <a class="text-primary" href="<?php echo e(route('admin.driver.create')); ?>">View more...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <p class="card-category">Total Customers</p>
                            <h3 class="card-title"><?php echo e($total_customers); ?>

                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="fa fa-info-circle fa-2x mr-2 text-warning"></i>
                                <a class="text-warning" href="<?php echo e(route('admin.customer.create')); ?>">View more...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-info card-header-icon">
                            <div class="card-icon">
                                <i class="fa fa-sign-in"></i>
                            </div>
                            <p class="card-category">On Going Orders</p>
                            <h3 class="card-title"><?php echo e($onGoing_orders); ?>

                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="fa fa-info-circle fa-2x mr-2 text-info"></i>
                                <a class="text-info" href="<?php echo e(route('admin.order.viewAll')); ?>">View more...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-primary card-header-icon">
                            <div class="card-icon">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <p class="card-category">Complete Orders</p>
                            <h3 class="card-title"><?php echo e($completed_orders); ?>

                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="fa fa-info-circle fa-2x mr-2 text-primary"></i>
                                <a class="text-primary" href="<?php echo e(route('admin.order.viewAll')); ?>">View more...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="fa fa-sign-out"></i>
                            </div>
                            <p class="card-category">Delivered Orders</p>
                            <h3 class="card-title"><?php echo e($delivered_orders); ?>

                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="fa fa-info-circle fa-2x mr-2 text-warning"></i>
                                <a class="text-warning" href="<?php echo e(route('admin.order.viewAll')); ?>">View more...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-danger card-header-icon">
                            <div class="card-icon">
                                <i class="fa fa-frown-o"></i>
                            </div>
                            <p class="card-category">Canceled Orders</p>
                            <h3 class="card-title"><?php echo e($canceled_orders); ?>

                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="fa fa-info-circle fa-2x mr-2 text-danger"></i>
                                <a class="text-danger" href="<?php echo e(route('admin.order.viewAll')); ?>">View more...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Sir Imran\MyFoodApps\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>