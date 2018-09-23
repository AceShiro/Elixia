@extends('admin.layouts.admin_main')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
    		Evenements
        <small>Editer un evenement</small>
      	</h1>
      	<ol class="breadcrumb">
        	<li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Evenements</li>
        <li class="active">Editer un evenement</li>
      	</ol>
    </section>

    <hr>

     <!-- Main content -->
    <section class="content">
    <div class="row">
    	<div class="col-md-8">
    		<div class="box box-warning">
    			<div class="box-header with-border">
    				<h3 class="box-title">Editer l'Evenement : {{ $event->name }}</h3>
    				<div class="box-tools pull-right">
    					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    				</div>
    			</div>
            <div class="box-body">   
    			<form method="POST" action="{{ route('events.update', $event->id) }}">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                    
                        <div class="form-group">
                            <label for="name">{{ __("Nom de l'Evenement") }}</label>
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $event->name }}" required autofocus>
								@if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <label for="event_when">{{ __('Quand ?') }}</label>
                            <input id="event_when" type="datetime" class="form-control{{ $errors->has('event_when') ? ' is-invalid' : '' }}" {{ $event->event_when }} name="event_when" required>

                                @if ($errors->has('event_when'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('event_when') }}</strong>
                                    </span>
                                @endif

                                <p class="help-block">Example: 2018-08-19T18:45:00</p>
                                <p class="help-block" style="margin-top: -10px;">Old: {{ $event->event_when }}</p>
                        </div>

                        <div class="form-group">
                            <label for="type">{{ __('Type') }}</label>
                            <input id="Type" type="text" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" value="{{ $event->type }}" name="type" required>

                                @if ($errors->has('type'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif

                                <p class="help-block">Example: Soiree</p>
                        </div>

                        <div class="form-group">
                            <label for="availability">{{ __('Places disponibles') }}</label>
                            <input id="availability" type="text" class="form-control{{ $errors->has('availability') ? ' is-invalid' : '' }}" value="{{ $event->availability }}" name="availability" required>

                                @if ($errors->has('availability'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('availability') }}</strong>
                                    </span>
                                @endif

                                <p class="help-block">Example: 20</p>
                        </div>

                        <div class="form-group">
                            <label for="description">{{ __('Description') }}</label>
                            <textarea id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" rows="5" name="description" style="resize: vertical;" required>{{ $event->description }}</textarea>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <label for="status">{{ __('Status') }}</label> <br>
                            <input checked type="radio" id="status" name="status" value="Available">{{ __(" Disponible/Complet") }}
                                <br>
                            <input type="radio" id="status" name="status" value="Finished">{{ __(" Fini") }}
                        </div>

                        <div class="box-footer">
                                <button type="submit" class="btn btn-warning">
                                    {{ __('Editer') }}
                                </button>
                    	</div>
                    
                </form>
                </div>
    		</div>
    	</div>
    </div>
    </section>


@endsection