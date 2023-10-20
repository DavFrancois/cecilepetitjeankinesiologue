<!DOCTYPE html>
<html lang="fr">
	<head> <!-- Entête de la page -->
        <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-4XVJRDS582"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-4XVJRDS582'); </script>
		<title>Cécile PETITJEAN - Kinésiologue - Une séance de kinésiologie</title>
        <?php include('meta.php'); ?>
	</head>

	<body> <!-- Corps de la page -->
		<div id="bloc_page"> <!--page complète-->
            <header class ="header">
                <?php include('header.php'); ?>
                <nav class="header_nav">
                    <ul>
                        <li><a href="index.html" title="Accueil">Accueil</a></li>
                        <li><a href="p2_kinesiologue.php" title="La kinésiologie, c'est quoi ?">Kinésiologie</a></li>
                        <li><a href="p3_apprentissage.php" title="L'aide aux apprentissages">Apprentissages</a></li>
                        <li><a href="p4_qui.php" title="Qui suis-je ?">Qui suis-je ?</a></li>
                        <li class="header_nav-active"><a href="p5_sceance.php" title="Comment se déroule une séance de kinésiologie ?">Séance</a></li>
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
                        <h1>Comment se déroule une séance de kinésiologie ?</h1>
                        <figure class="figure_right_large">
                            <img class="figure_photo" src="images/cabinet5.jpg" alt="Cabinet Cécile Petitjean" title="Cabinet Cécile Petitjean"/>
                            <figcaption>&copy; Cécile Petitjean Kinésiologue</figcaption>
                        </figure><p><br />Une séance dure <strong>environ 1H30</strong>.</p>
                        <br />
                        <ul>
                            <li><p>Après un <strong>entretien</strong> pendant lequel vous m’exposerez votre problématique, nous évoquerons ensemble les éléments bloquants, si vous les connaissez, vous empêchant d’accéder à votre objectif, ou à votre état désiré.</p><br /></li>
                            <li><p>Ensuite, nous chercherons à identifier, grâce au <strong>test musculaire</strong> (doux et sans effort pour vous) l'origine de vos blocages et stress en lien avec votre problématique actuelle.<br /></p>
                                <figure class="figure_left"><img class="figure_photo" src="images/test_alonge.jpg" alt="Test musculaire en kinésiologie" title="Test musculaire"/>
                                <figcaption>&copy; Cécile Petitjean Kinésiologue</figcaption>
                                </figure><br />
                                <p>Le test musculaire consiste pour moi à détecter les variations de votre tonus musculaire, indicateurs d'un sujet stressant pour vous, parfois au plus profond de vous-même, hors du contrôle par votre mental.</p>
                                <p>Je pratique le test musculaire allongé sur la table de massage mais il est possible de fonctionner autrement, assis notamment, en cas de problème physique empêchant d’être allongé.</p>
                                <p>L'ensemble du test se fait habillé.</p>
                            <br /><br /><br /></li>
                            
                            <li>
                                <p>Puis nous utiliserons la technique la plus adaptée afin de <strong>corriger</strong> et <strong>rééquilibrer</strong>, pour dépasser votre problématique et accéder à votre plein potentiel.</p>

                                <p>Si nous nous comparions à un ordinateur, la correction consisterait en quelque sorte à faire une mise à jour et/ou reprogrammation partielle en fonction des dysfonctionnements détectés, afin d'optimiser le système et le potentiel de la machine.</p>
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
        <?php include('gototop.php'); ?>
	</body>
</html>

