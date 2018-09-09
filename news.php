<?php
if(isset($_COOKIE['accept_cookie'])) {
  $showcookie = false;
} else {
  $showcookie = true;
}
require_once('assets/fichiers/footer.view.php');
require('membres/inc/header.php');
?>

<!-- *****************************************************************************************************************
     CODE UNIQUE DE LA PAGE
     ***************************************************************************************************************** -->

<section id="feature">
  <div class="container">
    <div class="center wow fadeInDown">
      <h2>Dernière Mise à jours</h2>
    </div>
    <div class="left wow fadeInDown">
      <h3>
        <b><u>Mise à jour du 24/04/2018</b></u><br>
        + Grappin<br>
        + Bombe Dévastatrice<br>
        + Pop corn<br>
        * Nouveau skin des printers<br>
        * Réorganisation des catégorie du gamemode<br>
        * FIX tapis roulants
      </h3>
    </div>
  </div>
</section>

    <div class="spacerbande"></div>

    <section id="feature">
      <div class="container">
        <div class="center wow fadeInDown">
          <h2>Annciène Mise à jours</h2>
        </div>
        <div class="left wow fadeInDown">
          <h3>
            <b><u>Mise à jour du 21/04/2018</b></u><br>
            + Possibilité d'afficher une map " touche m " configurable par un clique droit --> Settings.<br>
            + Ajout d'un nouveau drone.<br>
            + Ajout d'une Jeep équipée d'une Tourelle NON VIP.<br>
            + Ajout de 4 armes non VIP lourdes. PKP par exemple.<br>
            + Ajout d'une radio disponible dès le spawn, (clique gauche pour allumer et clique droit pour modifier le chanel).<br>
            * J'ai déplacé la banque à Printer ainsi que la recharge de papier dans l'onglet "entités".<br>
            * Mise à jour des POP CORN (Du nouveau disponible).
          </h3>
        </div>
      </div>
    </section>

    <!-- *****************************************************************************************************************
         FOOTER IDENTIQUE A TOUTES LES PAGES DU SITE
         ***************************************************************************************************************** -->

    <div class="spacerbande"></div>
    <section id="bottom">
            <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <div class="widget">
                            <h3><i class="fa fa-info-circle fa-1.5x"></i>&nbsp;Navigation rapide</h3>
                            <div class="list-group">
    														<a class="list-group-item" href="http://idrunk.byethost32.com/"><i class="fas fa-home"></i>&nbsp; Accueil</a>
    					                  <a class="list-group-item" href="http://idrunk.byethost32.com/news.php"><i class="far fa-newspaper"></i>&nbsp; News</a>
    					                  <a class="list-group-item" href="http://idrunk.byethost32.com/serveur.php"><i class="fas fa-server"></i>&nbsp; Serveur</a>
    					                  <a class="list-group-item" href="http://idrunk.byethost32.com/aide.php"><i class="fas fa-question-circle"></i>&nbsp; Aide Event</a>
    					                  <a class="list-group-item" href="http://idrunk.byethost32.com/contact.php"><i class="fas fa-users"></i>&nbsp; Nous contacter</a>
    					                  <a class="list-group-item" href="http://idrunk.byethost32.com/rapports-bugs.php"><i class="fas fa-bug"></i>&nbsp; Rapport de bugs</a>
    					                  <a class="list-group-item" href="http://idrunk.byethost32.com/.../"><i class="fas fa-ban"></i>&nbsp; Blocked</a>
    					                      </ul>
    					                  </li>
                            </div>
                        </div>
                    </div>
    			</div>
    		</div>
        </section>

        <footer id="footer" class="midnight-blue">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-20">
                            &copy; 2017-2018 TozWars. Site web par iDrunK !
                                <ul class="social-share">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    																<li><a href="https://twitter.com/idrunk65"><i class="fab fa-twitter" title="Suivez-nous sur Twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube" title="Abonnez-vous à notre chaîne Youtube"></i></a></li>
                                    <li><a href="mailto:idrunk65@gmail.com?subject=Prise en contact avec vous !&body=Bonjour, je prend contact avec vous aujourd'hui car"><i class="fas fa-at" title="Envoyez-nous un e-mail"></i></a></li>
                                    <li><a href="#"><i class="fas fa-angle-double-up" title="Retour en haut de la page"></i></a></li>

                        </div>
                    </div>
            </div>
        </footer>
    </body>

    </html>
