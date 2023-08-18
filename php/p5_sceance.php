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
                        <li class="header_nav-active"><a href="p5_sceance.php" title="Comment se déroule une scéance de kinésiologie ?">Scéance</a></li>
                        <li><a href="p6_contacts.php" title="Informations pratiques">Contacts, Tarifs</a></li>
                    </ul>
                </nav>
            </header>    
            
            <div class="banniere"> <!--Bannière-->
                <p>Il n'est jamais trop tard pour éclore !</p>
            </div>
            
            <section>
                <?php @include('section_nav.php'); ?> <!-- bandeau lateral de navigation -->
				
                <article> <!--contenu-->
                    <div class="centre">
                        <h1>Comment se déroule une scéance de kinésiologie ?</h1>
                        <p></br>Une séance dure <strong>environ 1H30</strong>.</p>
                        <figure class="figure_right_large">
                            <img class="figure_photo" src="../images/cabinetLPDL1.jpg" alt="Cabinet Cécile Petitjean" title="Cabinet Cécile Petitjean"/>
                            <figcaption>&copy; Cécile Petitjean Kinésiologue</figcaption>
                        </figure>
                        <ul>
                            <li>
                                <p>Après un <strong>entretien</strong> pendant lequel vous m’exposerez votre problématique, nous évoquerons ensemble les éléments bloquants, si vous les connaissez, vous empêchant d’accéder à votre objectif, ou à votre état désiré.</p>
                                <li>
                                    <p>Ensuite, nous chercherons à identifier, grâce au <strong>test musculaire</strong> (doux et sans effort pour vous) l'origine de vos blocages et stress en lien avec votre problématique actuelle.</p>
                                </li>
                                    <figure class="figure_left">
                                    <img class="figure_photo" src="../images/test_alonge.jpg" alt="Test musculaire en kinésiologie" title="Test musculaire"/>           <figcaption>&copy; Cécile Petitjean Kinésiologue</figcaption>
                                </figure>
                                <p>Le test musculaire consiste pour moi à détecter les variations de votre tonus musculaire, indicateurs d'un sujet stressant pour vous, parfois au plus profond de vous-même, hors du contrôle par votre mental.</p>
                                <p>Je pratique le test musculaire allongé sur la table de massage mais il est possible de fonctionner autrement, assis notamment, en cas de problème physique empêchant d’être allongé.</p>
                                <p>L'ensemble du test se fait habillé.</p>
                            </li>
                            <li>
                                <p>Puis nous utiliserons la technique la plus adaptée afin de <strong>corriger</strong> et <strong>rééquilibrer</strong>, pour dépasser votre problématique et accéder à votre plein potentiel.</p>

                                <p>Si nous nous comparions à un ordinateur, la correction consisterait en quelque sorte à faire une mise à jour et/ou reprogrammation partielle en fonction des dysfonctionnement détectés, afin d'optimiser le système et le potentiel de la machine.</p>
                                <p>Mes outils de rééquilibration sont variés et dépendront de chaque problématique et de chaque personne :</p>
                                <ul>
                                    <li>Santé par le toucher</li>
                                    <li>Intégration corps-mental</li>
                                    <li>Edu-kinésiologie</li>
                                    <li>Réflexes archaïques</li>
                                    <li>Pratique Kinésiologie professionnelle</li>
                                    <li>Kinésiologie pré et post natal</li>
                                    <li>Visualisation</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <?php include('calendrier.php'); ?>
                    </article>
                        
                    </div>
            </section>
                    
            <?php include('footer.php'); ?>
		</div>
        <!-- lien retour haut de page -->
        <nav class="gotoTop">
            <a href="#">HAUT</br>DE</br>PAGE</a>
        </nav>
	</body>
</html>

