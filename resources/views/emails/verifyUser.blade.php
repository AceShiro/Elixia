<!DOCTYPE html>

<html>
	<head>
    	<title>Elixia - Mail de Confirmation</title>
	</head>
 
	<body>
		<h2>Merci pour votre inscription sur notre site {{$user['name']}}</h2>
		<br/>
		Votre e-mail est {{$user['email']}} , Merci de cliquer sur le lien ci-dessous pour verifier votre compte.
		<br/>
		<a href="{{url('user/verify', $user->verifyUser->token)}}">Verifier votre Email</a>
	</body>
 
</html>