<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $__env->make('includes.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <title><?php echo $__env->yieldContent('title'); ?> | Endless - Premium Admin Template</title>
    <?php echo $__env->make('includes.partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
    <!-- Loader starts-->
    <!-- <div class="loader-wrapper">
      <div class="loader bg-white">
        <div class="whirly-loader"> </div>
      </div>
    </div> -->
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      <?php echo $__env->make('includes.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <?php echo $__env->make('includes.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
        <?php echo $__env->make('includes.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      </div>
    </div>
    <?php echo $__env->make('includes.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('includes.partials.footervarview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
  
</html>
<?php /**PATH E:\endless theme\endless_laravel\resources\views/layouts/master.blade.php ENDPATH**/ ?>