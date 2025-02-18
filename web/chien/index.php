<?php include( '../default/page/start_header.php' ); ?>
<!-- Place en dessous ton CSS dans Vendor, et ton CSS local -->

<link rel="stylesheet" type="text/css" href="style.css">
<!-- fin CSS -->

<?php include( '../default/page/header.php' ); ?>


<!-- Place ici tes scripts Javascripts dans Vendor, et ton JS local -->
<script type="text/javascript" src="../../vendor/jquery-2.2.1/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="html2canvas.js"></script>

<script type="text/javascript">

    $(document).ready(function () {

        // Masque les portraits
        $('.slider').hide();
        // Affiche le portrait 1
        $('.slider:nth(0)').show();

        $('#boutton').click(function () {
            // HEnry
            $('#slider_henry').fadeIn(400,function(){
                $('#slider_henry a').hide();
                html2canvas([document.getElementById('slider_henry')], {
                    onrendered: function (canvas) {
                        var canvasData = canvas.toDataURL();
                        $('#slider_henry a').show();
                        window.open(canvas.toDataURL());
                    }
                });    
            }).fadeOut(400,function() {
                $('#slider_simao').fadeIn(400,function(){
                    $('#slider_simao a').hide();
                    html2canvas([document.getElementById('slider_simao')], {
                        onrendered: function (canvas) {
                            var canvasData = canvas.toDataURL();
                            $('#slider_simao a').show();
                            window.open(canvas.toDataURL());
                        }
                    });        
                }).fadeOut(400,function(){
                    $('#slider_alejandro').fadeIn(400,function(){
                        $('#slider_alejandro a').hide();
                        html2canvas([document.getElementById('slider_alejandro')], {
                        onrendered: function (canvas) {
                            var canvasData = canvas.toDataURL();
                            $('#slider_alejandro a').show();
                            window.open(canvas.toDataURL());
                        }
                    });
                        
                    }).fadeOut(400,function(){
                        // bascule page galerie
                    });
                });
                
            });
            
            
        // Simao
            
            
        // Alejandro
            
        });

        // Bascule affichage portraits
        $('.slider-active-btn').on('click', function () {
            var id = $(this).attr('id');
            console.log(id);
            $('.slider').hide();
            $('#slider_' + id).show();
        });
    });

</script>
<!-- Fin Scripts -->


<?php include( '../default/page/end_header.php' ); ?>
<!-- Place ici ton contenu -->


<body id="chien">
<!-- portraits -->
<div id="portraits" class="">

    <div class="slider-active-btn" id="henry">
        <img class="img-responsive" src="img/henry.png"/>
    </div>
    <div class="slider-active-btn" id="simao">
        <img class="img-responsive" src="img/simao.png"/>
    </div>
    <div class="slider-active-btn" id="alejandro">
        <img class="img-responsive" src="img/alejandro.png"/>
    </div>

</div>

