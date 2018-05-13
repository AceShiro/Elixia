

<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
    		Evenements
        <small><?php echo e($event->name); ?></small>
      	</h1>
      	<ol class="breadcrumb">
        	<li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Evenements</li>
        <li class="active"><?php echo e($event->name); ?></li>
      	</ol>
    </section>

    <hr>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Détails</a></li>
                <li><a href="#settings" data-toggle="tab">Options</a></li>
                <li><a href="#registered" data-toggle="tab">Membres inscrits</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <div class="table-responsive">
                  <strong><i class="fa fa-fire margin-r-5"></i> Nom</strong>

                  <p class="text-muted">
                    <?php echo e($event->name); ?>

                  </p>

                  <hr>

                  <strong><i class="fa fa-clock-o margin-r-5"></i> Quand?</strong>

                  <p class="text-muted">
                    <?php echo e(strftime('%d %B %G - %R', strtotime($event->event_when))); ?>

                  </p>

                  <hr>

                  <strong><i class="fa fa-gamepad margin-r-5"></i> Type</strong>

                  <p class="text-muted">
                    <?php echo e($event->type); ?>

                  </p>

                  <hr>

                  <strong><i class="fa fa-book margin-r-5"></i> Description</strong>

                  <p class="text-muted">
                    <?php echo e($event->description); ?>

                  </p>

                  <hr>

                  <strong><i class="fa fa-users margin-r-5"></i> Places disponibles</strong>

                  <p class="text-muted"><?php echo e($event->availability); ?></p>

                  <hr>

                  <strong><i class="fa fa-database margin-r-5"></i> Status</strong>

                  <p>
                    <?php if($event->status == 'Available'): ?>
                        <span class="label label-success">Disponible</span>
                      <?php elseif($event->status == 'Full'): ?>
                        <span class="label label-warning">Complet</span>
                      <?php else: ?>
                        <span class="label label-danger">Fini</span>
                      <?php endif; ?>
                  </p>
                </div>
              <!-- /.table-responsive -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="settings">
                  <form method="POST" action="<?php echo e(route('events.update', $event->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="_method" value="PUT">
                    
                        <div class="form-group">
                            <label for="name"><?php echo e(__("Nom de l'Événement")); ?></label>
                            <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e($event->name); ?>" required autofocus>
                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label for="event_when"><?php echo e(__('Quand ?')); ?></label>
                            <input id="event_when" type="datetime-local" class="form-control<?php echo e($errors->has('event_when') ? ' is-invalid' : ''); ?>" <?php echo e($event->event_when); ?> placeholder="<?php echo e($event->event_when); ?>" name="event_when" required>

                                <?php if($errors->has('event_when')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('event_when')); ?></strong>
                                    </span>
                                <?php endif; ?>

                                <p class="help-block">Example: 2018-08-19T18:45:00</p>
                                <p class="help-block" style="margin-top: -10px;">Old: <?php echo e($event->event_when); ?></p>
                        </div>

                        <div class="form-group">
                            <label for="type"><?php echo e(__('Type')); ?></label>
                            <input id="Type" type="text" class="form-control<?php echo e($errors->has('type') ? ' is-invalid' : ''); ?>" value="<?php echo e($event->type); ?>" name="type" required>

                                <?php if($errors->has('type')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('type')); ?></strong>
                                    </span>
                                <?php endif; ?>

                                <p class="help-block">Example: Soiree</p>
                        </div>

                        <div class="form-group">
                            <label for="availability"><?php echo e(__('Places disponibles')); ?></label>
                            <input id="availability" type="text" class="form-control<?php echo e($errors->has('availability') ? ' is-invalid' : ''); ?>" value="<?php echo e($event->availability); ?>" name="availability" required>

                                <?php if($errors->has('availability')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('availability')); ?></strong>
                                    </span>
                                <?php endif; ?>

                                <p class="help-block">Example: 20</p>
                        </div>

                        <div class="form-group">
                            <label for="description"><?php echo e(__('Description')); ?></label>
                            <textarea id="description" class="form-control<?php echo e($errors->has('description') ? ' is-invalid' : ''); ?>" rows="5" name="description" style="resize: vertical;" required><?php echo e($event->description); ?></textarea>

                                <?php if($errors->has('description')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('description')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label for="status"><?php echo e(__('Status')); ?></label> <br>
                            <input checked type="radio" id="status" name="status" value="Available"><?php echo e(__(" Disponible/Complet")); ?>

                                <br>
                            <input type="radio" id="status" name="status" value="Finished"><?php echo e(__(" Fini")); ?>

                        </div>

                        <div class="box-footer">
                                <button type="submit" class="btn btn-warning">
                                    <?php echo e(__('Éditer')); ?>

                                </button>
                      </div>
                    
                </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="registered">
                <div class="table-responsive">
                <table id="example1" class="table no-margin">
                  <thead>
                  <tr>
                    <th>Nom</th>
                    <th>E-Mail</th>
                    <th>Paiement</th>
                    <?php if(Auth::user()->admin == true): ?>
                    <th>Voir l'Utilisateur</th>
                    <?php endif; ?>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $event->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td><?php echo e($user->first_name . " " . $user->last_name); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td>
                      <?php if($user->payments()->Find($event->id)->mode == 1): ?>
                        <span class="label label-danger">Abonnement</span>
                      <?php else: ?>
                        <span class="label label-warning">Entree individuelle</span>
                      <?php endif; ?>
                    </td>
                    <?php if(Auth::user()->admin == true): ?>
                      <td><a href="<?php echo e(route('users.show', $user->id)); ?>"><span class="label label-info"><i class="fa fa-sign-in"></i></span></a></td>
                    <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
              </div>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->

        </div>
        <!-- /.col -->

        <div class="col-md-4">
          <img class="profile-user-img img-responsive" src="../thumbnails/<?php echo e($event->id); ?>.jpg" alt="" style="width: auto;">

        
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
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false
    })
  })
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin_main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>