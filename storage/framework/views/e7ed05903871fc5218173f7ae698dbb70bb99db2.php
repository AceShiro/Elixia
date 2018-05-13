

<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
    		Événements
        <small>Créer un événement</small>
      	</h1>
      	<ol class="breadcrumb">
        	<li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Événements</li>
        <li class="active">Créer un événement</li>
      	</ol>
    </section>

    <hr>

     <!-- Main content -->
    <section class="content">
    <div class="row">
    	<div class="col-md-8">
    		<div class="box box-primary">
    			<div class="box-header with-border">
    				<h3 class="box-title">Créer un Événement</h3>
    				<div class="box-tools pull-right">
    					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
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
                                    <?php echo e(__('Creer')); ?>

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