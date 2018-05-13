<!DOCTYPE html>
<html>

<?php echo $__env->make('admin.partials._head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php echo $__env->make('admin.partials._navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <?php echo $__env->yieldContent('content'); ?>

  </div>
  <!-- /.content-wrapper -->

  <?php echo $__env->make('admin.partials._controls', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>
<!-- ./wrapper -->

</body>

<?php echo $__env->make('admin.partials._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</html>
