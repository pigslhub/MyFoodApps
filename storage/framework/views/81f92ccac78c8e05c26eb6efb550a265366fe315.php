<?php $__env->startSection('main'); ?>
    <div class="page-wrapper">
        <?php echo $__env->make('layouts.shop.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="page-body-wrapper">
            <?php echo $__env->make('layouts.shop.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col">
                                <div class="page-header-left">
                                    <h3><?php echo $__env->yieldContent('breadcrumb-title'); ?></h3>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                                        <?php echo $__env->yieldContent('breadcrumb-item'); ?>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo $__env->yieldContent('content'); ?>

            </div>
            <?php echo $__env->make('layouts.shop.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Sir Imran\MyFoodApps\resources\views/layouts/shop/master.blade.php ENDPATH**/ ?>