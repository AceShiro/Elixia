<!DOCTYPE html>

<html>
	<head>
    	<title>Elixia - Confirmation d'inscription à l'événement {{$event['name']}}</title>
	</head>
 
	<body>
		<h2>Merci pour votre inscription à l'événement {{$event['name']}} !</h2>
		<br/>
		Vous trouverez ci-dessous les informations liés à l'événement :
		<br/>
		<br>
		Nom de l'événement : {{$event['name']}}
		<br>
		Quand? : {{ strftime('%d %B %G - %R', strtotime($event->event_when)) }}
		<br>
		Mode de paiement : 
		@if($payment->mode == 1)
		Abonnement à presenter au comptoir.
		@else
		Ticket à acheter au comptoir.
		@endif
	</body>
 
</html>