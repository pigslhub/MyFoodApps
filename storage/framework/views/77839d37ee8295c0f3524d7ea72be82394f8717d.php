<?php if($message = Session::get('success')): ?>
    <div class="alert alert-success alert-block" id="successMessage">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php echo e($message); ?></strong>
    </div>
<?php endif; ?>


<?php if($message = Session::get('error')): ?>
    <div class="alert alert-danger alert-block" id="errorMessage">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php echo e($message); ?></strong>
    </div>
<?php endif; ?>


<?php if($message = Session::get('warning')): ?>
    <div class="alert alert-warning alert-block" id="warningMessage">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php echo e($message); ?></strong>
    </div>
<?php endif; ?>


<?php if($message = Session::get('info')): ?>
    <div class="alert alert-info alert-block" id="infoMessage">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong><?php echo e($message); ?></strong>
    </div>
<?php endif; ?>


<?php if($errors->any()): ?>
    <div class="alert alert-danger" id="formError">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Please check the form below for errors
    </div>
<?php endif; ?>
<?php /**PATH /Volumes/LocalDisk2/Projects/Food Project/MyFoodApps/resources/views/flashMessages.blade.php ENDPATH**/ ?>