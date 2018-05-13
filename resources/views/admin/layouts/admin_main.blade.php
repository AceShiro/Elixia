<!DOCTYPE html>
<html>

@include('admin.partials._head')

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include('admin.partials._navigation')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    @yield('content')

  </div>
  <!-- /.content-wrapper -->

  @include('admin.partials._controls')

</div>
<!-- ./wrapper -->

</body>

@include('admin.partials._footer')

</html>
