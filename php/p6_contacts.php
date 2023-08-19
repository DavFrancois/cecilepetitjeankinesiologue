<!DOCTYPE html>
<html lang="fr">
	<head> <!-- Entête de la page -->
		<title>Cécile PETITJEAN - Kinésiologue</title>
		<meta charset="utf-8" /> <!-- meta : important pour seo-->
        <meta name="description" content="Cécile PETITJEAN kinésiologue certifiée sur Rennes. Médecine alternative. Aide aux apprentissages, peurs, phobies, relation aux autres, trouble du sommeil, gestion du stress, confiance en soi, santé, maux du corps, estime de soi, comportements alimentaires">
        <meta name="keywords" content="Cécile PETITJEAN, kinésiologue, kinesiologie, sophrologie, Rennes. Médecine alternative. apprentissage, peurs, phobies, relation aux autres, trouble, sommeil, stress, confiance, soi, santé, maux, corps, estime, comportements, alimentaires, énergie, éducation, devoirs, enfants"><!-- A compléter-->
		<link rel="stylesheet" href="../css/stylececile.css" />
	</head>

	<body> <!-- Corps de la page -->
		<div id="bloc_page"> <!--page complète-->
        <header class ="header">
            <?php include('header.php'); ?>
            <nav class="header_nav">
                <ul>
                    <li><a href="p1_accueil.php" title="Accueil">Accueil</a></li>
                    <li><a href="p2_kinesiologue.php" title="La kinésiologie, c'est quoi ?">Kinésiologie</a></li>
                    <li><a href="p3_Apprentissage.php" title="L'aide aux apprentissages">Apprentissages</a></li>
                    <li><a href="p4_qui.php" title="Qui suis-je ?">Qui suis-je ?</a></li>
                    <li><a href="p5_sceance.php" title="Comment se déroule une scéance de kinésiologie ?">Scéance</a></li>
                    <li class="header_nav-active"><a href="p6_contacts.php" title="Informations pratiques">Contacts, Tarifs</a></li>
                </ul>
            </nav>
        </header>    
            
            <div class="banniere"> <!--Bannière-->
                <p>Il n'est jamais trop tard pour éclore !</p>
            </div>
            
            <section>
                <?php @include('section_nav.php'); ?> <!-- bandeau lateral de navigation -->
				
                <article>
                    <div class="impair">
                        <h1>Coordonnées</h1>
                        <p>Cécile Petitjean <strong>Kinésiologue</strong>.</p>
                        <ul>
                            <li>Mobile : <em>06 40 08 13 82</em></li>
                            <li>Email : <a href="mailto:cecilepetitjeankinesiologue@gmail.com" title="Envoyer un email à cecilepetitjeankinesiologue@gmail.com">cecilepetitjeankinesiologue@gmail.com</a></li>
                            <li>Adresse : Centre des Pépites du Loup (Laboratoire d'Outils Utiles pour Parents)<ul><li>1 rue des Mauriers - 35400 Saint-Malo</li></ul>
                        </ul>
                        <div class="localisation">
                            <div class="localisation__lieu">
                                <h5>Les Pépites du Loup</h5>
                                <p>1, rue des Mauriers 35400 Saint-Malo</p>
                                <iframe title="Localisation Cécile Petitjean Kinésiologie Saint-Malo" alt="localisation Cécile Petitjean Kinésiologie Saint-Malo"
                                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84364.74722952356!2d-2.0847406802409076!3d48.64049417005871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480e83f5b78e3fdf%3A0x85f1ede67cb68c14!2sCentre%20de%20formation%20Les%20p%C3%A9pites%20du%20loup!5e0!3m2!1sfr!2sfr!4v1681405812615!5m2!1sfr!2sfr"></iframe>
                            </div>
                            <div class="localisation__photos">
                                <figure class="figure_right_large2">
                                    <img class="figure_photo" src="../images/batLPDL.jpg" alt="Les Pépites du Loup" title="Les Pépites du Loup"/>
                                    <figcaption>&copy; Cécile Petitjean Kinésiologue</figcaption>
                                    <img class="figure_photo" src="../images/parkingLPDL.jpg" alt="Parking gratuit" title="Parking gratuit"/>
                                    <figcaption>&copy; Cécile Petitjean Kinésiologue</figcaption>
                                    <img class="figure_photo" src="../images/attenteLPDL.jpg" alt="Salle d'attente Les Pépites du Loup" title="Salle d'attente Les Pépites du Loup"/>
                                    <figcaption>&copy; Cécile Petitjean Kinésiologue</figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="pair">
                        <h1>Horaires des consultations</h1>
                        <ul>
                            <li>Au cabinet du Centre des Pépites du Loup à Saint-Malo : <strong>mardi, vendredi et samedi de 9h à 19h30</strong></br><a href="https://cecilepetitjeankinesiologue.simplybook.it/v2/" target="_blank" title="Prendre rendez-vous en ligne">Prendre Rendez-vous</a></h3>
</li>
                            <li>A domicile : me consulter</li>
                        </ul>
                        <p>Les horaires peuvent varier selon les vacances et les jours fériés. N'hésitez pas à me consulter en cas de doute ou de difficulté afin d'essayer de trouver une solution.</p>
                    </div>
                    <div class="impair">
                        <h1>Tarifs*</h1>
                        <ul>
                            <li>KINESIOLOGIE scéance adulte ou enfant : 60 €</li>
                        </ul>
                        <p>Remboursement possible selon les mutuelles au titre des forfaits prévention, mieux être ou médecine douce.</p>
                        <p>Durée d'une scéance : environ <strong>1h30</strong></p>
                        <h6></br>* : paiement en espèces ou par chèque uniquement</br>Toute scéance programmée et non annulée au moins 48h à l'avance sera due.</h6>
                    </div>

                    <div class="pair">
                        <h1>Autres liens et partenaires</h1>
                        <ul class="partenaires">
                            <li><img class="partenaire_logo" src="../images/logo_ektc.png" alt="Logo EKTC" title="EKTC">Ecole de Kinésiologie et Techniques Complémentaires : <a href="https://www.ecole-kinesiologie.fr/"  target="_blank" title="Lien vers le site de l'EKTC"> EKTC</a></li>
                            <li><img class="partenaire_logo" src="../images/logo.loup.webp" alt="Logo Pépites du Loup" title="Les Pépites du Loup" >Laboratoire d'Outils Utiles pour Parents : <a href="https://www.lespepitesduloup.fr/"  target="_blank" title="Lien vers le site Les Pépites du Loup"> Les Pépites du Loup</a></li>
                            <li><img class="partenaire_logo" src="../images/logo_snk.png" alt="Logo SNK" title="Syndicat National des Kinésiologues" >Syndicat National des Kinésiologues : <a href="https://www.snkinesio.fr/"  target="_blank" title="Lien vers le site SNK">SNK</a></li>
                        </ul>
                    </div>
                    <?php include('calendrier.php'); ?>

                    <!--Formulaire de contact
                    <form class="form" method="post" action="../php/mail.php">
                        <h1 class="form__heading">Contactez-moi</h1>
                        <div class="form__field">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" required id="nom" autocomplete="nom">
                        </div>
                        <div class="form__field">
                            <label for="prenom">Prénom</label>
                            <input type="text" name="prenom" required id="prenom" autocomplete="prenom">
                        </div>
                        <div class="form__field">
                            <label for="email">email</label>
                            <input type="email" name="email" required id="email" autocomplete="email">
                        </div>
                        <div class="form__field">
                            <label for="tel">Téléphone</label>
                            <input type="tel" name="tel" required id="tel" autocomplete="tel">
                        </div>
                        <div class="form__field">
                            <label for="message">Message</label>
                            <textarea name="message" placeholder="Merci d'indiquer ici comment je peux vous aider ou vos questions." id="message" cols="30" rows="10"></textarea>
                        </div>
                        <input type="submit">
                    </form>
                    -->
                </article>
            </section>
                    
            <?php include('footer.php'); ?>
		</div>
        <?php include('gototop.php'); ?>
	</body>
</html>

