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
          <div class="table-responsive">
            <table>
              <tr>
                <td class="col-lg-2"> Langages </td>
                <td class="col-lg-2 competence" style="background-color : rgb(0, 119, 185)"><a href="http://www.oracle.com/technetwork/java/index.html"> Java/J2EE </a></td>
                <td class="col-lg-2 competence" style="background-color : rgb(102, 154, 211)"><a href="https://isocpp.org/"> C/C++ </a></td>
              </tr>

              <tr>
                <td class="col-lg-2"> Bibliothèques </td>
                <td class="col-lg-2 competence" style="background-color : rgb(0, 200, 0)"><a href="http://opencv.org/"> openCV </a></td>
                <td class="col-lg-2 competence" style="background-color : rgb(67, 121, 56)"><a href="http://pointclouds.org/"> PCL </a></td>
                <td class="col-lg-2 competence" style="background-color : rgb(103, 137, 165)"><a href="https://www.opengl.org/"> openGL </a></td>
              </tr>

              <tr>
                <td class="col-lg-2"> 3D </td>
                <td class="col-lg-2 competence" style="background-color : rgb(233, 30, 99)"><a href="https://unity3d.com/"> Unity3D </a></td>
              </tr>

              <tr>
                <td class="col-lg-2"> EDI </td>
                <td class="col-lg-2 competence" style="background-color : rgb(44, 34, 85)"><a href="http://www.eclipse.org/home/index.php"> Eclipse </a></td>
                <td class="col-lg-2 competence" style="background-color : rgb(103, 32, 121)"><a href="https://www.visualstudio.com/"> Visual studio </a></td>
                <td class="col-lg-2 competence" style="background-color : rgb(125, 125, 125)"><a href="http://www.codeblocks.org/"> Code::block </a></td>
              </tr>

              <tr>
                <td class="col-lg-2"> Autre </td>
                <td class="col-lg-2 competence" style="background-color : rgb(0, 128, 128)"><a href="http://www.latex-project.org/"> Latex </a></td>
              </tr>
            </table>
          </div>

        </section>
        <?php include("liens.php") ?>
      </div>

      <?php include("pied.php") ?>
    </body>
</html>
