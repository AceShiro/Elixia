@extends('admin.layouts.admin_main')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
    		{{ $event->name }}
        <small>Inscription</small>
      	</h1>
      	<ol class="breadcrumb">
        	<li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>{{ $event->name }}</li>
        <li class="active">Inscription</li>
      	</ol>
    </section>

    <hr>

    <section class="content">
    	<div class="row">
    		<div class="col-md-4">

    			<!-- TABLE: USER DETAILS -->
	          <div class="box box-primary">
	            <div class="box-header with-border">
	              <h3 class="box-title">Vos Informations</h3>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <strong><i class="fa fa-fire margin-r-5"></i> Nom</strong>

	              <p class="text-muted">
	                {{ $user->first_name . " " . $user->last_name }}
	              </p>

	              <hr>

	              <strong><i class="fa fa-envelope margin-r-5"></i> Adresse Mail</strong>

	              <p class="text-muted">{{ $user->email }}</p>
	            </div>
	            <!-- /.box-body -->
	          </div>
	          <!-- /.box -->

	          <!-- TABLE: PAIEMENT DETAILS -->
	          <div class="box box-danger">
	            <div class="box-header with-border">
	              <h3 class="box-title">Mode de Paiement</h3>
	            </div>
	            <!-- /.box-header -->
	            <form class="form-horizontal" method="POST" action="{{ route('reservation.store', $event->id) }}">
                	@csrf
	            <div class="box-body">
                  <div class="form-group">
                    <div class="col-sm-offset-1 col-sm-10">
                      <div class="radio">
                        <label for="payment">
                        	<input checked type="radio" id="payment" name="payment" value="1">{{ __(" Je possede un abonnement") }}
                        	<hr>
                        	<input type="radio" id="payment" name="payment" value="0">{{ __("Entree individuelle a payer sur place") }}
                        </label>
                      </div>
                    </div>
                  </div>
                
	            </div>
	            <!-- /.box-body -->
	            <div class="box-footer">
                                <button type="submit" class="btn btn-success pull-right">
                                    {{ __("S'inscrire") }}
                                </button>
                      </div>
	            </form>
	          </div>
	          <!-- /.box -->
    			
    		</div>

    		<div class="col-md-4">
    			<!-- TABLE: EVENT DETAILS -->
	          <div class="box box-warning">
	            <div class="box-header with-border">
	              <h3 class="box-title">Details de la Soiree</h3>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <strong><i class="fa fa-fire margin-r-5"></i> Nom</strong>

                  <p class="text-muted">
                    {{ $event->name }}
                  </p>

                  <hr>

                  <strong><i class="fa fa-clock-o margin-r-5"></i> Quand?</strong>

                  <p class="text-muted">
                    {{ strftime('%d %B %G - %R', strtotime($event->event_when)) }}
                  </p>

                  <hr>

                  <strong><i class="fa fa-gamepad margin-r-5"></i> Type</strong>

                  <p class="text-muted">
                    {{ $event->type }}
                  </p>

                  <hr>

                  <strong><i class="fa fa-book margin-r-5"></i> Description</strong>

                  <p class="text-muted">
                    {{ $event->description }}
                  </p>

                  <hr>

                  <strong><i class="fa fa-users margin-r-5"></i> Places disponibles</strong>

                  <p class="text-muted">{{ $event->availability }}</p>
	            </div>
	            <!-- /.box-body -->
	          </div>
	          <!-- /.box -->
    		</div>

    		<div class="col-md-4">
    			<img class="profile-user-img img-responsive" src="../thumbnails/{{$event->id}}.jpg" alt="" style="width: auto;">

                  <hr>
    		</div>
    	</div>
    </section>

@endsection