<!DOCTYPE html>

<html>
	<head>
    	<title>Elixia - Confirmation d'inscription à l'événement <?php echo e($event['name']); ?></title>
	</head>
 
	<body>
		<h2>Merci pour votre inscription à l'événement <?php echo e($event['name']); ?> !</h2>
		<br/>
		Vous trouverez ci-dessous les informations liés à l'événement :
		<br/>
		<br>
		Nom de l'événement : <?php echo e($event['name']); ?>

		<br>
		Quand? : <?php echo e(strftime('%d %B %G - %R', strtotime($event->event_when))); ?>

		<br>
		Mode de paiement : 
		<?php if($payment->mode == 1): ?>
		Abonnement à presenter au comptoir.
		<?php else: ?>
		Ticket à acheter au comptoir.
		<?php endif; ?>
	</body>
 
</html>