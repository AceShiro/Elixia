@extends('admin.layouts.admin_main')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 1.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Membres inscrits</span>
              <span class="info-box-number">{{ $verifiedUserCount }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-line-chart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Événements organisés</span>
              <span class="info-box-number">{{ $eventCount }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-envelope-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Newsletters envoyées</span>
              <span class="info-box-number">-</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">

          <!-- TABLE: EVENTS -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Derniers Événements</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>N°</th>
                    <th>Événement</th>
                    <th>Status</th>
                    <th>Places disponibles</th>
                    <th>Quand ?</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($lastEvents as $event)
                  <tr>
                    <td>{{ $event->id }}</td>
                    <td>{{ $event->name }}</td>
                    <td>
                      @if ($event->status == 'Available')
                        <span class="label label-success">Disponible</span>
                      @elseif ($event->status == 'Full')
                        <span class="label label-warning">Complet</span>
                      @else
                        <span class="label label-danger">Fini</span>
                      @endif
                    </td>
                    <td>{{ $event->availability }}</td> 
                    <td>{{ strftime('%d %B %G - %R', strtotime($event->event_when)) }}</td>
                    <td><a href="{{ route('events.show', $event->id) }}"><span class="label label-info"><i class="fa fa-sign-in"></i></span></a> <a href="{{ route('events.edit', $event->id) }}"><span class="label label-warning"><i class="fa fa-gear"></i></span></a></td>                   
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="{{ route('events.create') }}" class="btn btn-sm btn-info btn-flat pull-left">Créer un Événement</a>
              <a href="{{ route('events.index') }}" class="btn btn-sm btn-default btn-flat pull-right">Voir tous les événements</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

      <div class="col-md-4">
        <!-- TABLE: LATEST MEMBERS -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Derniers membres inscrits</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>N°</th>
                    <th>Nom</th>
                    <th>DdN</th>
                    <th>E-Mail</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($lastUsers as $user)
                  <tr>
                    <td><a href=""></a>{{ $user->id }}</td>
                    <td>{{ $user->last_name . " " . $user->first_name }}</td>
                    <td>{{ $user->birthday }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a href="{{ route('users.show', $user->id) }}"><span class="label label-info"><i class="fa fa-sign-in"></i></span></a> <a href="{{ route('users.edit', $user->id) }}"><span class="label label-warning"><i class="fa fa-gear"></i></span></a></td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="{{ route('users.index') }}" class="btn btn-sm btn-default btn-flat pull-right">Voir tous les membres</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->


        <div class="col-md-8">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Créer un Événement</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
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
                                    {{ __('Créer') }}
                                </button>
                      </div>
                    
                </form>
                </div>
        </div>
      </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

@endsection