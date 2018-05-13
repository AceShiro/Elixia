@extends('admin.layouts.admin_main')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
    		Événements
        <small>Tous les événements</small>
      	</h1>
      	<ol class="breadcrumb">
        	<li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Événements</li>
        <li class="active">Tous les événements</li>
      	</ol>
    </section>

    <hr>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Liste des événements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nom</th>
                  <th>Type</th>
                  <th>Quand ?</th>
                  <th>Places disponibles</th>
                  <th>Status</th>
                  <th>Options</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($events as $event)
                <tr>
              		<td>{{ $event->id }}</td>
              		<td>{{ $event->name }}</td>
              		<td>{{ $event->type }}</td>
              		<td>{{ strftime('%d %B %G - %R', strtotime($event->event_when)) }}</td>
              		<td>{{ $event->availability }}</td>
              		<td>
              		  @if ($event->status == 'Available')
                        <span class="label label-success">Disponible</span>
                      @elseif ($event->status == 'Full')
                        <span class="label label-warning">Complet</span>
                      @else
                        <span class="label label-danger">Fini</span>
                      @endif
              		</td>
              		<td><a href="{{ route('events.show', $event->id) }}"><span class="label label-info"><i class="fa fa-sign-in"></i></span></a> <a href="{{ route('events.edit', $event->id) }}"><span class="label label-warning"><i class="fa fa-gear"></i></span></a>
              			<form method="POST" action="{{ route('events.destroy', $event->id) }}">
              				<input type="hidden" name="_method" value="DELETE">
   							@csrf
   							<button class="label label-danger" type="submit"><i class="fa fa-trash"></i></button>
              			</form>
              		</td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Nom</th>
                  <th>Type</th>
                  <th>Quand ?</th>
                  <th>Places disponibles</th>
                  <th>Status</th>
                  <th>Options</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

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