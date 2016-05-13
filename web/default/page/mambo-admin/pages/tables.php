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

    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
   // include('bdd.php');

try {
    $strConnection = 'mysql:host=localhost;dbname=mambo;'; //Ligne 1
    $arrExtraParam= array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"); //Ligne 2
    $pdo = new PDO($strConnection, 'root', '', $arrExtraParam); //Ligne 3; Instancie la connexions
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Ligne 4
}
catch(PDOException $e) {
    $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
    die($msg);
}

$query = 'SELECT * FROM user;';
$query2 = 'SELECT * FROM user;';
$arr = $pdo->query($query)->fetch();

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
                <a class="navbar-brand" href="index.html"> Admin 1 : <?php echo $arr['iduser']; ?> </a>
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
                                    <span class="pull-right text-muted small">(echo date)</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                   <img src="../dist/img/lapin.png" /> 3 Nouveaux portraits
                                    <span class="pull-right text-muted small">(echo date) </span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <img src="../dist/img/lapin.png" /> Nouvelle Fin d'histoire
                                    <span class="pull-right text-muted small">(echo date) </span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-trophy"></i> (echo ID) a fini les étapes !
                                    <span class="pull-right text-muted small">(echo date) </span>
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
                            <a href="index.php"><i class="fa fa-bar-chart-o fa-fw"></i> Statistiques <span class="fa arrow"></span></a>
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
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tableau des utilisateurs
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">



<?php


$req = $pdo->query('SELECT * FROM `user`');



echo "<div class='dataTable_wrapper'>
                                <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Mot de passe</th>
                                            <th>Icone image</th>
                                            <th>Etape courante</th>
                                            <th>Supprimer</th>
                                        </tr>
                                    </thead>";

    while($donnees = $req->fetch()){

    echo "<tbody>";
	$user = $donnees['iduser'];
                                   echo "<tr class='odd gradeX'>";
                                            echo "<td>".$donnees['iduser']."</td>";
                                            echo "<td>".$donnees['password']."</td>";
                                            echo "<td><img src='../../../../profil/avatar/".$donnees['img_avatar']."' alt='avatar' width='100px' class='img-responsive'/></td>";
                                            echo "<td>".$donnees['current_etape']."</td>";
                                            echo "<td><div onclick='confirmSupr($user);' class='btn btn-danger'>
                                            <i class='fa fa-trash' aria-hidden='true'></i></div></td>";
                                   echo "</tr>";      
     echo "</tbody>";}
     ?>
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
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

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
		
    });
	

		function confirmSupr(variable){
			if (confirm("Voulez vous vraiment supprimer l'utilisateur " + variable + " ?"))
			{ 
				var user = variable;
			
			window.location.href = "supr.php?user="+user;
			}
		}
    </script>
	
</body>

</html>
