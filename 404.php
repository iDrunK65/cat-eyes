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

    <section id="error" class="container text-center"> <!-- !!!!!!!!!!!! REGARDE LE NOM DE L'ONGLET !!!!!!!!!!!!!!!!!! -->
    <p align="center"><img src="http://35.242.136.0/assets/images/404.gif" class="img-responsive" width="550"><p>
        <br>
        <font size="5pt">Oups, vous avez trouvé notre page <b>404</b></font>
        <br>
        <font size="3pt">Ce n'est pas un défaut, juste un accident qui n'a pas été intentionnel.</font>
        <br>
        <a class="btn btn-primary" href="http://35.242.136.0/index.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Retour vers l'accueil</a>
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
    														<a class="list-group-item" href="http://35.242.136.0/"><i class="fas fa-home"></i>&nbsp; Accueil</a>
    					                  <a class="list-group-item" href="http://35.242.136.0/news.php"><i class="far fa-newspaper"></i>&nbsp; News</a>
    					                  <a class="list-group-item" href="http://35.242.136.0/serveur.php"><i class="fas fa-server"></i>&nbsp; Serveur</a>
    					                  <a class="list-group-item" href="http://35.242.136.0/aide.php"><i class="fas fa-question-circle"></i>&nbsp; Aide Event</a>
    					                  <a class="list-group-item" href="http://35.242.136.0/contact.php"><i class="fas fa-users"></i>&nbsp; Nous contacter</a>
    					                  <a class="list-group-item" href="http://35.242.136.0/rapports-bugs.php"><i class="fas fa-bug"></i>&nbsp; Rapport de bugs</a>
    					                  <a class="list-group-item" href="http://35.242.136.0/.../"><i class="fas fa-ban"></i>&nbsp; Blocked</a>
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
