<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $__env->make('includes.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <title><?php echo $__env->yieldContent('title'); ?> | Endless - Premium Admin Template</title>
    <?php echo $__env->make('includes.partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>

    <?php echo $__env->yieldContent('main'); ?>

    <?php echo $__env->make('includes.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('includes.partials.footervarview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>

</html>
<?php /**PATH /Volumes/LocalDisk2/Projects/Food Project/MyFoodApps/resources/views/layouts/master.blade.php ENDPATH**/ ?>