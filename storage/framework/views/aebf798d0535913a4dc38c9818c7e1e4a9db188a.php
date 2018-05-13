<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    
    

    <body>
        <?php echo $__env->yieldContent('content'); ?>
    </body>

    
</html>

<?php echo $__env->make('partials._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partials._head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>