<!-- SLIDER DES TETES -->
<div class="col-md-offset-4 col-md-3 slider" id="slider_henry">

    <!--Cheveux-->
    <div class="" id="slider_henry_1">
        <div id="cheveux" class="carousel slide" data-pause="pause">
            <!-- Indicators -->
            <ol class="pas_defini">
                <li data-target="#cheveux" data-slide-to="0"></li>
                <li data-target="#cheveux" data-slide-to="1"></li>
                <li data-target="#cheveux" data-slide-to="2"></li>
                <li data-target="#cheveux" data-slide-to="3"></li>
                <li data-target="#cheveux" data-slide-to="4"></li>
                <li data-target="#cheveux" data-slide-to="5"></li>
                <li data-target="#cheveux" data-slide-to="6"></li>
                <li data-target="#cheveux" data-slide-to="7"></li>
                <li data-target="#cheveux" data-slide-to="8"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/Cheveux/C_1.png" alt="C_1">
                </div>

                <div class="item">
                    <img src="img/Cheveux/C_2.png" alt="C_2">
                </div>

                <div class="item">
                    <img src="img/Cheveux/C_3.png" alt="C_3">
                </div>

                <div class="item">
                    <img src="img/Cheveux/C_4.png" alt="C_4">
                </div>

                <div class="item">
                    <img src="img/Cheveux/C_5.png" alt="C_5">
                </div>

                <div class="item">
                    <img src="img/Cheveux/C_6.png" alt="C_6">
                </div>

                <div class="item">
                    <img src="img/Cheveux/C_7.png" alt="C_7">
                </div>

                <div class="item">
                    <img src="img/Cheveux/C_8.png" alt="C_8">
                </div>

                <div class="item">
                    <img src="img/Cheveux/C_9.png" alt="C_9">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#cheveux" role="button" data-slide="prev">
                <span class="sr-only">Precedent</span>
            </a>
            <a class="right carousel-control" href="#cheveux" role="button" data-slide="next">
                <span class="sr-only">Suivant</span>
            </a>
        </div>
    </div>

    <!--Yeux-->
    <div class="" id="slider_henry_2">
        <div id="Yeux" class="carousel slide" data-pause="pause">
            <!-- Indicators -->
            <ol class="pas_defini">
                <li data-target="#Yeux" data-slide-to="0"></li>
                <li data-target="#Yeux" data-slide-to="1"></li>
                <li data-target="#Yeux" data-slide-to="2"></li>
                <li data-target="#Yeux" data-slide-to="3"></li>
                <li data-target="#Yeux" data-slide-to="4"></li>
                <li data-target="#Yeux" data-slide-to="5"></li>
                <li data-target="#Yeux" data-slide-to="6"></li>
                <li data-target="#Yeux" data-slide-to="7"></li>
                <li data-target="#Yeux" data-slide-to="8"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/Yeux/Y_1.png" alt="Y_1">
                </div>

                <div class="item">
                    <img src="img/Yeux/Y_2.png" alt="Y_2">
                </div>

                <div class="item">
                    <img src="img/Yeux/Y_3.png" alt="Y_3">
                </div>

                <div class="item">
                    <img src="img/Yeux/Y_4.png" alt="Y_4">
                </div>

                <div class="item">
                    <img src="img/Yeux/Y_5.png" alt="Y_5">
                </div>

                <div class="item">
                    <img src="img/Yeux/Y_6.png" alt="Y_6">
                </div>

                <div class="item">
                    <img src="img/Yeux/Y_7.png" alt="Y_7">
                </div>

                <div class="item">
                    <img src="img/Yeux/Y_8.png" alt="Y_8">
                </div>

                <div class="item">
                    <img src="img/Yeux/Y_9.png" alt="Y_9">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#Yeux" role="button" data-slide="prev">
                <span class="sr-only">Precedent</span>
            </a>
            <a class="right carousel-control" href="#Yeux" role="button" data-slide="next">
                <span class="sr-only">Suivant</span>
            </a>
        </div>
    </div>

    <!--Nez-->
    <div class="" id="slider_henry_3">
        <div id="Nez" class="carousel slide" data-pause="pause">
            <!-- Indicators -->
            <ol class="pas_defini">
                <li data-target="#Nez" data-slide-to="0"></li>
                <li data-target="#Nez" data-slide-to="1"></li>
                <li data-target="#Nez" data-slide-to="2"></li>
                <li data-target="#Nez" data-slide-to="3"></li>
                <li data-target="#Nez" data-slide-to="4"></li>
                <li data-target="#Nez" data-slide-to="5"></li>
                <li data-target="#Nez" data-slide-to="6"></li>
                <li data-target="#Nez" data-slide-to="7"></li>
                <li data-target="#Nez" data-slide-to="8"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/Nez/N_1.png" alt="N_1">
                </div>

                <div class="item">
                    <img src="img/Nez/N_2.png" alt="N_2">
                </div>

                <div class="item">
                    <img src="img/Nez/N_3.png" alt="N_3">
                </div>

                <div class="item">
                    <img src="img/Nez/N_4.png" alt="N_4">
                </div>

                <div class="item">
                    <img src="img/Nez/N_5.png" alt="N_5">
                </div>

                <div class="item">
                    <img src="img/Nez/N_6.png" alt="N_6">
                </div>

                <div class="item">
                    <img src="img/Nez/N_7.png" alt="N_7">
                </div>

                <div class="item">
                    <img src="img/Nez/N_8.png" alt="N_8">
                </div>

                <div class="item">
                    <img src="img/Nez/N_9.png" alt="N_9">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#Nez" role="button" data-slide="prev">
                <span class="sr-only">Precedent</span>
            </a>
            <a class="right carousel-control" href="#Nez" role="button" data-slide="next">
                <span class="sr-only">Suivant</span>
            </a>
        </div>
    </div>

    <!--Bouche-->
    <div class="" id="slider_henry_4">
        <div id="Bouche" class="carousel slide" data-pause="pause">
            <!-- Indicators -->
            <ol class="pas_defini">
                <li data-target="#Bouche" data-slide-to="0"></li>
                <li data-target="#Bouche" data-slide-to="1"></li>
                <li data-target="#Bouche" data-slide-to="2"></li>
                <li data-target="#Bouche" data-slide-to="3"></li>
                <li data-target="#Bouche" data-slide-to="4"></li>
                <li data-target="#Bouche" data-slide-to="5"></li>
                <li data-target="#Bouche" data-slide-to="6"></li>
                <li data-target="#Bouche" data-slide-to="7"></li>
                <li data-target="#Bouche" data-slide-to="8"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/Bouche/B_1.png" alt="B_1">
                </div>

                <div class="item">
                    <img src="img/Bouche/B_2.png" alt="B_2">
                </div>

                <div class="item">
                    <img src="img/Bouche/B_3.png" alt="B_3">
                </div>

                <div class="item">
                    <img src="img/Bouche/B_4.png" alt="B_4">
                </div>

                <div class="item">
                    <img src="img/Bouche/B_5.png" alt="B_5">
                </div>

                <div class="item">
                    <img src="img/Bouche/B_6.png" alt="B_6">
                </div>

                <div class="item">
                    <img src="img/Bouche/B_7.png" alt="B_7">
                </div>

                <div class="item">
                    <img src="img/Bouche/B_8.png" alt="B_8">
                </div>

                <div class="item">
                    <img src="img/Bouche/B_9.png" alt="B_9">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#Bouche" role="button" data-slide="prev">
                <span class="sr-only">Precedent</span>
            </a>
            <a class="right carousel-control" href="#Bouche" role="button" data-slide="next">
                <span class="sr-only">Suivant</span>
            </a>
        </div>
    </div>

    <!--Menton-->
    <div class="" id="slider_henry_5">
        <div id="Menton" class="carousel slide" data-pause="pause">
            <!-- Indicators -->
            <ol class="pas_defini">
                <li data-target="#Menton" data-slide-to="0"></li>
                <li data-target="#Menton" data-slide-to="1"></li>
                <li data-target="#Menton" data-slide-to="2"></li>
                <li data-target="#Menton" data-slide-to="3"></li>
                <li data-target="#Menton" data-slide-to="4"></li>
                <li data-target="#Menton" data-slide-to="5"></li>
                <li data-target="#Menton" data-slide-to="6"></li>
                <li data-target="#Menton" data-slide-to="7"></li>
                <li data-target="#Menton" data-slide-to="8"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/Menton/M_1.png" alt="M_1">
                </div>

                <div class="item">
                    <img src="img/Menton/M_2.png" alt="M_2">
                </div>

                <div class="item">
                    <img src="img/Menton/M_3.png" alt="M_3">
                </div>
                <div class="item">
                    <img src="img/Menton/M_4.png" alt="M_4">
                </div>

                <div class="item">
                    <img src="img/Menton/M_5.png" alt="M_5">
                </div>

                <div class="item">
                    <img src="img/Menton/M_6.png" alt="M_6">
                </div>
                <div class="item">
                    <img src="img/Menton/M_7.png" alt="M_7">
                </div>

                <div class="item">
                    <img src="img/Menton/M_8.png" alt="M_8">
                </div>

                <div class="item">
                    <img src="img/Menton/M_9.png" alt="M_9">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#Menton" role="button" data-slide="prev">
                <span class="sr-only">Precedent</span>
            </a>
            <a class="right carousel-control" href="#Menton" role="button" data-slide="next">
                <span class="sr-only">Suivant</span>
            </a>

        </div>
    </div>

