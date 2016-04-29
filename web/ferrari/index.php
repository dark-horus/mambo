<?php
include('../default/page/start_header.php');
?>
<!-- Place en dessous ton CSS dans Vendor, et ton CSS local -->
 <link rel="stylesheet" href="css/example.css"  />
    <link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<!-- fin CSS -->
<?php include('../default/page/header.php'); ?>

<!-- Place ici tes scripts Javascripts dans Vendor, et ton JS local -->

<script type="text/javascript" src="../../vendor/jquery-2.2.1/jquery-2.2.1.min.js"></script>
    <script type="text/javascript" src="../../vendor/jquery-2.2.1/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="../../vendor/jInvertScroll/dist/js/jquery.jInvertScroll.min.js"></script>
    <script type="text/javascript">
  
    
        $(document).ready(function(){
            
             var car = $.jInvertScroll(['.scroll'],        // an array containing the selector(s) for the elements you want to animate
                {
                height: 60000,                   // optional: define the height the user can scroll, otherwise the overall length will be taken as scrollable height
                onScroll: function(percent) {   //optional: callback function that will be called when the user scrolls down, useful for animating other things on the page
                    //console.log(percent);



 //BLOCK1          
            
                 if(percent > 0.0200 && percent < 0.0750){
                    $('.block-1').fadeIn();
                }
                if(percent >= 0.0750) {
                    $('.block-1').fadeOut();
                }
                if(percent <= 0.0200){
                    $('.block-1').fadeOut();
                }
                
                
   //BLOCK2            
                  if(percent > 0.0800 && percent < 0.2340){
                    $('.block-2').fadeIn();
                }
                if(percent >= 0.2340) {
                    $('.block-2').fadeOut();
                }
                if(percent < 0.0800){
                    $('.block-2').fadeOut();
                }
                
    //BLOCK3
                  if(percent > 0.2400 && percent < 0.3540){
                    $('.block-3').fadeIn();
                }
                if(percent >= 0.3540) {
                    $('.block-3').fadeOut();
                }
                if(percent < 0.2400){
                    $('.block-3').fadeOut();
                }
                
                
    //BLOCK4
                if(percent > 0.3705 && percent < 0.4800){
                    $('.block-4').fadeIn();
                }
                if(percent >= 0.4800) {
                    $('.block-4').fadeOut();
                }
                if(percent < 0.3705){
                    $('.block-4').fadeOut();
                }
     //BLOCK5
                if(percent > 0.5000 && percent < 0.6300){
                    $('.block-5').fadeIn();
                }
                if(percent >= 0.6300) {
                    $('.block-5').fadeOut();
                }
                if(percent < 0.5000){
                    $('.block-5').fadeOut();
                }
                
    //BLOCK6

                if(percent > 0.6350 && percent < 0.7300){
                    $('.block-6').fadeIn();
                }
                if(percent >= 0.7300) {
                    $('.block-6').fadeOut();
                }
                if(percent < 0.6350){
                    $('.block-6').fadeOut();
                }
                
 //BLOCK7 
                if(percent > 0.7560 && percent < 0.8650){
                    $('.block-7').fadeIn();
                }
                if(percent >= 0.8650) {
                    $('.block-7').fadeOut();
                }
                if(percent < 0.7560){
                    $('.block-7').fadeOut();
                }
//BLOCK8
                if(percent > 0.8800 && percent < 0.9500){
                    $('.block-8').fadeIn();
                }
                if(percent >= 0.9500) {
                    $('.block-8').fadeOut();
                }
                if(percent < 0.8800){
                    $('.block-8').fadeOut();
                }
                
//Valider
                 if(percent > 0.9500 && percent < 0.9999){
                    $('.block-9').fadeIn();
                }
                if(percent >= 0.9999) {
                    $('.block-9').fadeOut();
                }
                if(percent < 0.9500){
                    $('.block-9').fadeOut();
                }   
            }
        });

            
            $('#range').on('mousemove',function(){
                            var position =$(this).val();  
                window.scrollTo(0,position);
                
                //console.log($(this).val());
                
            });
        });
    </script>


