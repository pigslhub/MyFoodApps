<?php $__env->startSection('pageName', 'Category'); ?>
<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="container-fluid">
        <?php echo $__env->make("flashMessages", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Category Management</h4>
                        <p class="card-category">Category Names</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                                <div class="row py-2">
                                    <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">


                                                    <form action="<?php echo e(route('shop.selectService', $category->id)); ?>" method="post" enctype="multipart/form-data">
                                                        <?php echo csrf_field(); ?>
                                                        <div class="card" style="width: 18rem;">
                                                            <div class="card-body">
                                                                <h3 class="card-title"><?php echo e($category->name); ?></h3>
                                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                                <input type="submit" value="Add Service" class="btn btn-block btn-primary">
                                                            </div>
                                                        </div>
                                                    </form>


                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <h3>No categories found!</h3>
                                    <?php endif; ?>
                                </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-shop', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Sir Imran\MyFoodApps\resources\views/shop/shopMgt/category/selectCategory.blade.php ENDPATH**/ ?>