</div>

<!-- SLIDER DES TETES -->
<div class="col-md-offset-4 col-md-3 slider" id="slider_simao">

    <!--Cheveux-->
    <div id="slider_simao_1">
        <div id="slider_simao_cheveux" class="carousel slide" data-pause="pause">
            <!-- Indicators -->
            <ol class="pas_defini">
                <li data-target="#slider_simao_cheveux" data-slide-to="0"></li>
                <li data-target="#slider_simao_cheveux" data-slide-to="1"></li>
                <li data-target="#slider_simao_cheveux" data-slide-to="2"></li>
                <li data-target="#slider_simao_cheveux" data-slide-to="3"></li>
                <li data-target="#slider_simao_cheveux" data-slide-to="4"></li>
                <li data-target="#slider_simao_cheveux" data-slide-to="5"></li>
                <li data-target="#slider_simao_cheveux" data-slide-to="6"></li>
                <li data-target="#slider_simao_cheveux" data-slide-to="7"></li>
                <li data-target="#slider_simao_cheveux" data-slide-to="8"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/Cheveux/C_1.png" alt="C_1">
                </div>

                <div class="item">
                    <img src="img/Cheveux/C_2.png" alt="C_2">
                </div>

                <div class="item">
                    <img src="img/Cheveux/C_3.png" alt="C_3">
                </div>

                <div class="item">
                    <img src="img/Cheveux/C_4.png" alt="C_4">
                </div>

                <div class="item">
                    <img src="img/Cheveux/C_5.png" alt="C_5">
                </div>

                <div class="item">
                    <img src="img/Cheveux/C_6.png" alt="C_6">
                </div>

                <div class="item">
                    <img src="img/Cheveux/C_7.png" alt="C_7">
                </div>

                <div class="item">
                    <img src="img/Cheveux/C_8.png" alt="C_8">
                </div>

                <div class="item">
                    <img src="img/Cheveux/C_9.png" alt="C_9">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#slider_simao_cheveux" role="button" data-slide="prev">
                <span class="sr-only">Precedent</span>
            </a>
            <a class="right carousel-control" href="#slider_simao_cheveux" role="button" data-slide="next">
                <span class="sr-only">Suivant</span>
            </a>
        </div>
    </div>

    <!--Yeux-->
    <div id="slider_simao_2">
        <div id="slider_simao_yeux" class="carousel slide" data-pause="pause">
            <!-- Indicators -->
            <ol class="pas_defini">
                <li data-target="#slider_simao_yeux" data-slide-to="0"></li>
                <li data-target="#slider_simao_yeux" data-slide-to="1"></li>
                <li data-target="#slider_simao_yeux" data-slide-to="2"></li>
                <li data-target="#slider_simao_yeux" data-slide-to="3"></li>
                <li data-target="#slider_simao_yeux" data-slide-to="4"></li>
                <li data-target="#slider_simao_yeux" data-slide-to="5"></li>
                <li data-target="#slider_simao_yeux" data-slide-to="6"></li>
                <li data-target="#slider_simao_yeux" data-slide-to="7"></li>
                <li data-target="#slider_simao_yeux" data-slide-to="8"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/Yeux/Y_1.png" alt="Y_1">
                </div>

                <div class="item">
                    <img src="img/Yeux/Y_2.png" alt="Y_2">
                </div>

                <div class="item">
                    <img src="img/Yeux/Y_3.png" alt="Y_3">
                </div>

                <div class="item">
                    <img src="img/Yeux/Y_4.png" alt="Y_4">
                </div>

                <div class="item">
                    <img src="img/Yeux/Y_5.png" alt="Y_5">
                </div>

                <div class="item">
                    <img src="img/Yeux/Y_6.png" alt="Y_6">
                </div>

                <div class="item">
                    <img src="img/Yeux/Y_7.png" alt="Y_7">
                </div>

                <div class="item">
                    <img src="img/Yeux/Y_8.png" alt="Y_8">
                </div>

                <div class="item">
                    <img src="img/Yeux/Y_9.png" alt="Y_9">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#slider_simao_yeux" role="button" data-slide="prev">
                <span class="sr-only">Precedent</span>
            </a>
            <a class="right carousel-control" href="#slider_simao_yeux" role="button" data-slide="next">
                <span class="sr-only">Suivant</span>
            </a>
        </div>
    </div>

    <!--Nez-->
    <div id="slider_simao_3">
        <div id="slider_simao_nez" class="carousel slide" data-pause="pause">
            <!-- Indicators -->
            <ol class="pas_defini">
                <li data-target="#slider_simao_nez" data-slide-to="0"></li>
                <li data-target="#slider_simao_nez" data-slide-to="1"></li>
                <li data-target="#slider_simao_nez" data-slide-to="2"></li>
                <li data-target="#slider_simao_nez" data-slide-to="3"></li>
                <li data-target="#slider_simao_nez" data-slide-to="4"></li>
                <li data-target="#slider_simao_nez" data-slide-to="5"></li>
                <li data-target="#slider_simao_nez" data-slide-to="6"></li>
                <li data-target="#slider_simao_nez" data-slide-to="7"></li>
                <li data-target="#slider_simao_nez" data-slide-to="8"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/Nez/N_1.png" alt="N_1">
                </div>

                <div class="item">
                    <img src="img/Nez/N_2.png" alt="N_2">
                </div>

                <div class="item">
                    <img src="img/Nez/N_3.png" alt="N_3">
                </div>

                <div class="item">
                    <img src="img/Nez/N_4.png" alt="N_4">
                </div>

                <div class="item">
                    <img src="img/Nez/N_5.png" alt="N_5">
                </div>

                <div class="item">
                    <img src="img/Nez/N_6.png" alt="N_6">
                </div>

                <div class="item">
                    <img src="img/Nez/N_7.png" alt="N_7">
                </div>

                <div class="item">
                    <img src="img/Nez/N_8.png" alt="N_8">
                </div>

                <div class="item">
                    <img src="img/Nez/N_9.png" alt="N_9">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#slider_simao_nez" role="button" data-slide="prev">
                <span class="sr-only">Precedent</span>
            </a>
            <a class="right carousel-control" href="#slider_simao_nez" role="button" data-slide="next">
                <span class="sr-only">Suivant</span>
            </a>
        </div>
    </div>

    <!--Bouche-->
    <div id="slider_simao_4">
        <div id="slider_simao_bouche" class="carousel slide" data-pause="pause">
            <!-- Indicators -->
            <ol class="pas_defini">
                <li data-target="#slider_simao_bouche" data-slide-to="0"></li>
                <li data-target="#slider_simao_bouche" data-slide-to="1"></li>
                <li data-target="#slider_simao_bouche" data-slide-to="2"></li>
                <li data-target="#slider_simao_bouche" data-slide-to="3"></li>
                <li data-target="#slider_simao_bouche" data-slide-to="4"></li>
                <li data-target="#slider_simao_bouche" data-slide-to="5"></li>
                <li data-target="#slider_simao_bouche" data-slide-to="6"></li>
                <li data-target="#slider_simao_bouche" data-slide-to="7"></li>
                <li data-target="#slider_simao_bouche" data-slide-to="8"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/Bouche/B_1.png" alt="B_1">
                </div>

                <div class="item">
                    <img src="img/Bouche/B_2.png" alt="B_2">
                </div>

                <div class="item">
                    <img src="img/Bouche/B_3.png" alt="B_3">
                </div>

                <div class="item">
                    <img src="img/Bouche/B_4.png" alt="B_4">
                </div>

                <div class="item">
                    <img src="img/Bouche/B_5.png" alt="B_5">
                </div>

                <div class="item">
                    <img src="img/Bouche/B_6.png" alt="B_6">
                </div>

                <div class="item">
                    <img src="img/Bouche/B_7.png" alt="B_7">
                </div>

                <div class="item">
                    <img src="img/Bouche/B_8.png" alt="B_8">
                </div>

                <div class="item">
                    <img src="img/Bouche/B_9.png" alt="B_9">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#slider_simao_bouche" role="button" data-slide="prev">
                <span class="sr-only">Precedent</span>
            </a>
            <a class="right carousel-control" href="#slider_simao_bouche" role="button" data-slide="next">
                <span class="sr-only">Suivant</span>
            </a>
        </div>
    </div>

    <!--Menton-->
    <div id="slider_simao_5">
        <div id="slider_simao_menton" class="carousel slide" data-pause="pause">
            <!-- Indicators -->
            <ol class="pas_defini">
                <li data-target="#slider_simao_menton" data-slide-to="0"></li>
                <li data-target="#slider_simao_menton" data-slide-to="1"></li>
                <li data-target="#slider_simao_menton" data-slide-to="2"></li>
                <li data-target="#slider_simao_menton" data-slide-to="3"></li>
                <li data-target="#slider_simao_menton" data-slide-to="4"></li>
                <li data-target="#slider_simao_menton" data-slide-to="5"></li>
                <li data-target="#slider_simao_menton" data-slide-to="6"></li>
                <li data-target="#slider_simao_menton" data-slide-to="7"></li>
                <li data-target="#slider_simao_menton" data-slide-to="8"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/Menton/M_1.png" alt="M_1">
                </div>

                <div class="item">
                    <img src="img/Menton/M_2.png" alt="M_2">
                </div>

                <div class="item">
                    <img src="img/Menton/M_3.png" alt="M_3">
                </div>
                <div class="item">
                    <img src="img/Menton/M_4.png" alt="M_4">
                </div>

                <div class="item">
                    <img src="img/Menton/M_5.png" alt="M_5">
                </div>

                <div class="item">
                    <img src="img/Menton/M_6.png" alt="M_6">
                </div>
                <div class="item">
                    <img src="img/Menton/M_7.png" alt="M_7">
                </div>

                <div class="item">
                    <img src="img/Menton/M_8.png" alt="M_8">
                </div>

                <div class="item">
                    <img src="img/Menton/M_9.png" alt="M_9">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#slider_simao_menton" role="button" data-slide="prev">
                <span class="sr-only">Precedent</span>
            </a>
            <a class="right carousel-control" href="#slider_simao_menton" role="button" data-slide="next">
                <span class="sr-only">Suivant</span>
            </a>

        </div>
    </div>

