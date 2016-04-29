<?php
include( '../default/page/start_header.php' );
?>
<!-- Place en dessous ton CSS dans Vendor, et ton CSS local -->

<!--<link rel="stylesheet" type="text/css" href="style.css">-->
<link rel="stylesheet" type="text/css" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<!-- fin CSS -->
<?php include( '../default/page/header.php' ); ?>

<!-- Place ici tes scripts Javascripts dans Vendor, et ton JS local -->
<script src="../../vendor/jquery-ui/jquery-ui.js"></script>

<!-- Fin Scripts -->


<?php include( '../default/page/end_header.php' ); ?>

<!-- Place ici ton contenu -->

<div class="col-md-12">
    <div class="background">

        <!-- DOSSIER Musiques -->
        <div class="icone d_musiques" data-window="f_musiques">
            <div class="mes_musiques">
                <p class="dossier_police">Mes musiques</p>
            </div><!-- .mes_musiques -->
        </div><!-- .d_musiques -->

        <!-- DOSSIER Videos -->
        <div class="icone d_videos" data-window="f_videos">
            <div class="mes_videos">
                <p class="dossier_police">Mes vidéos</p>
            </div><!-- .mes_videos -->
        </div><!-- .d_videos -->

        <!-- DOSSIER Oeuvre -->
        <div class="icone d_oeuvre" data-window="f_oeuvre">
            <div class="mon_oeuvre">
                <p class="dossier_police">Mon Oeuvre</p>
            </div><!-- .mon_oeuvre -->
        </div><!-- .d_oeuvre -->

        <!-- BARRE de menu -->
        <div class="barre">
            <div class="internet"></div><!-- .internet -->
            <div class="player"></div><!-- .player -->
            <div class="dossier_simple"></div><!-- .dossier_simple -->
        </div><!-- .barre -->

        <div class="demarrer"></div><!-- .demarrer -->

        <!-- FENETRE Musiques -->
        <div class="window f_musiques" id="f_musiques" style="display:none;">

            <div class="window-head b_musiques">
                <div class="bouton_fermer2" onclick="javascript:visibilite('f_musiques'); return false;"></div>
            </div>

            <div class="file musique_1" data-infos="Vous écoutez actuellement <b><em>Celoso</b></strong> du <b>Trio Los Panchos</b><br />. Rendez-vous au <b>chapitre 41</b> du livre <em>Mambo Canaille</em><br /> pour retrouver la référence à cette musique. </p>">
                <a href="https://www.youtube.com/watch?v=O4tR-5_w-Q4&list=PLUoCjbJ4ucW-ht7DAqA0SP-65V_kJFVmC&index=1" target="_blank" style="text-decoration:none">
                    <div class="titre_musique">
                        <p class="text-center">Celoso</p>
                    </div>
                </a>
            </div>


            <div class="file musique_2" data-infos="f_infos">
                <a href="https://www.youtube.com/watch?v=SVDg1ZzS87k&list=PLUoCjbJ4ucW-ht7DAqA0SP-65V_kJFVmC&index=6" target="_blank" style="text-decoration:none">
                    <div class="titre_musique">
                        <p class="text-center">Vete de mí</p>
                    </div>
                </a>
            </div>


            <div class="file musique_3" data-infos="Vous écoutez actuellement <b><em>Don’t stop believing</b></strong> de <b>Journey</b><br />. Rendez-vous au <b>chapitre 41</b> du livre <em>Mambo Canaille</em><br /> pour retrouver la référence à cette musique. </p>">
                <a href="https://www.youtube.com/watch?v=1k8craCGpgs&list=PLUoCjbJ4ucW-ht7DAqA0SP-65V_kJFVmC&index=11" target="_blank" style="text-decoration:none">
                    <div class="titre_musique">
                        <p class="text-center">Don’t stop believing</p>
                    </div>
                </a>
            </div>


            <div class="file musique_4" data-infos="Vous écoutez actuellement <b><em>Corazón Loco</b></strong> de <b>Diego El Cigala</b><br />. Rendez-vous au <b>chapitre 41</b> du livre <em>Mambo Canaille</em><br /> pour retrouver la référence à cette musique. </p>">
                <a href="https://www.youtube.com/watch?v=3PQy8S_Gd6c&list=PLUoCjbJ4ucW-ht7DAqA0SP-65V_kJFVmC&index=2" target="_blank" style="text-decoration:none">
                    <div class="titre_musique">
                        <p class="text-center">Corazón Loco</p>
                    </div>
                </a>
            </div>


            <div class="file musique_5" data-infos="Vous écoutez actuellement <b><em>Carmen</b></strong> de <b>Maria Callas</b><br />. Rendez-vous au <b>chapitre 41</b> du livre <em>Mambo Canaille</em><br /> pour retrouver la référence à cette artiste. </p>">
                <a href="https://www.youtube.com/watch?v=p19Rh5HWiRc&index=7&list=PLUoCjbJ4ucW-ht7DAqA0SP-65V_kJFVmC" target="_blank" style="text-decoration:none">
                    <div class="titre_musique">
                        <p class="text-center">Carmen</p>
                    </div>
                </a>
            </div>


            <div class="file musique_6" data-infos="Vous écoutez actuellement <b><em>Faithfully</b></strong> de <b>Journey</b><br />. Rendez-vous au <b>chapitre 41</b> du livre <em>Mambo Canaille</em><br /> pour retrouver la référence à cette musique. </p>">
                <a href="https://www.youtube.com/watch?v=OMD8hBsA-RI&list=PLUoCjbJ4ucW-ht7DAqA0SP-65V_kJFVmC&index=12" target="_blank" style="text-decoration:none">
                    <div class="titre_musique">
                        <p class="text-center">Faithfully</p>
                    </div>
                </a>
            </div>


            <div class="file musique_7" data-infos="Vous écoutez actuellement <b><em>El Amor</b></strong> de <b>Jose Luis Pérales</b><br />. Rendez-vous au <b>chapitre 41</b> du livre <em>Mambo Canaille</em><br /> pour retrouver la référence à cet artiste. </p>">
                <a href="https://www.youtube.com/watch?v=iogQzfarmtI&list=PLUoCjbJ4ucW-ht7DAqA0SP-65V_kJFVmC&index=3" target="_blank" style="text-decoration:none">
                    <div class="titre_musique">
                        <p class="text-center">El Amor</p>
                    </div>
                </a>
            </div>


            <div class="file musique_8" data-infos="Vous écoutez actuellement le <b><em>Concerto Bartòk</b></strong> de <b>Béla Bartók</b><br />. Rendez-vous au <b>chapitre 41</b> du livre <em>Mambo Canaille</em><br /> pour retrouver la référence à cette musique. </p>">
                <a href="https://www.youtube.com/watch?v=C68SkzGb6Ww&index=8&list=PLUoCjbJ4ucW-ht7DAqA0SP-65V_kJFVmC" target="_blank" style="text-decoration:none">
                    <div class="titre_musique">
                        <p class="text-center">Concerto Bartòk</p>
                    </div>
                </a>
            </div>


            <div class="file musique_9" data-infos="Vous écoutez actuellement <b><em>Jump</b></strong> de <b>Van Halen</b><br />. Rendez-vous au <b>chapitre 41</b> du livre <em>Mambo Canaille</em><br /> pour retrouver la référence à cette musique. </p>">
                <a href="https://www.youtube.com/watch?v=SwYN7mTi6HM&index=13&list=PLUoCjbJ4ucW-ht7DAqA0SP-65V_kJFVmC" target="_blank" style="text-decoration:none">
                    <div class="titre_musique">
                        <p class="text-center">Jump</p>
                    </div>
                </a>
            </div>


            <div class="file musique_10" data-infos="Vous écoutez actuellement l'<b><em>Hymne national des Canaries</b></strong>. Rendez-vous au <b>chapitre 41</b> du livre <em>Mambo Canaille</em><br /> pour retrouver la référence à cette musique. </p>">
                <a href="https://www.youtube.com/watch?v=vGrHckIBtmU&index=4&list=PLUoCjbJ4ucW-ht7DAqA0SP-65V_kJFVmC" target="_blank" style="text-decoration:none">
                    <div class="titre_musique">
                        <p class="text-center">Hymne des Canaries</p>
                    </div>
                </a>
            </div>


            <div class="file musique_11"
                 data-infos="Vous écoutez actuellement le <b><em>Concerto n°5 de Mozart</b></strong> par <b>Anne Sophie-Mutter</b><br />Rendez-vous au <b>chapitre 41</b> du livre <em>Mambo Canaille</em><br /> pour retrouver la référence à cette musique. </p>">
                <a href="https://www.youtube.com/watch?v=ETXPKHPPov8&index=9&list=PLUoCjbJ4ucW-ht7DAqA0SP-65V_kJFVmC" target="_blank" style="text-decoration:none">
                    <div class="titre_musique">
                        <p class="text-center">Concerto n°5</p>
                    </div>
                </a>
            </div>


            <div class="file musique_12" data-infos="Vous écoutez actuellement <b><em>Oh Sherrie</b></strong> du <b>Trio Los Panchos</b><br />Rendez-vous au <b>chapitre 41</b> du livre <em>Mambo Canaille</em><br /> pour retrouver la référence à cette musique. </p>">
                <a href="https://www.youtube.com/watch?v=5-WpsdC2-Cc&list=PLUoCjbJ4ucW-ht7DAqA0SP-65V_kJFVmC&index=14" target="_blank" style="text-decoration:none">
                    <div class="titre_musique">
                        <p class="text-center">Oh Sherrie</p>
                    </div>
                </a>
            </div>


            <div class="file musique_13" data-infos="Vous écoutez actuellement <b><em>Celoso</b></strong> du <b>Trio Los Panchos</b><br />Rendez-vous au <b>chapitre 41</b> du livre <em>Mambo Canaille</em><br /> pour retrouver la référence à cette musique. </p>">
                <a href="https://www.youtube.com/watch?v=tzV02thQclc&list=PLUoCjbJ4ucW-ht7DAqA0SP-65V_kJFVmC&index=5" target="_blank" style="text-decoration:none">
                    <div class="titre_musique">
                        <p class="text-center">Las mañanitas</p>
                    </div>
                </a>
            </div>


            <div class="file musique_14" data-infos="Vous écoutez actuellement <b><em>Celoso</b></strong> du <b>Trio Los Panchos</b><br />Rendez-vous au <b>chapitre 41</b> du livre <em>Mambo Canaille</em><br /> pour retrouver la référence à cette musique. </p>">
                <a href="https://www.youtube.com/watch?v=pAgnJDJN4VA&index=10&list=PLUoCjbJ4ucW-ht7DAqA0SP-65V_kJFVmC" target="_blank" style="text-decoration:none">
                    <div class="titre_musique">
                        <p class="text-center">Back in Black</p>
                    </div>
                </a>
            </div>


            <div class="file musique_15" data-infos="Vous écoutez actuellement <b><em>Celoso</b></strong> du <b>Trio Los Panchos</b><br />Rendez-vous au <b>chapitre 41</b> du livre <em>Mambo Canaille</em><br /> pour retrouver la référence à cette musique. </p>">
                <a href="https://www.youtube.com/watch?v=a01QQZyl-_I&list=PLUoCjbJ4ucW-ht7DAqA0SP-65V_kJFVmC&index=15" target="_blank" style="text-decoration:none">
                    <div class="titre_musique">
                        <p class="text-center">Under Pressure</p>
                    </div>
                </a>
            </div>

        </div><!-- .f_musiques -->

        <!-- FENETRE Videos -->
        <div class="window f_videos" id="f_videos" style="display:none;">

            <div class="window-head b_videos">
                <div class="bouton_fermer1" onclick="javascript:visibilite('f_videos'); return false;"></div>
            </div>


            <div class="file video_1" data-infos="Vous regardez actuellement <b><em>Celoso</b></strong> du <b>Trio Los Panchos</b><br />Rendez-vous au <b>chapitre 41</b> du livre <em>Mambo Canaille</em><br /> pour retrouver la référence à cet artiste. </p>">
                <a href="https://www.youtube.com/watch?v=U1_rXFIXpZ0&list=PLUoCjbJ4ucW_t7Iw9NtKz8O90hIozUP43&index=1" target="_blank" style="text-decoration:none">
                    <div class="titre_video">
                        <p class="text-center">Abbott et Costello</p>
                    </div>
                </a>
            </div>


            <div class="file video_2" data-infos="Vous regardez actuellement <b><em>Celoso</b></strong> du <b>Trio Los Panchos</b><br />Rendez-vous au <b>chapitre 41</b> du livre <em>Mambo Canaille</em><br /> pour retrouver la référence à cet artiste. </p>">
                <a href="https://www.youtube.com/watch?v=Ebn1YOtTIZs&list=PLUoCjbJ4ucW_t7Iw9NtKz8O90hIozUP43&index=2" target="_blank" style="text-decoration:none">
                    <div class="titre_video">
                        <p class="text-center">Laurel et Hardy</p>
                    </div>
                </a>
            </div>


            <div class="file video_3" data-infos="Vous regardez actuellement <b><em>Celoso</b></strong> du <b>Trio Los Panchos</b><br />Rendez-vous au <b>chapitre 41</b> du livre <em>Mambo Canaille</em><br /> pour retrouver la référence à cet artiste. </p>">
                <a href="https://www.youtube.com/watch?v=Zshm1Vxqfh4&list=PLUoCjbJ4ucW_t7Iw9NtKz8O90hIozUP43&index=3" target="_blank" style="text-decoration:none">
                    <div class="titre_video">
                        <p class="text-center">Lauren Bacall</p>
                    </div>
                </a>
            </div>


            <div class="file video_4" data-infos="Vous regardez actuellement <b><em>Celoso</b></strong> du <b>Trio Los Panchos</b><br />Rendez-vous au <b>chapitre 41</b> du livre <em>Mambo Canaille</em><br /> pour retrouver la référence à cet artiste. </p>">
                <a href="https://www.youtube.com/watch?v=6ngeRBC8PVA&list=PLUoCjbJ4ucW_t7Iw9NtKz8O90hIozUP43&index=4" target="_blank" style="text-decoration:none">
                    <div class="titre_video">
                        <p class="text-center">Libertad Lamarque</p>
                    </div>
                </a>
            </div>


            <div class="file video_5" data-infos="Vous regardez actuellement <b><em>Celoso</b></strong> du <b>Trio Los Panchos</b><br />Rendez-vous au <b>chapitre 41</b> du livre <em>Mambo Canaille</em><br /> pour retrouver la référence à cet artiste. </p>">
                <a href="https://www.youtube.com/watch?v=Fcc9Uw3elgs&index=5&list=PLUoCjbJ4ucW_t7Iw9NtKz8O90hIozUP43" target="_blank" style="text-decoration:none">
                    <div class="titre_video">
                        <p class="text-center">Sevillanas</p>
                    </div>
                </a>
            </div>


            <div class="file video_6" data-infos="Vous regardez actuellement <b><em>Celoso</b></strong> du <b>Trio Los Panchos</b><br />Rendez-vous au <b>chapitre 41</b> du livre <em>Mambo Canaille</em><br /> pour retrouver la référence à cet artiste. </p>">
                <a href="https://www.youtube.com/watch?v=lLAYYrxtJfI&index=6&list=PLUoCjbJ4ucW_t7Iw9NtKz8O90hIozUP43" target="_blank" style="text-decoration:none">
                    <div class="titre_video">
                        <p class="text-center">Woody Allen</p>
                    </div>
                </a>
            </div>


        </div><!-- .f_videos -->


        <!-- FENETRE Oeuvre -->
        <div class="window f_oeuvre" id="f_oeuvre" style="display:none;">

            <div class="window-head b_oeuvre">

                <div class="bouton_fermer3" onclick="javascript:visibilite('f_oeuvre'); return false;">

                </div>

            </div>

            <div class="oeuvre_1">
                <div class="titre_oeuvre">
                    <p class="text-center">Mon Oeuvre</p>
                </div>
            </div>

        </div><!-- .f_oeuvre -->


        <!-- FENETRE infos -->

        <div class="news f_infos" id="f_infos" style="display:none;">
            <div class="bouton_fermer4" onclick="javascript:visibilite('f_infos'); return false;">
                <p class="texte_infos"></p>
            </div>
            <div class="bouton_ok"></div>

        </div><!-- .background -->
    </div>


    <!-- SCRIPT -->
    <script>

        /**
         * Stocke le z-index de la fenêtre au premier plan
         */
        setCookie('zIndex', 3, 1);

        /* Pour Bouger les fenêtres */
        $(function () {
            $('.icone').draggable();
            $('.window').draggable({
                handle: '.window-head',
                containment: '.background'
            });
        });

        /**
         * Bascule la fenêtre sélectionnée au premier plan
         */
        $('.window-head').on('mousedown', function () {
            var zIndex = getCookie('zIndex');
            zIndex++;

            $(this).parent().css('z-index', zIndex);

            setCookie('zIndex', zIndex, 1);
        });


        $('.icone').on('click', function (event) {

            event.preventDefault();

            var window = $(this).attr('data-window');

            $('.' + window).fadeIn();

        });


        /* Ouvrir fenêtre infos  */
        $('.file').on('click', function (event) {

            event.preventDefault();

            var uri = $(this).find('a').attr('href');
            var info = $(this).attr('data-infos');

            $('.f_infos .texte_infos').html(info);
            $('.f_infos').fadeIn();

            $('.f_infos .bouton_ok').on('click',function() {
                window.open(uri);
            })
        });


        /* Bouton Fermer  */
        function visibilite(thingId) {
            var targetElement;
            targetElement = document.getElementById(thingId);
            if (targetElement.style.display == "none") {
                targetElement.style.display = "";
            } else {
                targetElement.style.display = "none";
            }
        }


        /**
         * Stocke un cookie
         *
         * @param cname
         * @param cvalue
         * @param exdays
         */
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + "; " + expires;
        }


        /**
         * Lit le contenu d'un cookie
         * @param cname
         * @returns {*}
         */
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

    </script>

    <!-- Fin du contenu -->
    <?php include( '../default/page/footer.php' ); ?>
























