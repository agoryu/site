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

        <section class="col-lg-offset-1 col-lg-6">
          <p id="intro">
            <!--Je suis actuellement étudiant en master 2 à l'université de Lille 1 en informatique,
            spécialisé dans l'image, la vision et l'interaction. J'ai obtenu un DUT
            en informatique de gestion en 2013 à l'IUT A de Lille 1.-->
            Je suis actuellement étudiant en master 2 à l'université de Lille 1 en informatique,
            spécialisé dans l'image, la vision et l'interaction. Je m'intéresse particulièrement
            aux traitements d'image et aux images 3D. Ma première ambition était de partir dans
            le monde du jeux vidéo. Puis, le traitement d'image 3D et ses applications m'ont beaucoup
            plu, c'est pourquoi j'aimerais continuer à étudier ce sujet lors d'une thèse.
          </p>

          <h2> Experience professionnelle </h2>

          <table class="table table-striped">
            <tr>
              <td>Année</td>
              <td>Lieux</td>
              <td>Projet</td>
            </tr>
            <tr>
              <td>Octobre 2015 - Février 2016</td>
              <td>3D Sam</td>
              <td>Détection, suivi et animation de la main dans une scène 3D</td>
            </tr>
            <tr>
              <td>Janvier - Avril 2015</td>
              <td>Fox</td>
              <td>Localisation du centre de l'oeil dans le visage</td>
            </tr>
            <tr>
              <td>Avril - Aout 2014</td>
              <td>Gfi</td>
              <td>Développeur Java/JEE</td>
            </tr>
            <tr>
              <td>Avril - Juillet 2013</td>
              <td>INSERM u703</td>
              <td>Interface logicielle entre DCMTK et la plateforme de l'unité</td>
            </tr>
          </table>
        </section>

        <?php include("liens.php") ?>

      </div>

      <?php include("pied.php") ?>
    </body>

</html>
