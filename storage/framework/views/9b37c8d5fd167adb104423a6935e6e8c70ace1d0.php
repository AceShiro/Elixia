

<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
    		Profil Utilisateur
        <small><?php echo e($user->first_name . " " . $user->last_name); ?></small>
      	</h1>
      	<ol class="breadcrumb">
        	<li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Profil Utilisateur</li>
        <li class="active"><?php echo e($user->first_name . " " . $user->last_name); ?></li>
      	</ol>
    </section>

    <hr>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-3">

        	<!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../../img/logoElixiaSansFondReduit.png" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo e($user->first_name . " " . $user->last_name); ?></h3>

              <p class="text-muted text-center">
              	<?php if($user->admin == true): ?>
              		Admin
              	<?php else: ?>
              		Membre
              	<?php endif; ?>
              </p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Date de Naissance</b> <p class="pull-right"><?php echo e(strftime('%d %B %G', strtotime($user->birthday))); ?></p>
                </li>
                <li class="list-group-item">
                  <b>Adresse Mail</b> <p class="pull-right"><?php echo e($user->email); ?></p>
                </li>
                <li class="list-group-item">
                  <b>Nombre de participations</b> <p class="pull-right"><?php echo e($user->registered_events); ?></p>
                </li>
              </ul>

              <?php if(Auth::user()->admin == true): ?>
              <a href="#" class="btn btn-primary btn-block"><b>Contacter</b></a>
              <?php endif; ?>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Participations</a></li>
              <?php if(Auth::user()->admin == true): ?>
              	<li><a href="#settings" data-toggle="tab">Options</a></li>
              <?php endif; ?>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <div class="table-responsive">
                <table id="example1" class="table no-margin">
                  <thead>
                  <tr>
                    <th>N°</th>
                    <th>Nom</th>
                    <th>Quand?</th>
                    <th>Paiement</th>
                    <?php if(Auth::user()->admin == true): ?>
                    <th>Voir l'Evenement</th>
                    <?php endif; ?>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $user->events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($event->id); ?></td>
                      <td><?php echo e($event->name); ?></td>
                      <td><?php echo e(strftime('%d %B %G - %R', strtotime($event->event_when))); ?></td>
                      <td>
                        <?php if($event->payments()->Find($event->id)->mode == 1): ?>
                          <span class="label label-danger">Abonnement</span>
                        <?php else: ?>
                          <span class="label label-warning">Entree individuelle</span>
                        <?php endif; ?>
                      </td>
                      <?php if(Auth::user()->admin == true): ?>
                      <td><a href="<?php echo e(route('events.show', $event->id)); ?>"><span class="label label-info"><i class="fa fa-sign-in"></i></span></a></td>
                      <?php endif; ?>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
              </div>
              <!-- /.tab-pane -->
              <?php if(Auth::user()->admin == true): ?>
              <div class="tab-pane" id="settings">
                <form class="form-horizontal" method="POST" action="<?php echo e(route('users.update', $user->id)); ?>">
                	<?php echo csrf_field(); ?>
                	<input type="hidden" name="_method" value="PUT">

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="radio">
                        <label for="admin">
                        	<?php if($user->admin == true): ?>
                        		<input checked type="radio" id="admin" name="admin" value="1"><?php echo e(__(" Admin")); ?>

                        		<br>
                        		<input type="radio" id="admin" name="admin" value="0"><?php echo e(__(" Membre")); ?>

                        	<?php else: ?>
                        		<input type="radio" id="admin" name="admin" value="1"><?php echo e(__(" Admin")); ?>

                        		<br>
                        		<input checked type="radio" id="admin" name="admin" value="0"><?php echo e(__(" Membre")); ?>

                        	<?php endif; ?>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
              <?php endif; ?>
              
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
    </section>


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