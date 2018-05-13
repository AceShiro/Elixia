<!DOCTYPE html>

<html>
	<head>
    	<title>Elixia - Mail de Confirmation</title>
	</head>
 
	<body>
		<h2>Merci pour votre inscription sur notre site <?php echo e($user['name']); ?></h2>
		<br/>
		Votre e-mail est <?php echo e($user['email']); ?> , Merci de cliquer sur le lien ci-dessous pour verifier votre compte.
		<br/>
		<a href="<?php echo e(url('user/verify', $user->verifyUser->token)); ?>">Verifier votre Email</a>
	</body>
 
</html>