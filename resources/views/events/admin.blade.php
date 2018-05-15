@extends('admin.layouts.admin_main')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
    		Evenements
        <small>{{ $event->name }}</small>
      	</h1>
      	<ol class="breadcrumb">
        	<li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Evenements</li>
        <li class="active">{{ $event->name }}</li>
      	</ol>
    </section>

    <hr>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Détails</a></li>
                <li><a href="#settings" data-toggle="tab">Options</a></li>
                <li><a href="#registered" data-toggle="tab">Membres inscrits</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <div class="table-responsive">
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

                  <hr>

                  <strong><i class="fa fa-database margin-r-5"></i> Status</strong>

                  <p>
                    @if ($event->status == 'Available')
                        <span class="label label-success">Disponible</span>
                      @elseif ($event->status == 'Full')
                        <span class="label label-warning">Complet</span>
                      @else
                        <span class="label label-danger">Fini</span>
                      @endif
                  </p>
                </div>
              <!-- /.table-responsive -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="settings">
                  <form method="POST" action="{{ route('events.update', $event->id) }}">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                    
                        <div class="form-group">
                            <label for="name">{{ __("Nom de l'Événement") }}</label>
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $event->name }}" required autofocus>
                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <label for="event_when">{{ __('Quand ?') }}</label>
                            <input id="event_when" type="datetime-local" class="form-control{{ $errors->has('event_when') ? ' is-invalid' : '' }}" {{ $event->event_when }} placeholder="{{ $event->event_when }}" name="event_when" required>

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
                                    {{ __('Éditer') }}
                                </button>
                      </div>
                    
                </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="registered">
                <div class="table-responsive">
                <table id="example1" class="table no-margin">
                  <thead>
                  <tr>
                    <th>Nom</th>
                    <th>E-Mail</th>
                    <th>Paiement</th>
                    @if (Auth::user()->admin == true)
                    <th>Voir l'Utilisateur</th>
                    @endif
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($event->users as $user)
                  <tr>
                    <td>{{ $user->first_name . " " . $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                      @if ($user->payments()->Find($event->id)->mode == 1)
                        <span class="label label-danger">Abonnement</span>
                      @else
                        <span class="label label-warning">Entree individuelle</span>
                      @endif
                    </td>
                    @if (Auth::user()->admin == true)
                      <td><a href="{{ route('users.show', $user->id) }}"><span class="label label-info"><i class="fa fa-sign-in"></i></span></a></td>
                    @endif
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              </div>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->

        </div>
        <!-- /.col -->

        <div class="col-md-4">
          <img class="profile-user-img img-responsive" src="../thumbnails/{{$event->id}}.jpg" alt="" style="width: auto;">

        
      </div>
        <!-- /.col -->

      </div>

      

    </section>

@endsection

@section('scripts')

<script>
  $(function () {
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false
    })
  })
</script>

@endsection