</div>

<!-- SLIDER DES TETES -->
<div class="col-md-offset-4 col-md-3 slider" id="slider_alejandro">

    <!--Cheveux-->
    <div id="slider_alejandro_1">
        <div id="slider_alejandro_cheveux" class="carousel slide" data-pause="pause">
            <!-- Indicators -->
            <ol class="pas_defini">
                <li data-target="#slider_alejandro_cheveux" data-slide-to="0"></li>
                <li data-target="#slider_alejandro_cheveux" data-slide-to="1"></li>
                <li data-target="#slider_alejandro_cheveux" data-slide-to="2"></li>
                <li data-target="#slider_alejandro_cheveux" data-slide-to="3"></li>
                <li data-target="#slider_alejandro_cheveux" data-slide-to="4"></li>
                <li data-target="#slider_alejandro_cheveux" data-slide-to="5"></li>
                <li data-target="#slider_alejandro_cheveux" data-slide-to="6"></li>
                <li data-target="#slider_alejandro_cheveux" data-slide-to="7"></li>
                <li data-target="#slider_alejandro_cheveux" data-slide-to="8"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/Cheveux/C_1.png" alt="C_1">
                </div>

                <div class="item">
                    <img src="img/Cheveux/C_2.png" alt="C_2">
                </div>

                <div class="item">
                    <img src="img/Cheveux/C_3.png" alt="C_3">
                </div>

                <div class="item">
                    <img src="img/Cheveux/C_4.png" alt="C_4">
                </div>

                <div class="item">
                    <img src="img/Cheveux/C_5.png" alt="C_5">
                </div>

                <div class="item">
                    <img src="img/Cheveux/C_6.png" alt="C_6">
                </div>

                <div class="item">
                    <img src="img/Cheveux/C_7.png" alt="C_7">
                </div>

                <div class="item">
                    <img src="img/Cheveux/C_8.png" alt="C_8">
                </div>

                <div class="item">
                    <img src="img/Cheveux/C_9.png" alt="C_9">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#slider_alejandro_cheveux" role="button" data-slide="prev">
                <span class="sr-only">Precedent</span>
            </a>
            <a class="right carousel-control" href="#slider_alejandro_cheveux" role="button" data-slide="next">
                <span class="sr-only">Suivant</span>
            </a>
        </div>
    </div>

    <!--Yeux-->
    <div id="slider_alejandro_2">
        <div id="slider_alejandro_yeux" class="carousel slide" data-pause="pause">
            <!-- Indicators -->
            <ol class="pas_defini">
                <li data-target="#slider_alejandro_yeux" data-slide-to="0"></li>
                <li data-target="#slider_alejandro_yeux" data-slide-to="1"></li>
                <li data-target="#slider_alejandro_yeux" data-slide-to="2"></li>
                <li data-target="#slider_alejandro_yeux" data-slide-to="3"></li>
                <li data-target="#slider_alejandro_yeux" data-slide-to="4"></li>
                <li data-target="#slider_alejandro_yeux" data-slide-to="5"></li>
                <li data-target="#slider_alejandro_yeux" data-slide-to="6"></li>
                <li data-target="#slider_alejandro_yeux" data-slide-to="7"></li>
                <li data-target="#slider_alejandro_yeux" data-slide-to="8"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/Yeux/Y_1.png" alt="Y_1">
                </div>

                <div class="item">
                    <img src="img/Yeux/Y_2.png" alt="Y_2">
                </div>

                <div class="item">
                    <img src="img/Yeux/Y_3.png" alt="Y_3">
                </div>

                <div class="item">
                    <img src="img/Yeux/Y_4.png" alt="Y_4">
                </div>

                <div class="item">
                    <img src="img/Yeux/Y_5.png" alt="Y_5">
                </div>

                <div class="item">
                    <img src="img/Yeux/Y_6.png" alt="Y_6">
                </div>

                <div class="item">
                    <img src="img/Yeux/Y_7.png" alt="Y_7">
                </div>

                <div class="item">
                    <img src="img/Yeux/Y_8.png" alt="Y_8">
                </div>

                <div class="item">
                    <img src="img/Yeux/Y_9.png" alt="Y_9">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#slider_alejandro_yeux" role="button" data-slide="prev">
                <span class="sr-only">Precedent</span>
            </a>
            <a class="right carousel-control" href="#slider_alejandro_yeux" role="button" data-slide="next">
                <span class="sr-only">Suivant</span>
            </a>
        </div>
    </div>

    <!--Nez-->
    <div id="slider_alejandro_3">
        <div id="slider_alejandro_nez" class="carousel slide" data-pause="pause">
            <!-- Indicators -->
            <ol class="pas_defini">
                <li data-target="#slider_alejandro_nez" data-slide-to="0"></li>
                <li data-target="#slider_alejandro_nez" data-slide-to="1"></li>
                <li data-target="#slider_alejandro_nez" data-slide-to="2"></li>
                <li data-target="#slider_alejandro_nez" data-slide-to="3"></li>
                <li data-target="#slider_alejandro_nez" data-slide-to="4"></li>
                <li data-target="#slider_alejandro_nez" data-slide-to="5"></li>
                <li data-target="#slider_alejandro_nez" data-slide-to="6"></li>
                <li data-target="#slider_alejandro_nez" data-slide-to="7"></li>
                <li data-target="#slider_alejandro_nez" data-slide-to="8"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/Nez/N_1.png" alt="N_1">
                </div>

                <div class="item">
                    <img src="img/Nez/N_2.png" alt="N_2">
                </div>

                <div class="item">
                    <img src="img/Nez/N_3.png" alt="N_3">
                </div>

                <div class="item">
                    <img src="img/Nez/N_4.png" alt="N_4">
                </div>

                <div class="item">
                    <img src="img/Nez/N_5.png" alt="N_5">
                </div>

                <div class="item">
                    <img src="img/Nez/N_6.png" alt="N_6">
                </div>

                <div class="item">
                    <img src="img/Nez/N_7.png" alt="N_7">
                </div>

                <div class="item">
                    <img src="img/Nez/N_8.png" alt="N_8">
                </div>

                <div class="item">
                    <img src="img/Nez/N_9.png" alt="N_9">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#slider_alejandro_nez" role="button" data-slide="prev">
                <span class="sr-only">Precedent</span>
            </a>
            <a class="right carousel-control" href="#slider_alejandro_nez" role="button" data-slide="next">
                <span class="sr-only">Suivant</span>
            </a>
        </div>
    </div>

    <!--Bouche-->
    <div id="slider_alejandro_4">
        <div id="slider_alejandro_bouche" class="carousel slide" data-pause="pause">
            <!-- Indicators -->
            <ol class="pas_defini">
                <li data-target="#slider_alejandro_bouche" data-slide-to="0"></li>
                <li data-target="#slider_alejandro_bouche" data-slide-to="1"></li>
                <li data-target="#slider_alejandro_bouche" data-slide-to="2"></li>
                <li data-target="#slider_alejandro_bouche" data-slide-to="3"></li>
                <li data-target="#slider_alejandro_bouche" data-slide-to="4"></li>
                <li data-target="#slider_alejandro_bouche" data-slide-to="5"></li>
                <li data-target="#slider_alejandro_bouche" data-slide-to="6"></li>
                <li data-target="#slider_alejandro_bouche" data-slide-to="7"></li>
                <li data-target="#slider_alejandro_bouche" data-slide-to="8"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/Bouche/B_1.png" alt="B_1">
                </div>

                <div class="item">
                    <img src="img/Bouche/B_2.png" alt="B_2">
                </div>

                <div class="item">
                    <img src="img/Bouche/B_3.png" alt="B_3">
                </div>

                <div class="item">
                    <img src="img/Bouche/B_4.png" alt="B_4">
                </div>

                <div class="item">
                    <img src="img/Bouche/B_5.png" alt="B_5">
                </div>

                <div class="item">
                    <img src="img/Bouche/B_6.png" alt="B_6">
                </div>

                <div class="item">
                    <img src="img/Bouche/B_7.png" alt="B_7">
                </div>

                <div class="item">
                    <img src="img/Bouche/B_8.png" alt="B_8">
                </div>

                <div class="item">
                    <img src="img/Bouche/B_9.png" alt="B_9">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#slider_alejandro_bouche" role="button" data-slide="prev">
                <span class="sr-only">Precedent</span>
            </a>
            <a class="right carousel-control" href="#slider_alejandro_bouche" role="button" data-slide="next">
                <span class="sr-only">Suivant</span>
            </a>
        </div>
    </div>

    <!--Menton-->
    <div id="slider_alejandro_5">
        <div id="slider_alejandro_menton" class="carousel slide" data-pause="pause">
            <!-- Indicators -->
            <ol class="pas_defini">
                <li data-target="#slider_alejandro_menton" data-slide-to="0"></li>
                <li data-target="#slider_alejandro_menton" data-slide-to="1"></li>
                <li data-target="#slider_alejandro_menton" data-slide-to="2"></li>
                <li data-target="#slider_alejandro_menton" data-slide-to="3"></li>
                <li data-target="#slider_alejandro_menton" data-slide-to="4"></li>
                <li data-target="#slider_alejandro_menton" data-slide-to="5"></li>
                <li data-target="#slider_alejandro_menton" data-slide-to="6"></li>
                <li data-target="#slider_alejandro_menton" data-slide-to="7"></li>
                <li data-target="#slider_alejandro_menton" data-slide-to="8"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/Menton/M_1.png" alt="M_1">
                </div>

                <div class="item">
                    <img src="img/Menton/M_2.png" alt="M_2">
                </div>

                <div class="item">
                    <img src="img/Menton/M_3.png" alt="M_3">
                </div>
                <div class="item">
                    <img src="img/Menton/M_4.png" alt="M_4">
                </div>

                <div class="item">
                    <img src="img/Menton/M_5.png" alt="M_5">
                </div>

                <div class="item">
                    <img src="img/Menton/M_6.png" alt="M_6">
                </div>
                <div class="item">
                    <img src="img/Menton/M_7.png" alt="M_7">
                </div>

                <div class="item">
                    <img src="img/Menton/M_8.png" alt="M_8">
                </div>

                <div class="item">
                    <img src="img/Menton/M_9.png" alt="M_9">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#slider_alejandro_menton" role="button" data-slide="prev">
                <!-- <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> -->
                <span class="sr-only">Precedent</span>
            </a>
            <a class="right carousel-control" href="#slider_alejandro_menton" role="button" data-slide="next">
                <!-- <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> -->
                <span class="sr-only">Suivant</span>
            </a>

        </div>
    </div>

</div>

<button class="valider">
    <img src="img/valider.png" onclick="javascript:lafonctiondecyril();" alt="Texte en gras" style="cursor:pointer;">
</button>
<button class="btn btn-success" id="boutton">copie du portrait</button>


<!-- Fin du contenu -->
<?php include( '../default/page/footer.php' ); ?>
