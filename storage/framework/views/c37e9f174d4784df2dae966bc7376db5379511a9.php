  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo e(route('dashboard')); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>LX</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>E</b>lixia</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="/img/logoElixiaSansFondReduit.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo e(Auth::user()->first_name); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="/img/logoElixiaSansFondReduit.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo e(Auth::user()->first_name . " " . Auth::user()->last_name); ?>

                  <small>
                  <?php if(Auth::user()->admin == true): ?>
                  Admin
                  <?php else: ?>
                  Membre
                  <?php endif; ?>
                  </small>
                </p>
              </li>
              <!-- Menu Body
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-6 text-center">
                    <a href="#">Reservations</a>
                  </div>
                  <div class="col-xs-6 text-center">
                    <a href="#">Sales</a>
                  </div>
                </div>
                /.row 
              </li> -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a class="btn btn-default btn-flat" href="<?php echo e(route('users.show', Auth::user()->id)); ?>">Profil</a>
                </div>

                <div class="pull-right">
                  <a class="btn btn-default btn-flat" href="<?php echo e(route('logout')); ?>"
                     onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                    <?php echo e(__('Logout')); ?>

                  </a>

                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </nav>
  </header>

    <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/img/logoElixiaSansFondReduit.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo e(Auth::user()->first_name . " " . Auth::user()->last_name); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">NAVIGATION</li>
        <?php if(Auth::user()->admin == true): ?>
        <li class="<?php echo e(Request::is('dashboard') ? "active menu-open" : ""); ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo e(Request::is('dashboard') ? "active" : ""); ?>"><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
          </ul>
        </li>
        <li class="<?php echo e(Request::is('events', 'events/create') ? "active menu-open" : ""); ?> treeview">
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span>Événements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo e(Request::is('events') ? "active" : ""); ?>"><a href="<?php echo e(route('events.index')); ?>"><i class="fa fa-navicon"></i> Tous les Événements</a></li>
            <li class="<?php echo e(Request::is('events/create') ? "active" : ""); ?>"><a href="<?php echo e(route('events.create')); ?>"><i class="fa fa-calendar-plus-o"></i> Créer un événement</a></li>
          </ul>
        </li>
        <li class="<?php echo e(Request::is('users') ? "active menu-open" : ""); ?> treeview">
          <a href="#">
            <i class="fa fa-list"></i>
            <span>Membres</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo e(Request::is('users') ? "active" : ""); ?>"><a href="<?php echo e(route('users.index')); ?>"><i class="fa fa-users"></i> Tous les membres</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i>
            <span>Newsletter</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-clone"></i> Newsletters envoyées</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-pencil"></i> Composer une Newsletter</a></li>
          </ul>
        </li>
        <?php endif; ?>
        <li class="<?php echo e(Request::is('users/' . Auth::user()->id) ? "active" : ""); ?>"><a href="<?php echo e(route('users.show', Auth::user()->id)); ?>"><i class="fa fa-user"></i> <span>Mon Profil</span></a></li>
        <li><a href="<?php echo e(route('/')); ?>"><i class="fa fa-circle-o text-red"></i> <span>Retour au site</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>