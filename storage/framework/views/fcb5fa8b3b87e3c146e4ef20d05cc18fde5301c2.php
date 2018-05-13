<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    
    <?php echo $__env->make('partials._head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <body id="page-top">
    	<?php echo $__env->make('partials._navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>


        <?php echo $__env->yieldContent('modals'); ?>

    </body>

    <?php echo $__env->make('partials._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
</html>