<!-- Fin Scripts -->


<?php include('../default/page/end_header.php'); ?>

<!-- Place ici ton contenu -->

<div class="block block-1">  
        <div class="title">Avant 1400 </div>

        <div class="texte">Bien avant l’arrivée des colons, à l’époque précolombienne, trois grands peuples indigènes se répartissent le territoire du Venezuela :  Les Arawaks, </br> les Caribes et les Cumanagotos. En effet, ces différents groupes ont chacun leur propre langue et possèdent une manière de vivre différente les uns des autres. Chez les Arawaks, les habitations sont construites sur des pilotis. Ce type d’habitat a inspiré les colons, qui ont surnommé ce territoire la « petite Venise», devenu aujourd’hui le Venezuela.
        </div>

    </div> 
    
     <div class="block block-2">  
        <div class="title"> 1498 </div>
        <div class="texte">Le Venezuela est découvert en 1498 lors du troisième voyage vers les Indes Occidentales de Christophe Colomb. En 1506, après les multiples échecs espagnols face aux amérindiens dans la région de Darién (regroupant la Colombie, le Panama et le Venezuela), l’Allemand Bartholomé Welser reçoit le droit de coloniser le Venezuela. Le pays qui appartient alors aux espagnols passe entre les mains des allemands et ce, pendant vingt-cinq ans. Toutefois, au fil des années des tensions entre ces deux pays apparaissent et en 1546, plus aucun allemand n’est le bienvenu sur le territoire. L’empire hispanique reprend les rênes de la colonisation et de l’administration du pays. Cette colonie demeure assez négligée par ses dirigeants espagnols, ces derniers se concentrant davantage sur l'extraction de l'or dans les autres régions d’Amérique du Sud plutôt que sur le bon développement du pays. 
</div>
    </div> 

    <div class="block block-3">  
        <div class="title">  L’eldorado du cacao </div>
        <div class="texte">Les Aztèques et les Mayas (Amérindiens) sont les premiers à confectionner « la boisson de dieu » à partir du cacao. Ils cueillent les cabosses et en extraient les fèves. Ils les laissent ensuite fermenter, sécher et griller, les épluchent et les broient sur des pierres chaudes. Ils les mélangent enfin à des farines, des sucres et des épices puis les diluent afin d’en boire le breuvage. Au XVème siècle, le cacao a une telle importance qu’il est utilisé comme monnaie d’échange par les Mayas. Très vite,  « l’or brun » s’impose comme le principal bien du Nouveau Monde vers le royaume espagnol. Jusqu’en 1810, le Venezuela couvre la moitié de la demande mondiale de cacao. A son arrivée en 1919, l’Espagnol Cortes modifie le breuvage et lance réellement la filière du chocolat dans le monde entier. Aujourd’hui, le Venezuela produit encore l’un des meilleurs cacaos du monde notamment grâce à la production du Criollo, qui est une des variétés les plus précieuses.
</div>
    </div> 
    
      <div class="block block-4">  
        <div class="title">La jeunesse Hugo Chavez </div>
        <div class="texte">Hugo Rafael Chávez Frías naît en 1954 à Sabaneta, au sud du Venezuela. Il entre à l’académie vénézuelienne des sciences millitaires en 1971 et en sort sous-lieutenant en 1975. Peu après, il fonde avec le soutien de deux autres officiers le mouvement bolivarien révolutionnaire (MBR) qui s’oppose à la corruption du gouvernement présidé par Carlos Andrés Pérez.

