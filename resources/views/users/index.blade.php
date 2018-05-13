@extends('admin.layouts.admin_main')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
    		Membres
        <small>Tous les membres</small>
      	</h1>
      	<ol class="breadcrumb">
        	<li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Membres</li>
        <li class="active">Tous les membres</li>
      	</ol>
    </section>

    <hr>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nom</th>
                  <th>Date de Naissance</th>
                  <th>E-Mail</th>
                  <th>Nombre de participations</th>
                  <th>Options</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                  <td>{{ $user->id }}</td>
                  <td>
                    @if ($user->admin == true)
                      <span class="label label-danger">{{ $user->last_name . " " . $user->first_name }}</span>
                    @else
                      {{ $user->last_name . " " . $user->first_name }}
                    @endif
                  </td>
                  <td>{{ $user->birthday }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->registered_events }}</td>
                  <td><a href="{{ route('users.show', $user->id) }}"><span class="label label-info"><i class="fa fa-sign-in"></i></span></a> <a href="{{ route('users.edit', $user->id) }}"><span class="label label-warning"><i class="fa fa-gear"></i></span></a></td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Nom</th>
                  <th>Date de Naissance</th>
                  <th>E-Mail</th>
                  <th>Nombre de participations</th>
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