<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="styles/style.css" />
        <link rel="stylesheet" href="styles/responsive.css" />
        <title>Site personnel de Elliot Vanegue</title>
    </head>

    <body>

      <?php include("titre.php") ?>

      <div class="row">

        <?php include("navigateur.php") ?>

        <section class="col-lg-offset-1 col-lg-7">

        <!--</br><p id="citation"> "Science sans conscience n'est que ruine de l'âme" </p>
        <p id="authorCitation">François Rabelais</p></br>-->

          <h2> Présentation </h2>
          <p>
            Je suis actuellement étudiant en master 2 à l'université de Lille 1 en informatique,
            spécialisé dans l'image, la vision et l'interaction. Je m'intéresse particulièrement
            aux traitements d'image et aux images 3D.
            <!-- Ma première ambition était de partir dans
            le monde du jeux vidéo. Puis, le traitement d'image 3D et ses applications m'ont beaucoup
            plu, c'est pourquoi j'aimerais continuer à étudier ce sujet lors d'une thèse.-->
          </p>
          </br>
          </br>

          <h2> Experiences professionnelle </h2>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <td class="col-lg-5">Année</td>
                <td>Lieux</td>
                <td>Projet</td>
              </tr>
              <tr>
                <td>Mars 2015 - Aout 2016</td>
                <td><a href="http://www.cristal.univ-lille.fr/?rubrique27&eid=33">3D Sam</a></td>
                <td>Approche sémantique de segmentation et de recherche interactive par le contenu issu d’une caméra de profondeur</td>
              </tr>
              <tr>
                <td>Octobre 2015 - Février 2016</td>
                <td><a href="http://www.cristal.univ-lille.fr/?rubrique27&eid=33">3D Sam</a></td>
                <td>Détection, suivi et animation de la main dans une scène 3D</td>
              </tr>
              <tr>
                <td>Janvier - Avril 2015</td>
                <td><a href="http://www.cristal.univ-lille.fr/?rubrique27&eid=34">Fox</a></td>
                <td>Localisation du centre de l'oeil dans le visage</td>
              </tr>
              <tr>
                <td>Avril - Aout 2014</td>
                <td><a href="http://www.gfi.fr/">Gfi</a></td>
                <td>Développeur Java/JEE</td>
              </tr>
              <tr>
                <td>Avril - Juillet 2013</td>
                <td><a href="http://www.gfi.fr/">INSERM u703</a></td>
                <td>Interface logicielle entre DCMTK et la plateforme de l'unité</td>
              </tr>
            </table>
          </div>
          </br>
          </br>

          <h2> Activités personnelles </h2>
          <ul class="activite">
            <li> Un peu de concentration et de précision avec le tir à l'arc </li>
            <li> Je m'intéresse à tout et ne demande qu'à découvrir </li>
            <li> J'apprécie beaucoup les jeux vidéo </li>
          </ul>
        </section>

        <?php include("liens.php") ?>

      </div>

      <?php include("pied.php") ?>
    </body>

</html>
