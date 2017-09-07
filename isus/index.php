<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php session_start();
    $_SESSION['user'];
    ?>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<!--   ceo -->
    <title> ISUS - sitema sus - esus</title>
    <meta name="description"
          content="sistema criado para auxiliar acs no cadastro, consulta e edição de dados de usuários do sus de suas respectivas areas"/>
    <meta name="keywords" content="acs, sus, usuarios, cadastro, saude,"/>
    <meta name="robots" content="index, follow">

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet"/>
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet"/>
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
</head>
<body>


<div id="wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="adjust-nav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo.png" width="100" height="50"/>

                </a>

            </div>
              
                <span class="logout-spn">
                  <a href="#" style="color:#fff;"><?php echo $_SESSION['user']; ?></a>

                </span>
        </div>
    </div>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">


                <li class="active-link">
                    <a href="index.php"><i class="fa fa-desktop "></i>Inicio <span class="badge">Included</span></a>
                </li>


                <li>
                    <a href="ui.php"><i class="fa fa-sign-in "></i>Cadastro <span class="badge">Included</span></a>
                </li>
                <li>
                    <a href="busca.php"><i class="fa fa-search "></i>Busca <span class="badge">Included</span></a>
                </li>


                <!--                    <li>-->
                <!--                        <a href="#"><i class="fa fa-qrcode "></i>My Link One</a>-->
                <!--                    </li>-->
                <!--                    <li>-->
                <!--                        <a href="#"><i class="fa fa-bar-chart-o"></i>My Link Two</a>-->
                <!--                    </li>-->
                <!---->
                <!--                    <li>-->
                <!--                        <a href="#"><i class="fa fa-edit "></i>My Link Three </a>-->
                <!--                    </li>-->
                <!--                    <li>-->
                <!--                        <a href="#"><i class="fa fa-table "></i>My Link Four</a>-->
                <!--                    </li>-->
                <!--                     <li>-->
                <!--                        <a href="#"><i class="fa fa-edit "></i>My Link Five </a>-->
                <!--                    </li>-->

            </ul>
        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">

        <?php

        if (isset($_SESSION["user"])) {
            include "conteudo.html";


        } else {

            include "form_login.html";
        }

        ?>

        <!-- /. PAGE WRAPPER  -->

    </div>
    <div class="footer">


        <div class="row">
            <div class="col-lg-12">
                &copy; 2017<a href="www.Facebook.com/mbtecnologie" style="color:#fff;" target="_blank">
                    Facebook.com/mbtecnologie | Design by: www.binarytheme.com</a>
            </div>
        </div>
    </div>


    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
