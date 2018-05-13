<!DOCTYPE html>

<html>
	<head>
    	<title>Elixia - Confirmation d'inscription a l'evenement <?php echo e($event['name']); ?></title>
	</head>
 
	<body>
		<h2>Merci pour votre inscription a l'evenement <?php echo e($event['name']); ?></h2>
		<br/>
		Vous trouverez ci-dessous les informations lies a l'evenement :
		<br/>
		<br>
		Nom de l'evenement : <?php echo e($event['name']); ?>

		<br>
		Quand? : <?php echo e($event['event_when']); ?>

		<br>
		Mode de paiement : 
		<?php if($payment->mode == 1): ?>
		Abonnement a presenter au comptoir.
		<?php else: ?>
		Ticket a acheter au comptoir.
		<?php endif; ?>
	</body>
 
</html>