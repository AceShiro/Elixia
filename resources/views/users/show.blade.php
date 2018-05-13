@extends('admin.layouts.admin_main')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
    		Profil Utilisateur
        <small>{{ $user->first_name . " " . $user->last_name }}</small>
      	</h1>
      	<ol class="breadcrumb">
        	<li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Profil Utilisateur</li>
        <li class="active">{{ $user->first_name . " " . $user->last_name }}</li>
      	</ol>
    </section>

    <hr>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-3">

        	<!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../../img/logoElixiaSansFondReduit.png" alt="User profile picture">

              <h3 class="profile-username text-center">{{ $user->first_name . " " . $user->last_name }}</h3>

              <p class="text-muted text-center">
              	@if($user->admin == true)
              		Admin
              	@else
              		Membre
              	@endif
              </p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Date de Naissance</b> <p class="pull-right">{{ strftime('%d %B %G', strtotime($user->birthday)) }}</p>
                </li>
                <li class="list-group-item">
                  <b>Adresse Mail</b> <p class="pull-right">{{ $user->email }}</p>
                </li>
                <li class="list-group-item">
                  <b>Nombre de participations</b> <p class="pull-right">{{ $user->registered_events }}</p>
                </li>
              </ul>

              @if (Auth::user()->admin == true)
              <a href="#" class="btn btn-primary btn-block"><b>Contacter</b></a>
              @endif
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Participations</a></li>
              @if (Auth::user()->admin == true)
              	<li><a href="#settings" data-toggle="tab">Options</a></li>
              @endif
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <div class="table-responsive">
                <table id="example1" class="table no-margin">
                  <thead>
                  <tr>
                    <th>N°</th>
                    <th>Nom</th>
                    <th>Quand?</th>
                    <th>Paiement</th>
                    @if (Auth::user()->admin == true)
                    <th>Voir l'Evenement</th>
                    @endif
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($user->events as $event)
                    <tr>
                      <td>{{ $event->id }}</td>
                      <td>{{ $event->name }}</td>
                      <td>{{ strftime('%d %B %G - %R', strtotime($event->event_when)) }}</td>
                      <td>
                        @if ($event->payments()->Find($event->id)->mode == 1)
                          <span class="label label-danger">Abonnement</span>
                        @else
                          <span class="label label-warning">Entree individuelle</span>
                        @endif
                      </td>
                      @if (Auth::user()->admin == true)
                      <td><a href="{{ route('events.show', $event->id) }}"><span class="label label-info"><i class="fa fa-sign-in"></i></span></a></td>
                      @endif
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
              </div>
              <!-- /.tab-pane -->
              @if (Auth::user()->admin == true)
              <div class="tab-pane" id="settings">
                <form class="form-horizontal" method="POST" action="{{ route('users.update', $user->id) }}">
                	@csrf
                	<input type="hidden" name="_method" value="PUT">

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="radio">
                        <label for="admin">
                        	@if ($user->admin == true)
                        		<input checked type="radio" id="admin" name="admin" value="1">{{ __(" Admin") }}
                        		<br>
                        		<input type="radio" id="admin" name="admin" value="0">{{ __(" Membre") }}
                        	@else
                        		<input type="radio" id="admin" name="admin" value="1">{{ __(" Admin") }}
                        		<br>
                        		<input checked type="radio" id="admin" name="admin" value="0">{{ __(" Membre") }}
                        	@endif
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
              @endif
              
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
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
      'lengthChange': true,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

@endsection