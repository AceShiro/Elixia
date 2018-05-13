<section class="bg-light" id="patern2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Nos Soirées à venir</h2>
                <h3 class="tarifs"><a class="patern2-link tarifs" data-toggle="modal" href="#tarifs"> >> Tarifs des entrées et abonnements << </a></h3>
            </div>
        </div>
        <div class="row"> 
            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 col-sm-6 patern2-item">
                <a class="patern2-link" data-toggle="modal" href="<?php echo e(('#event' . $event->id)); ?>">
                    <div class="patern2-hover">
                        <div class="patern2-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="thumbnails/<?php echo e($event->id); ?>.jpg" alt="">
                </a>
                <div class="patern2-caption">
                    <h4><?php echo e($event->name); ?></h4>
                    <p><?php echo e(strftime('%d %B %G - %R', strtotime($event->event_when))); ?></p>
                    <p><?php echo e($event->type); ?></p>
                </div>
            </div>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>