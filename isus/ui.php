<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Simple Responsive Admin</title>
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
                  <a href="#" style="color:#fff;">LOGOUT</a>  

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
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>gerenciamento de usuarios</h2>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr/>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <h5>Cadastro de Usuario</h5>
                    <form method="post" action="manterpaciente.php" role="form">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-pencil-square-o "></i></span>
                            <input type="text" class="form-control" name="sus" placeholder="Digite o sus"/>
                        </div>
                        <br/>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-pencil-square-o "></i></span>
                            <input type="text" class="form-control" name="nome" placeholder="nome do usuario"/>
                        </div>
                        <br/>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-pencil-square-o "></i></span>
                            <input type="text" class="form-control" name="rua" placeholder="digite o enderço do usuário"/>
                        </div>
                        <br/>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar-o "></i></span>
                            <input type="date" class="form-control" name="data" placeholder="Data de nascimento"/>
                        </div>
                        <br/>


                        <div class="form-group">

                            <span class="input-group-addon"><i class="fa "><label
                                        for="dia">Diabetico?</label></i></span>
                            <select class="form-control" id="dia" name="dia">
                                <option value="SIM">Sim</option>
                                <option value="NAO">Não</option>

                            </select>

                        </div>


                        <br/>

                        <div class="form-group">
                            <span class="input-group-addon"><i class="fa "><label
                                        for="ha">Hipertenso?</label></i></span>
                            <select class="form-control" id="ha" name="ha">
                                <option value="SIM">Sim</option>
                                <option value="NAO">Não</option>

                            </select>
                        </div>
                        <br/>


                        <div class="form-group">
                            <span class="input-group-addon"><i class="fa "> <label
                                        for="mental">Mental?</label></i></span>
                            <select class="form-control" id="mental" name="mental">
                                <option value="SIM">Sim</option>
                                <option value="NAO">Não</option>

                            </select>
                        </div>
                        <br/>

                        <div class="form-group">
                            <span class="input-group-addon"><i class="fa ">  <label for="sexo">Sexo?</label></i></span>
                            <select class="form-control" id="sexo" name="sexo">
                                <option value="M">Masculino</option>
                                <option value="F">Feminino</option>

                            </select>
                        </div>
                        <br/>
                        <div class="form-group">
                                    <span class="input-group-addon"><i class="fa  ">  <label
                                                for="acamado">Acamado</label></i></span>
                            <select class="form-control" id="acamado" name="acamado">
                                <option value="SIM">Sim</option>
                                <option value="NAO">Não</option>

                            </select>
                        </div>
                        <br/>
                        <div class="form-group">
                                    <span class="input-group-addon"><i class="fa  ">  <label
                                                for="remedio">Tratamento</label></i></span>
                            <select class="form-control" id="remedio" name="remedio">
                                <option value="SIM">Sim</option>
                                <option value="NAO">Não</option>

                            </select>
                        </div>
                        <br/>
                        <button type="submit" name="button" VALUE="cadastrar" class="btn btn-primary btn-block">
                            Cadastrar
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-lg-20 col-md-20">
                <h5>Busca Rapida</h5>
                <a href="ha.php" name="ha" target="InlineFrame1" class="btn btn-default">Hipertensos</a>
                <a href="dia.php" name="dia" target="InlineFrame1" class="btn btn-primary">Diabeticos</a>
                <a href="gest.php" name="gest" target="InlineFrame1" class="btn btn-danger">Gestantes</a>
                <a href="2.php" name="-2" target="InlineFrame1" class="btn btn-success">-2 anos</a>
                <a href="5.php" name="-5" target="InlineFrame1" class="btn btn-info">-5 anos</a>
                <a href="mental.php" name="mental" target="InlineFrame1" class="btn btn-warning">Mentais</a>
                <br>
                <br>
                <div class="col-lg-20 col-md-20">
                    <h5>Resultado busca rapida</h5>
                    <div class="table table-striped table-bordered table-hover">
                        <iframe name="InlineFrame1" id="InlineFrame1" src="ha.php" frameborder="1"
                                class="table table-striped table-bordered table-hover"></iframe>
                        <!--                            <table class="table">-->
                        <!--                                <thead>-->
                        <!--                                <tr>-->
                        <!--                                    <th>#</th>-->
                        <!--                                    <th>First Name</th>-->
                        <!--                                    <th>Last Name</th>-->
                        <!--                                    <th>Username</th>-->
                        <!--                                </tr>-->
                        <!--                                </thead>-->
                        <!--                                <tbody>-->
                        <!--                                <tr class="success">-->
                        <!--                                    <td>1</td>-->
                        <!--                                    <td>Mark</td>-->
                        <!--                                    <td>Otto</td>-->
                        <!--                                    <td>@mdo</td>-->
                        <!--                                </tr>-->
                        <!--                                <tr class="info">-->
                        <!--                                    <td>2</td>-->
                        <!--                                    <td>Jacob</td>-->
                        <!--                                    <td>Thornton</td>-->
                        <!--                                    <td>@fat</td>-->
                        <!--                                </tr>-->
                        <!--                                <tr class="warning">-->
                        <!--                                    <td>3</td>-->
                        <!--                                    <td>Larry</td>-->
                        <!--                                    <td>the Bird</td>-->
                        <!--                                    <td>@twitter</td>-->
                        <!--                                </tr>-->
                        <!--                                <tr class="danger">-->
                        <!--                                    <td>4</td>-->
                        <!--                                    <td>John</td>-->
                        <!--                                    <td>Smith</td>-->
                        <!--                                    <td>@jsmith</td>-->
                        <!--                                </tr>-->
                        <!--                                </tbody>-->
                        <!--                            </table>-->
                    </div>
                </div class="col-lg-30 col-md-30">


            </div>

        </div>
        <!-- /. ROW  -->
        <hr>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="form-group">
                    <label>Text Input Example</label>
                    <input class="form-control"/>
                    <p class="help-block">Help text here.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <label>Click to see blank page</label>
                <a href="busca.php" target="_blank" class="btn btn-danger btn-lg btn-block">BLANK PAGE</a>
            </div>

        </div>
        <hr>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h5>Table Sample One</h5>
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>

            </div>

        </div>
        <!-- /. ROW  -->
        <hr>


        <div class="row">
            <div class="col-lg-4 col-md-4">
                <h5>Panel Sample</h5>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Default Panel
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae
                            ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla
                            augue.</p>
                    </div>
                    <div class="panel-footer">
                        Panel Footer
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <h5>Accordion Sample</h5>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                   class="collapsed">Collapsible Group Item #1</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Collapsible
                                    Group Item #2</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt.

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                   class="collapsed">Collapsible Group Item #3</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">


                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <h5>Tabs Sample</h5>
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab">Home</a>
                    </li>
                    <li class=""><a href="#profile" data-toggle="tab">Profile</a>
                    </li>
                    <li class=""><a href="#messages" data-toggle="tab">Messages</a>
                    </li>

                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="home">
                        <h4>Home Tab</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est
                            laborum.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est
                            laborum.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est
                            laborum.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="profile">
                        <h4>Profile Tab</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est
                            laborum.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est
                            laborum.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est
                            laborum.
                        </p>

                    </div>
                    <div class="tab-pane fade" id="messages">
                        <h4>Messages Tab</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est
                            laborum.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est
                            laborum.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est
                            laborum.
                        </p>

                    </div>

                </div>
            </div>

        </div>
        <!-- /. ROW  -->
        <hr/>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h5>Information</h5>
                This is a type of bare admin that means you can customize your own admin using this admin structured
                template . For More Examples of bootstrap elements or components please visit official bootstrap
                website <a href="http://getbootstrap.com" target="_blank">getbootstrap.com</a>
                . And if you want full template please download <a
                    href="http://www.binarytheme.com/bootstrap-free-admin-dashboard-template/" target="_blank">FREE
                    BCORE ADMIN </a>&nbsp;,&nbsp; <a
                    href="http://www.binarytheme.com/free-bootstrap-admin-template-siminta/" target="_blank">FREE
                    SIMINTA ADMIN</a> and <a href="http://binarycart.com/" target="_blank">FREE BINARY ADMIN</a>.

            </div>
        </div>
        <!-- /. ROW  -->

    </div>
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<div class="footer">


    <div class="row">
        <div class="col-lg-12">
            &copy; 2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;"
                                                       target="_blank">www.binarytheme.com</a>
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
