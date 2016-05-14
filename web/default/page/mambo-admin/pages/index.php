<?php
session_start();

if($_SESSION['autorize'] != "allowedtoconnect"){
	header('location: ../../../../403.php');
}
else { 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        Administrateur 
    </title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php
// connection bdd
   include('bdd.php');
   $query = 'SELECT * FROM `user`;';
$query2 = 'SELECT * FROM `admin`;';
$arr = $bdd->query($query)->fetch();
$administr = $bdd->query($query2)->fetch();
$finish = 'SELECT COUNT(*) FROM `user` WHERE `progression` = 12;';
$finish = $bdd->query($finish)->fetchColumn();
$notifLivre = "SELECT COUNT(*) FROM `etape` WHERE `etape_ID` = 'Livre' AND `notif` = 1;";
$notifLivre = $bdd->query($notifLivre)->fetchColumn();
$notifChien = "SELECT COUNT(*) FROM `etape` WHERE `etape_ID` = 'Chien' AND `notif` = 1;";
$notifChien = $bdd->query($notifChien)->fetchColumn();
   $selEtape = "SELECT * FROM `etape` WHERE `etape_ID` = 'Lapin' OR `etape_ID` = 'Livre' OR `etape_ID` = 'Chien';";
   $selEtape = $bdd->query($selEtape);
   ?>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">>Bonjour <?php echo $administr['login']; ?></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
             
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <img src="../dist/img/lapin.png" />Nouvelle recette
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="notif.php?etape=chien">
                                <div>
                                   <img src="../dist/img/chien.png" /> <?php if($notifChien == 0){ echo "Pas de notification"; } else { echo $notifChien; ?> Nouveaux portraits <?php } ?>
                                </div>
                            </a>
                        </li>
						
						
                        <li class="divider"></li>
                        <li>
                            <a href="notif.php?etape=livre">
                                <div>
                                    <img src="../dist/img/livre.png" /><?php if($notifLivre == 0){ echo "Pas de notification"; } else { echo $notifLivre; ?> nouvelles fins d'histoires <?php } ?>
                                </div>
                            </a>
                        </li>
						
                        <li class="divider"></li>
						
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-trophy"></i> <?php echo $finish; ?> utilisateurs ont complété le dispositif !
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Relancé
                                    <span class="pull-right text-muted small">(echo date) </span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Réglages </a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="deconnexion.php"><i class="fa fa-sign-out fa-fw"></i> se deconnecter </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Tableau de bord</a>
                        </li>
                        
                        <li>
                            <a href="tables.php"><i class="fa fa-table fa-fw"></i> Base de donnée</a>
                        </li>
                        
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tableau de bord Administrateur</h1>
                </div>
                <!-- /.col-lg-12 -->
                </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Derniers ajouts de contenu
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <?php while($step = $selEtape->fetch()){
									echo '
									<a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> '. $step['value'] .'
                                    <span class="pull-right text-muted small"><em>'. $step['Date'] .' </em>
                                    </span>
                                </a>';
								} 
								?>
								
                                
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small"><em>11:32</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                                    <span class="pull-right text-muted small"><em>11:13</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-warning fa-fw"></i> Server Not Responding
                                    <span class="pull-right text-muted small"><em>10:57</em>
                                    </span>
                                </a>
                                
                            </div>
                            <!-- /.list-group -->
                            <a href="./notifications.html" class="btn btn-danger">Voir le rapport</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    
                    </div>
                </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Connections cette semaine
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="connect_stats"> <h1> En php nb de co + infos autres</h1></div>
                        </div>
                        <!-- /.panel-body -->
                    </div> 
                            </div>
            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                   
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                
            </div>
            <!-- /.row -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

 <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

 <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
<?php } ?>