</div>
    </div> 
    
     <div class="block block-5">  
        <div class="title">   Le coup d'état d'Hugo Chavez </div>
        <div class="texte">En 1991, la situation du gouvernement colombien devient critique vis-à-vis des combattants de la guérilla. Des pourparlers sont engagés pour apaiser la situation. Le 3 Juin 1992, Hugo Chávez, révolté par la corruption ostensible du régime, est l’auteur d’une tentative de coup d’état avortée. Cet acte lui permet de connaître son premier grand succès médiatique. En novembre, le gouvernement fait face à une autre tentative de putsch qui laisse le pays dans un état d'extrême pauvreté.
Le 20 Mai 1993, le président Carlos Andrès Pérez qui en est à son deuxième mandat, est destitué de ses fonctions pour corruption. Cinq ans plus tard, Hugo Chávez est élu président avec 56,5% des voies contre Henrique Salas Römer.
</div>
    </div> 
    
     <div class="block block-6">  
        <div class="title">   Hugo Chavez au pouvoir </div>
        <div class="texte">Hugo Chávez est président du Venezuela de 1999 à 2013. Sa politique et sa personnalité sont très controversées même s’il bénéficie d’un rayonnement international. Le 11 avril 2002, il fait face à un putsh mené par les groupes d’opposition et l’entrepreneur Pedro Carmona. Ce dernier envoie Hugo Chávez en prison et prend la tête du gouvernement. Mais, trois jours plus tard, l’armée et les mouvements populaires réussissent à faire avorter le coup d'état et remettent Hugo Chávez au pouvoir. Le gouvernement d’Hugo Chávez porte plainte, en mars 2004, auprès de l'Organisation des États Américains contre le gouvernement de Washington, persuadé de sa complicité avec les auteurs de la tentative de putsch. 
</div>
    </div> 
    
    <div class="block block-7">  
        <div class="title">   Le Venezuela, une puissance pétrolière </div>
        <div class="texte">Le Venezuela est une réelle puissance énergétique, et notamment pétrolière. Son économie tourne principalement autour du pétrole, mais aussi du gaz, ces secteurs représentant 25% du PIB du pays. Les réserves de pétrole du Venezuela atteindraient 297 milliards de barils ce qui le ferait accéder à la première place mondiale des puissances pétrolières, devant l’Arabie Saoudite. La production est majoritairement gérée par la compagnie publique PDVSA. Cette force de production et ces ressources naturelles font la puissance économique du Venezuela. 
</div>
    </div> 
    
     <div class="block block-8">  
        <div class="title">   Le Venezuela aujourd'hui </div>
        <div class="texte">Le prix du pétrole, en chute libre, entraîne une crise économique au sein du pays.  Le Venezuela, trop dépendant de l‘industrie pétrolière, fait face à une forte inflation et une grave pénurie. Le kilo de pommes de terre est vendu 1155 bolívars, soit un dixième du salaire minimum au Venezuela. Le 14 janvier 2016, le président Nicolas Maduro décrète l’état d’urgence économique, renforçant alors son pouvoir exécutif. Cette situation économique accentue l’opposition au sein du pays - une opposition, majoritaire au Parlement, qui tente depuis plusieurs mois d’expulser Nicolas Maduro de son poste.

</div>
    </div> 
    
    <div class="block block-9" >
    <a href="../chien/default.php"> <img src="images/etapesuivante.png" alt="valider" /> </a>
    </div>
     
    
    
        <div class="texture scroll">
          <img src="images/Fond1.png" alt="" />
        </div>

        <div class="imgdercity scroll">
            <img src="images/imgdercity1.png" alt="" />
        </div> 
    
       <!-- <div class="imgdevcity scroll">
            <img src="images/imgdevcity.png" alt="" /> 
        </div> -->
    
        <div class="city scroll">
            <img src="images/city2.png" alt="" />
        </div>
    
        <div class="ferrari scroll">
            <img src="images/ferrari2.gif"  width="300" height="500" alt="" />
        </div>

   
    
<!-- Progress Barre -->
    <div class="barre scroll">
  <input id="range" type="range" name="points" min="0" max="59000" step="1" value="0" >
        
</div>



<!-- Fin du contenu -->
<?php 
include('../default/page/footer.php');
?>