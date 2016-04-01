<title><?php echo $titre ?></title>
</head>

<body>
<div class="container-fluid">
    <header class="row">
        <nav id="mambo-topmenu" class="col-md-7">
            <ul class="list-inline">
                <li>
                    <div id="mambo-burger">
                        <!-- menu burger -->
                        <div class="dropdown">
                            <a href="#" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="../default/page/img/burger.png" title="burger">

                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dLabel">
                                <div id="mambo-topdropdown" class="col-md-12">
                                    <li class="col-md-6"><a href="#">HOME</a></li>
                                    <li class="col-md-6"><a href="#">Profil</a></li>
                                </div>
                                <div id="mambo-botdropdown">
                                    <li class="col-md-12"><a href="#">Etape précédente</a></li>
                                    <li class="col-md-12"><a href="#">Etape actuelle</a></li>
                                    <li class="col-md-12"><a href="#">Etape suivante</a></li>
                                </div>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div id="mambo-icone">
                        <!-- icone de l'étape -->
                        <img src="../default/page/img/<?php echo $icone; ?>">
                    </div>
                </li>
                <li>
                    <div id="mambo-consigne">
                        <!-- titre/consigne de l'étape-->
                        <h1><?php echo $titre ?></h1>
                    </div>
                </li>
            </ul>
        </nav>
    </header>