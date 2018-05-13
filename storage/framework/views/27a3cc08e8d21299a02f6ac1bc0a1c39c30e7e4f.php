

<?php $__env->startSection('content'); ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 1.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Membres inscrits</span>
              <span class="info-box-number"><?php echo e($verifiedUserCount); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-line-chart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Événements organisés</span>
              <span class="info-box-number"><?php echo e($eventCount); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-envelope-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Newsletters envoyées</span>
              <span class="info-box-number">-</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">

          <!-- TABLE: EVENTS -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Derniers Événements</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>N°</th>
                    <th>Événement</th>
                    <th>Status</th>
                    <th>Places disponibles</th>
                    <th>Quand ?</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $lastEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($event->id); ?></td>
                    <td><?php echo e($event->name); ?></td>
                    <td>
                      <?php if($event->status == 'Available'): ?>
                        <span class="label label-success">Disponible</span>
                      <?php elseif($event->status == 'Full'): ?>
                        <span class="label label-warning">Complet</span>
                      <?php else: ?>
                        <span class="label label-danger">Fini</span>
                      <?php endif; ?>
                    </td>
                    <td><?php echo e($event->availability); ?></td> 
                    <td><?php echo e(strftime('%d %B %G - %R', strtotime($event->event_when))); ?></td>
                    <td><a href="<?php echo e(route('events.show', $event->id)); ?>"><span class="label label-info"><i class="fa fa-sign-in"></i></span></a> <a href="<?php echo e(route('events.edit', $event->id)); ?>"><span class="label label-warning"><i class="fa fa-gear"></i></span></a></td>                   
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="<?php echo e(route('events.create')); ?>" class="btn btn-sm btn-info btn-flat pull-left">Créer un Événement</a>
              <a href="<?php echo e(route('events.index')); ?>" class="btn btn-sm btn-default btn-flat pull-right">Voir tous les événements</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

      <div class="col-md-4">
        <!-- TABLE: LATEST MEMBERS -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Derniers membres inscrits</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>N°</th>
                    <th>Nom</th>
                    <th>DdN</th>
                    <th>E-Mail</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $lastUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><a href=""></a><?php echo e($user->id); ?></td>
                    <td><?php echo e($user->last_name . " " . $user->first_name); ?></td>
                    <td><?php echo e($user->birthday); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td><a href="<?php echo e(route('users.show', $user->id)); ?>"><span class="label label-info"><i class="fa fa-sign-in"></i></span></a> <a href="<?php echo e(route('users.edit', $user->id)); ?>"><span class="label label-warning"><i class="fa fa-gear"></i></span></a></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="<?php echo e(route('users.index')); ?>" class="btn btn-sm btn-default btn-flat pull-right">Voir tous les membres</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->


        <div class="col-md-8">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Créer un Événement</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
          </div>
          <div class="box-body">   
          <form enctype="multipart/form-data" method="POST" action="<?php echo e(route('events.store')); ?>">
                        <?php echo csrf_field(); ?>
                    
                        <div class="form-group">
                            <label for="name"><?php echo e(__("Nom de l'Événement")); ?></label>
                            <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" placeholder="Nom" required autofocus>
                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label for="event_when"><?php echo e(__('Quand ?')); ?></label>
                            <input id="event_when" type="datetime-local" class="form-control<?php echo e($errors->has('event_when') ? ' is-invalid' : ''); ?>" name="event_when" placeholder="2018-08-19T18:45:00" required>

                                <?php if($errors->has('event_when')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('event_when')); ?></strong>
                                    </span>
                                <?php endif; ?>

                                <p class="help-block">Example: 2018-08-19T18:45:00</p>
                        </div>

                        <div class="form-group">
                            <label for="type"><?php echo e(__('Type')); ?></label>
                            <input id="Type" type="text" class="form-control<?php echo e($errors->has('type') ? ' is-invalid' : ''); ?>" name="type" placeholder="Type" required>

                                <?php if($errors->has('type')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('type')); ?></strong>
                                    </span>
                                <?php endif; ?>

                                <p class="help-block">Example: Soirée</p>
                        </div>

                        <div class="form-group">
                            <label for="availability"><?php echo e(__('Places disponibles')); ?></label>
                            <input id="availability" type="text" class="form-control<?php echo e($errors->has('availability') ? ' is-invalid' : ''); ?>" name="availability" placeholder="Places disponibles" required>

                                <?php if($errors->has('availability')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('availability')); ?></strong>
                                    </span>
                                <?php endif; ?>

                                <p class="help-block">Example: 20</p>
                        </div>

                        <div class="form-group">
                            <label for="description"><?php echo e(__('Description')); ?></label>
                            <textarea id="description" class="form-control<?php echo e($errors->has('description') ? ' is-invalid' : ''); ?>" rows="5" name="description" style="resize: vertical;" required></textarea>

                                <?php if($errors->has('description')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('description')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>

                        <div class="form-group">
                          <input type="file" id="thumbnail" name="thumbnail">

                          <p class="help-block">Pas plus de 5 Mo sinon je rale ;)</p>
                        </div>

                        <div class="box-footer">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Créer')); ?>

                                </button>
                      </div>
                    
                </form>
                </div>
        </div>
      </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin_main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>