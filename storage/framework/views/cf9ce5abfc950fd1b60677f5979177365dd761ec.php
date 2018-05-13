

<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
    		Membres
        <small>Tous les membres</small>
      	</h1>
      	<ol class="breadcrumb">
        	<li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Membres</li>
        <li class="active">Tous les membres</li>
      	</ol>
    </section>

    <hr>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nom</th>
                  <th>Date de Naissance</th>
                  <th>E-Mail</th>
                  <th>Nombre de participations</th>
                  <th>Options</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($user->id); ?></td>
                  <td>
                    <?php if($user->admin == true): ?>
                      <span class="label label-danger"><?php echo e($user->last_name . " " . $user->first_name); ?></span>
                    <?php else: ?>
                      <?php echo e($user->last_name . " " . $user->first_name); ?>

                    <?php endif; ?>
                  </td>
                  <td><?php echo e($user->birthday); ?></td>
                  <td><?php echo e($user->email); ?></td>
                  <td><?php echo e($user->registered_events); ?></td>
                  <td><a href="<?php echo e(route('users.show', $user->id)); ?>"><span class="label label-info"><i class="fa fa-sign-in"></i></span></a> <a href="<?php echo e(route('users.edit', $user->id)); ?>"><span class="label label-warning"><i class="fa fa-gear"></i></span></a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Nom</th>
                  <th>Date de Naissance</th>
                  <th>E-Mail</th>
                  <th>Nombre de participations</th>
                  <th>Options</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<script>
  $(function () {
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin_main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>