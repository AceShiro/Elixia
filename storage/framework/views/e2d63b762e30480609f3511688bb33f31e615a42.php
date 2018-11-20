<?php $__env->startSection('content'); ?>

<!-- Header -->
    <header class="masthead">
      <div class="background"><div class="bg-shadow"></div></div>
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Bienvenue chez Elixia !</div>
          <div class="intro-heading">Votre Café de l'Imaginaire</div>
          <a class="js-scroll-trigger" href="#patern1"><i class="fa fa-angle-double-down"></i></a>
        </div>
      </div>
    </header>

    <!-- About -->
    <section id="patern1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Elixia, un Café à part</h2>
            <h3 class="section-subheading text-muted">Venez découvrir un lieu cosy à l'ambiance chaleureuse et intimiste</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Lieu de vie aux mets gourmands</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Dégustez nos spécialités chaudes (cafés, thés, chocolats chauds) ou froides (smoothies, cocktails, milkshakes)
                     ainsi que nos sélections du moment (patisseries, spécialités exotiques).</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Dédié à la Créativité et à l'Imaginaire</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Un café centré sur l'imaginaire sous toutes ses formes : littérature, BDs, jeux de rôle, de société, 
                    avec plus de 300 ouvrages en libre accès et des expositions régulières.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Avec des soirées atypiques</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">En soirée, nous vous proposons régulièrement des événements liés à l'imaginaire : ateliers créatifs, conférences, 
                    soirées à thèmes, rencontres, soirées jeux, ...</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image-last">
                  <img class="rounded-circle img-fluid" src="<?php echo e(asset('img/logoElixiaSansFondReduit.png')); ?>" alt="">
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Modal Patern -->
    <?php echo $__env->make('partials._modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <section id="choices">
      <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading">La Carte du Café</h2>
              <h3 class="section-subheading">Tarif standard / <strong>Tarif Abonnement</strong> </h3>
            </div>
        </div>
        <div class="row">
          <div class="col-md-6 choices">
            <hr>

            <h3><i class="fa fa-coffee"></i> - Cafés</h3>
            <div class="content">
              <p>- Espresso 1,80€ / <strong>1,50€</strong></p>
              <p>- Double espresso 2,20€ / <strong>2,00€</strong></p>
              <p>- Café long 3,00€ / <strong>2,70€</strong></p>
              <p>- Café au lait 3,50€ / <strong>3,20€</strong></p>
              <p>- Latte Macchiato 4,00€ / <strong>3,50€</strong></p>
              <p>
                - Café viennois 4,50€ / <strong>4,00€</strong>
                <br>
                <div class="subcontent text-muted">
                  - Personnalisable sur demande
                </div>
              </p>
            </div>
            

            <hr>

            <h3><i class="fa fa-coffee"></i> - Thés</h3>
            <div class="content">
              <p>
                - Thé en vrac servi en théiere 3,50€ / <strong>3,20€</strong>
                <br>
                <div class="subcontent text-muted">
                  - Thé noir Inde du Sud Vanille Bio <br>
                  - Thé noir Ceylan Pomme Caramel <br>
                  - Thé noir Chine Ceylan Mangoustan <br>
                  - Thé noir Earl Grey Russe <br>
                  - Thé vert Chine Menthe Verte Bio <br>
                  - Thé vert Chine Gingembre Citron Bio <br>
                  - Thé vert Chine Jasmin <br>
                  - Thé vert Fraise Cassis Sureau Bio <br>
                  - Sélection du moment demandable au comptoir
                </div>
              </p>
            </div>

            <hr>

            <h3><i class="fa fa-cutlery"></i> - Chocolats</h3>
            <div class="content">
              <p>- Chocolat chaud 3,50€ / <strong>3,20€</strong></p>
              <p>
                - Chocolat viennois 4,50€ / <strong>4,00 €</strong>
                <br>
                <div class="subcontent text-muted">
                  - Personnalisable sur demande
                </div>
              </p>
            </div>

            <hr>

          </div>
          <div class="col-md-6 choices">
            <hr>

            <h3><i class="fa fa-beer"></i> - Boissons Fraiches</h3>
            <div class="content">
              <p>- Jus de fruits 2,50€ / <strong>2,30€</strong></p>
              <p>
                - Cocktail de jus de fruits 4,00€ / <strong>3,50 €</strong>
                <br>
                <div class="subcontent text-muted">
                  - Yennefer (Ananas Coco Limonade) <br>
                  - Sauron (Orange Ananas Grenadine) <br>
                  - Locke Lamora (Pomme Poire Litchi) <br>
                  - Elric (Peche Framboise Citron) <br>
                  - Ewilan (Orange Pomme Miel Citron) <br>
                  - Sélection du moment demandable au comptoir
                </div>
              </p>
              <p>
                - Smoothie (printemps/été) 5,00€ / <strong>4,50€</strong>
                <br>
                <div class="subcontent text-muted">
                  - Aziraphale (Orange Poire Pomme) <br>
                  - Daenerys (Banane Framboise Miel Lait) <br>
                  - Spock (Banane Citron Fraise Kiwi) <br>
                  - Nyarlathotep (Orange Peche Fraise) <br>
                  - Tara Duncan (Peche Poire Framboise) <br>
                  - Sélection du moment demandable au comptoir
                </div>
              </p>
              <p>
                - Milkshake (printemps/été) 5,00€ / <strong>4,50€</strong>
                <br>
                <div class="subcontent text-muted">
                  - Chocolat <br>
                  - Vanille <br>
                  - Fraise <br>
                  - Framboise <br>
                  - Sélection du moment demandable au comptoir
                </div>
              </p>
              <p>
                - Thé glacé (printemps/été) 2,50€ / <strong>2,30 €</strong>
                <br>
                <div class="subcontent text-muted">
                  - Demander au comptoir
                </div>
              </p>
              <p>- Sirop a l'eau 1,80€ / <strong>1,50€</strong></p>
              <p>- Soda 2,00€ / <strong>1,80€</strong></p>

              <p>
              3 variétés de lait disponibles
                <div class="subcontent text-muted">
                  - Vache, avoine et amande
                </div>
              </p>
            </div>

            <hr>

          </div>
        </div>
      </div>
    </section>

    <section class="bg-light" id="privatisation">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Tarifs des privatisations</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center text-justify">
            <h3 class="section-subheading subPriva" style="margin-top: 0px;">Réservations pendant les horaires d'ouvertures</h3>
            <p class="text-muted">Il est tout à fait possible de réserver une table gratuitement pendant nos horaires d'ouverture en nous contactant préalablement via
            notre page Facebook ou par mail, s'il s'agit d'une réservation pour moins de 15 personnes.</p>

            <h3 class="section-subheading subPriva">Privatisation</h3>
            <p class="text-muted">Néanmoins, si la réservation concerne plus de 15 personnes, si elle 
          est entièrement ou partiellement hors de nos horaires d'ouvertures, ou si vous souhaitez tout simplement avoir le local pour vous tout seul, il est également
         possible de le privatiser. Nos tarifs sont ci-dessous.</p>

         <img id="imgPrivatisation" src="img/tarifs_privatisation.jpg">
          </div>
        </div>
      </div>
    </section>

    <section id="location">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Localisation et Horaires</h2>
            <h3 class="section-subheading text-muted">4 Rue de la Thibaudière - 69007 LYON</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 text-right location">
            <hr>

            <h3><i class="fa fa-clock-o"></i> - Horaires: </h3>
            <p class="text-muted">Lundi : Fermé</p>
            <p class="text-muted">Mardi : 14h30 - 19h30</p>
            <p class="text-muted">Mercredi : 14h30 - 19h30</p>
            <p class="text-muted">Jeudi : 14h30 - 19h30</p>
            <p class="text-muted">Vendredi : 14h30 - 19h30</p>
            <p class="text-muted">Samedi : 14h30 - 19h30</p>
            <p class="text-muted">Dimanche : 11h00 - 17h00</p>

            <hr>
            
          </div>
          <div class="col-md-6 text-center">
            <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.9971951065922!2d4.84104721551952!3d45.75120217910543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea4479a76d95%3A0x75a7e9fb122c7e42!2s4+Rue+de+la+Thibaudi%C3%A8re%2C+69007+Lyon-7E-Arrondissement!5e0!3m2!1sen!2sfr!4v1523357698974" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="col-md-3 text-left location">
            <hr>

            <h3><i class="fa fa-subway"></i> - Métro: </h3>    
            <p class="text-muted">- B : Arrêt Saxe-Gambetta, Arrêt Jean-Macé</p>
            <p class="text-muted">- D : Arrêt Saxe-Gambetta</p>

            <hr>

            <h3><i class="fa fa-train"></i> - Tram: </h3>
            <p class="text-muted">- T2 : Arrêt Jean Macé</p>
            <p class="text-muted">- T1 : Arrêt Guillotière</p>

            <hr>

            <h3><i class="fa fa-bus"></i> - Bus:</h3>
            <p class="text-muted">- C4 : Arrêt Thibaudière</p>
            <p class="text-muted">- C12 : Arrêt Thibaudière</p>
            <p class="text-muted">- C14 : Arrêt Thibaudière</p>

            <hr>

          </div>
        </div>
      </div>
    </section>

    <?php echo $__env->make('partials._team', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('modals'); ?>
  <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="patern2-modal modal fade" id="<?php echo e('event' . $event->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container tarifs">
            <div class="row">
              <div class="col-lg-12">
                <div class="modal-body">
                  <div class="row">
                    <div class="col-lg-6">
                      
                        <!-- Project Details Go Here -->
                        
                        <img class="img-fluid d-block mx-auto" src="thumbnails/<?php echo e($event->id); ?>.jpg" alt="" style="box-shadow: 5px 10px 5px #888;">
                        
                        
                    </div>
                    <div class="col-lg-6">
                      <div class="row justify-content-center">
                        <div class="col-md-11" >
                          <h2><?php echo e($event->name); ?></h2>
                          <p class="item-intro events">Catégorie : <?php echo e($event->type); ?></p>
                          <hr>
                          <p class="text-justify events"><?php echo e($event->description); ?></p>
                          <hr>
                          <ul class="list-inline text-left">
                            <li>Date et Heure : <?php echo e(strftime('%d %B %G - %R', strtotime($event->event_when))); ?></li>
                            <?php if(Auth::guest()): ?>
                              <?php if($event->availability == 0): ?>
                              <li>Navré, cette soirée est complète...</li>
                              <li>Connectez-vous pour pouvoir vous inscrire aux suivantes !</li>
                              <?php elseif($event->availability < 10): ?>
                              <li>Seulement quelques places restantes !</li>
                              <li>Merci de vous connecter pour pouvoir vous inscrire !</li>
                              <?php else: ?>
                              <li>Des places sont encore disponibles !</li>
                              <li>Merci de vous connecter pour pouvoir vous inscrire !</li>
                              <?php endif; ?>
                            <?php else: ?>
                              <?php if($event->availability == 0): ?>
                              <li>Navré, cette soirée est complète...</li>
                              <?php elseif(Auth::user()->events()->Find($event->id)): ?>
                              <li>Vous êtes inscrit à cet événement !</li>
                              <?php else: ?>
                              <li>Places disponibles : <?php echo e($event->availability); ?></li>
                              <?php endif; ?>
                            <?php endif; ?>
                          </ul>
                          <?php if($event->availability > 0): ?>
                            <?php if(Auth::guest()): ?>
                              <a href="<?php echo e(route('login')); ?>" class="btn btn-info"><i class="fa fa-sign-in"></i> Se connecter</a>
                            <?php elseif(Auth::user()->events()->Find($event->id)): ?>
                              <!-- Le vide... -->
                            <?php else: ?>
                              <a href="<?php echo e(route('events.show', $event->id)); ?>" class="btn btn-success"><i class="fa fa-sign-in"></i> S'inscrire</a>
                            <?php endif; ?>
                          <?php elseif($event->availability == 0): ?>
                            <?php if(Auth::guest()): ?>
                              <a href="<?php echo e(route('login')); ?>" class="btn btn-info"><i class="fa fa-sign-in"></i> Se connecter</a>
                            <?php endif; ?>
                          <?php endif; ?>
                          <?php if(Auth::guest()): ?>

                          <?php elseif(Auth::user()->admin == true): ?>
                            <a href="<?php echo e(route('events.show', $event->id)); ?>" class="btn btn-info"><i class="fa fa-sign-in"></i> Voir</a>
                          <?php endif; ?>
                          <button class="btn btn-danger" data-dismiss="modal" type="button">
                            <i class="fa fa-times"></i>
                            Fermer</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <div class="patern2-modal modal fade" id="tarifs" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container tarifs">
            <div class="row">
              <div class="col-lg-10 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <img class="tarif-logo" src="<?php echo e(asset('img/logoElixiaSansFondReduit.png')); ?>" alt="">
                  <p class="item-intro">Soirées</p>
                  <p class="item-intro">-</p>
                  <p class="item-intro">Tarifs des entrées et abonnements</p>
                  <hr>


                  <div class="row justify-content-around">
                    <div class="col-md-5 tarifs" style="background-color: rgba(255, 255, 255, 0.8);box-shadow: 5px 10px 5px #888;border-radius: 10px;padding-top: 10px;">
                      <h3 class="tarifs">Abonnements</h3>
                      <hr>
                      <div class="pull-left">Tarif Jeune</div><div class="pull-right">15€ / mois</div> <br>
                      <div class="pull-left">Tarif Etudiant</div><div class="pull-right">20€ / mois</div> <br>
                      <div class="pull-left">Tarif Adulte</div><div class="pull-right">25€ / mois</div> <br>
                      <div class="pull-left">Tarif Famille</div><div class="pull-right">50€ / mois</div> <br>
                      <hr>
                    </div>
                    <div class="col-md-5 tarifs" style="background-color: rgba(255, 255, 255, 0.8);box-shadow: 5px 10px 5px #888;border-radius: 10px;padding-top: 10px;">
                      <h3 class="tarifs">Entrées individuelles</h3>
                      <hr>
                      <div class="pull-left">Tarif Jeune</div><div class="pull-right">5€</div> <br>
                      <div class="pull-left">Tarif Etudiant</div><div class="pull-right">8€</div> <br>
                      <div class="pull-left">Tarif Adulte</div><div class="pull-right">10€</div> <br>
                      <div class="pull-left">Tarif Famille</div><div class="pull-right">20€</div> <br>
                      <hr>
                    </div>
                  </div>

                  <div class="text-justify" style="padding-top: 50px;">
                    <p>L'accès aux soirées d'Elixia est gratuit pour les moins de 10 ans (dans la limite des places disponibles),
                     à l'exception des soirées spéciales enfants.</p>
                    <p>Le tarif jeune concerne les personnes agées de 10 à 17 ans (inclus).</p>
                    <p>Les enfants de moins de 13 ans (inclus) doivent obligatoirement être accompagnés d'un adulte responsable,
                     pour l'accès au café en journée, comme pour les soirées.</p>
                    <p>Le tarif famille comprend l'abonnement pour les deux conjoints (tarif adulte) et deux de leurs enfants (tarif jeune).
                     Pour chaque enfant supplémentaire, un complément de 10€ par enfant sera demandé.</p>
                    <p>Le fait de posséder un abonnement offre une réduction sur toute la carte des boissons d'Elixia, sur présentation de celui-ci.
                     Il donne également la possibilité de réserver une salle à l'arrière du café, pendant les horaires d'ouverture d'Elixia (sous
                     réserve de disponibilité, 8 personnes maximum). La réservation de cette salle est gratuite, sauf si des aménagements spéciaux
                     sont demandés pour l'occasion.</p>
                  </div>
                  


                  <button class="btn btn-danger" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>