<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $__env->make('includes.partials.default.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <?php echo $__env->make('includes.partials.default.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
    <?php echo $__env->yieldContent('main'); ?>
    <?php echo $__env->make('includes.partials.default.footervarview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('includes.partials.default.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>
<?php /**PATH E:\Sir Imran\MyFoodApps\resources\views/layouts/default-master.blade.php ENDPATH**/ ?>