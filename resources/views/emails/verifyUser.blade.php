<!DOCTYPE html>

<html>
	<head>
    	<title>Elixia - Mail de Confirmation</title>
	</head>
 
	<body>
		<h2>Elixia - Merci pour votre inscription {{$user['first_name']}} !</h2>
		<br/>
		Merci de cliquer sur le lien ci-dessous pour vérifier votre compte.
		<br/>
		<a href="{{url('user/verify', $user->verifyUser->token)}}">Vérifier votre Email</a>
	</body>
 
</html>