<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <img src="<?php echo e(asset('img/logoElixiaSansFondReduit.png')); ?>" alt="">
          <?php echo e(config('app.name', 'Elixia')); ?>

        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#patern1">À Propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#patern2">Nos Soirées</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#choices">La Carte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#privatisation">Privatisation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#location">Infos Pratiques</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">L'Équipe</a>
            </li>

            <?php if(auth()->guard()->guest()): ?>
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                  Connexion
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item dp-login" href="<?php echo e(route('login')); ?>"><?php echo e(__('Se Connecter')); ?></a>
                  <a class="dropdown-item dp-login" href="<?php echo e(route('register')); ?>"><?php echo e(__("S'enregistrer")); ?></a>
                </div>
              </li>
            <?php else: ?>
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                 <?php echo e(Auth::user()->first_name); ?> <span class="caret"></span>
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <?php if(Auth::user()->admin == true): ?>
                  <a class="dropdown-item" href="<?php echo e(route('dashboard')); ?>"><?php echo e(__("Dashboard")); ?></a>
                  <?php endif; ?>

                  <a class="dropdown-item" href="<?php echo e(route('users.show', Auth::user()->id)); ?>"><?php echo e(__("Profil")); ?></a>
                  <hr>
                  <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                     onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                    <?php echo e(__('Déconnexion')); ?>

                  </a>

                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                  </form>
                </div>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
</nav>