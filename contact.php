<?php
if(isset($_COOKIE['accept_cookie'])) {
  $showcookie = false;
} else {
  $showcookie = true;
}
require_once('assets/fichiers/footer.view.php');
require('membres/inc/header.php');
?>

<script>
    swal({
  title: 'Auto close alert!',
  text: 'I will close in 5 seconds.',
  timer: 5000,
  onOpen: () => {
    swal.showLoading()
  }
}).then((result) => {
  if (
    // Read more about handling dismissals
    result.dismiss === swal.DismissReason.timer
  ) {
    console.log('I was closed by the timer')
  }
})
</script>

<!-- *****************************************************************************************************************
     CODE UNIQUE DE LA PAGE
     ***************************************************************************************************************** -->

<section id="middle">
  <div class="container">
    <div class="center wow fadeInDown">
            <?php
            /*
            	********************************************************************************************
            	CONFIGURATION
            	********************************************************************************************
            */
            // destinataire est votre adresse mail. Pour envoyer à plusieurs à la fois, séparez-les par une virgule
            $destinataire = 'idrunk65@gmail.com';

            // copie ? (envoie une copie au visiteur)
            $copie = 'oui';

            // Action du formulaire (si votre page a des paramètres dans l'URL)
            // si cette page est index.php?page=contact alors mettez index.php?page=contact
            // sinon, laissez vide
            $form_action = 'contact.php';

            // Messages de confirmation du mail
            $message_envoye = "Votre message nous n'est pas bien parvenu ! ";
            $message_non_envoye = "L'envoi du mail a échoué, veuillez réessayer SVP.";

            // Message d'erreur du formulaire
            $message_formulaire_invalide = "Vérifiez que tous les champs soient bien remplis et que l'email soit sans erreur.";

            /*
            	********************************************************************************************
            	FIN DE LA CONFIGURATION
            	********************************************************************************************
            */

            /*
             * cette fonction sert à nettoyer et enregistrer un texte
             */
            function Rec($text)
            {
            	$text = htmlspecialchars(trim($text), ENT_QUOTES);
            	if (1 === get_magic_quotes_gpc())
            	{
            		$text = stripslashes($text);
            	}

            	$text = nl2br($text);
            	return $text;
            };

            /*
             * Cette fonction sert à vérifier la syntaxe d'un email
             */
            function IsEmail($email)
            {
            	$value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
            	return (($value === 0) || ($value === false)) ? false : true;
            }

            // formulaire envoyé, on récupère tous les champs.
            $nom     = (isset($_POST['nom']))     ? Rec($_POST['nom'])     : '';
            $email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
            $objet   = (isset($_POST['objet']))   ? Rec($_POST['objet'])   : '';
            $message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';

            // On va vérifier les variables et l'email ...
            $email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré
            $err_formulaire = false; // sert pour remplir le formulaire en cas d'erreur si besoin

            if (isset($_POST['envoi']))
            {
            	if (($nom != '') && ($email != '') && ($objet != '') && ($message != ''))
            	{
            		// les 4 variables sont remplies, on génère puis envoie le mail
            		$headers  = 'From:'.$nom.' <'.$email.'>' . "\r\n";
            		//$headers .= 'Reply-To: '.$email. "\r\n" ;
            		//$headers .= 'X-Mailer:PHP/'.phpversion();

            		// envoyer une copie au visiteur ?
            		if ($copie == 'oui')
            		{
            			$cible = $destinataire.';'.$email;
            		}
            		else
            		{
            			$cible = $destinataire;
            		};

            		// Remplacement de certains caractères spéciaux
            		$message = str_replace("&#039;","'",$message);
            		$message = str_replace("&#8217;","'",$message);
            		$message = str_replace("&quot;",'"',$message);
            		$message = str_replace('&lt;br&gt;','',$message);
            		$message = str_replace('&lt;br /&gt;','',$message);
            		$message = str_replace("&lt;","&lt;",$message);
            		$message = str_replace("&gt;","&gt;",$message);
            		$message = str_replace("&amp;","&",$message);

            		// Envoi du mail
            		$num_emails = 0;
            		$tmp = explode(';', $cible);
            		foreach($tmp as $email_destinataire)
            		{
            			if (mail($email_destinataire, $objet, $message, $headers))
            				$num_emails++;
            		}

            		if ((($copie == 'oui') && ($num_emails == 2)) || (($copie == 'non') && ($num_emails == 1)))
            		{
            			echo '<div class="spacerbande"></div> <h3>'.$message_envoye.'</h3> <div class="spacerbande"></div> <br > <a class="btn btn-primary" href="http://127.0.0.1/cat's eyes/a4ecfc70574394990cf17bd83df499f7/"><i class="fa fa-hand-o-right fa-fw" aria-hidden="true"></i>&nbsp; Retour à l\'Accueil</a>';
            		}
            		else
            		{
            			echo '<div class="spacerbande"></div> <h3>'.$message_non_envoye.'</h3> <div class="spacerbande"></div>';
            		};
            	}
            	else
            	{
            		// une des 3 variables (ou plus) est vide ...
            		echo '<div class="spacerbande"></div> <h3>'.$message_formulaire_invalide.'</h3> <div class="spacerbande"></div>';
            		$err_formulaire = true;
            	};
            }; // fin du if (!isset($_POST['envoi']))

            if (($err_formulaire) || (!isset($_POST['envoi'])))
            {
            	// afficher le formulaire
            	echo '

            	<form id="contact" method="post" action="'.$form_action.'">
              <br >
            	<fieldset><legend>Vos coordonnées</legend>
            		<p><label for="nom">Nom :</label><br ><input type="text" id="nom" name="nom" value="'.stripslashes($nom).'" tabindex="1" /></p>
            		<p><label for="email">Email :</label><br ><input type="text" id="email" name="email" value="'.stripslashes($email).'" tabindex="2" /></p>
            	</fieldset>

            	<fieldset><legend>Votre message :</legend>
            		<p><label for="objet">Objet :</label><br ><input type="text" id="objet" name="objet" value="'.stripslashes($objet).'" tabindex="3" /></p>
            		<p><label for="message">Message :</label><br ><textarea id="message" name="message" tabindex="4" cols="50" rows="8">'.stripslashes($message).'</textarea></p>
            	</fieldset>

            	<div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer le formulaire !" /></div>
            	</form>';
            };
            ?>
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
									  <a class="list-group-item" href="http://127.0.0.1/cat's eyes/"><i class="fas fa-home"></i>&nbsp; Accueil</a>
					                  <a class="list-group-item" href="http://127.0.0.1/cat's eyes/news.php"><i class="far fa-newspaper"></i>&nbsp; News</a>
					                  <a class="list-group-item" href="http://127.0.0.1/cat's eyes/serveur.php"><i class="fas fa-server"></i>&nbsp; Serveur</a>
					                  <a class="list-group-item" href="http://127.0.0.1/cat's eyes/aide.php"><i class="fas fa-question-circle"></i>&nbsp; Aide Event</a>
					                  <a class="list-group-item" href="http://127.0.0.1/cat's eyes/contact.php"><i class="fas fa-users"></i>&nbsp; Nous contacter</a>
					                  <a class="list-group-item" href="http://127.0.0.1/cat's eyes/rapports-bugs.php"><i class="fas fa-bug"></i>&nbsp; Rapport de bugs</a>
					                  <a class="list-group-item" href="http://127.0.0.1/cat's eyes/.../"><i class="fas fa-ban"></i>&nbsp; Blocked</a>
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
