

<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
    		Événements
        <small>Tous les événements</small>
      	</h1>
      	<ol class="breadcrumb">
        	<li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Événements</li>
        <li class="active">Tous les événements</li>
      	</ol>
    </section>

    <hr>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Liste des événements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nom</th>
                  <th>Type</th>
                  <th>Quand ?</th>
                  <th>Places disponibles</th>
                  <th>Status</th>
                  <th>Options</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
              		<td><?php echo e($event->id); ?></td>
              		<td><?php echo e($event->name); ?></td>
              		<td><?php echo e($event->type); ?></td>
              		<td><?php echo e(strftime('%d %B %G - %R', strtotime($event->event_when))); ?></td>
              		<td><?php echo e($event->availability); ?></td>
              		<td>
              		  <?php if($event->status == 'Available'): ?>
                        <span class="label label-success">Disponible</span>
                      <?php elseif($event->status == 'Full'): ?>
                        <span class="label label-warning">Complet</span>
                      <?php else: ?>
                        <span class="label label-danger">Fini</span>
                      <?php endif; ?>
              		</td>
              		<td><a href="<?php echo e(route('events.show', $event->id)); ?>"><span class="label label-info"><i class="fa fa-sign-in"></i></span></a> <a href="<?php echo e(route('events.edit', $event->id)); ?>"><span class="label label-warning"><i class="fa fa-gear"></i></span></a>
              			<form method="POST" action="<?php echo e(route('events.destroy', $event->id)); ?>">
              				<input type="hidden" name="_method" value="DELETE">
   							<?php echo csrf_field(); ?>
   							<button class="label label-danger" type="submit"><i class="fa fa-trash"></i></button>
              			</form>
              		</td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Nom</th>
                  <th>Type</th>
                  <th>Quand ?</th>
                  <th>Places disponibles</th>
                  <th>Status</th>
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