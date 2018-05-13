

<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
    		Evenements
        <small>Editer un evenement</small>
      	</h1>
      	<ol class="breadcrumb">
        	<li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Evenements</li>
        <li class="active">Editer un evenement</li>
      	</ol>
    </section>

    <hr>

     <!-- Main content -->
    <section class="content">
    <div class="row">
    	<div class="col-md-8">
    		<div class="box box-warning">
    			<div class="box-header with-border">
    				<h3 class="box-title">Editer l'Evenement : <?php echo e($event->name); ?></h3>
    				<div class="box-tools pull-right">
    					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    				</div>
    			</div>
            <div class="box-body">   
    			<form method="POST" action="<?php echo e(route('events.update', $event->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="_method" value="PUT">
                    
                        <div class="form-group">
                            <label for="name"><?php echo e(__("Nom de l'Evenement")); ?></label>
                            <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e($event->name); ?>" required autofocus>
								<?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label for="event_when"><?php echo e(__('Quand ?')); ?></label>
                            <input id="event_when" type="datetime-local" class="form-control<?php echo e($errors->has('event_when') ? ' is-invalid' : ''); ?>" <?php echo e($event->event_when); ?> name="event_when" required>

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
                                    <?php echo e(__('Editer')); ?>

                                </button>
                    	</div>
                    
                </form>
                </div>
    		</div>
    	</div>
    </div>
    </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin_main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>