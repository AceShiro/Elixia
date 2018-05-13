@extends('admin.layouts.admin_main')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
    		Événements
        <small>Créer un événement</small>
      	</h1>
      	<ol class="breadcrumb">
        	<li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
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
    			<form enctype="multipart/form-data" method="POST" action="{{ route('events.store') }}">
                        @csrf
                    
                        <div class="form-group">
                            <label for="name">{{ __("Nom de l'Événement") }}</label>
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Nom" required autofocus>
								@if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <label for="event_when">{{ __('Quand ?') }}</label>
                            <input id="event_when" type="datetime-local" class="form-control{{ $errors->has('event_when') ? ' is-invalid' : '' }}" name="event_when" placeholder="2018-08-19T18:45:00" required>

                                @if ($errors->has('event_when'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('event_when') }}</strong>
                                    </span>
                                @endif

                                <p class="help-block">Example: 2018-08-19T18:45:00</p>
                        </div>

                        <div class="form-group">
                            <label for="type">{{ __('Type') }}</label>
                            <input id="Type" type="text" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" placeholder="Type" required>

                                @if ($errors->has('type'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif

                                <p class="help-block">Example: Soirée</p>
                        </div>

                        <div class="form-group">
                            <label for="availability">{{ __('Places disponibles') }}</label>
                            <input id="availability" type="text" class="form-control{{ $errors->has('availability') ? ' is-invalid' : '' }}" name="availability" placeholder="Places disponibles" required>

                                @if ($errors->has('availability'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('availability') }}</strong>
                                    </span>
                                @endif

                                <p class="help-block">Example: 20</p>
                        </div>

                        <div class="form-group">
                            <label for="description">{{ __('Description') }}</label>
                            <textarea id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" rows="5" name="description" style="resize: vertical;" required></textarea>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                        	<input type="file" id="thumbnail" name="thumbnail">

                        	<p class="help-block">Pas plus de 5 Mo sinon je rale ;)</p>
                        </div>

                        <div class="box-footer">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Creer') }}
                                </button>
                    	</div>
                    
                </form>
                </div>
    		</div>
    	</div>
    </div>
    </section>


@endsection