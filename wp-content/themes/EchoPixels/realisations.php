<?php

  /*
  Template Name: Realisations
  */
  get_header();
 ?>
 <main class="realisation_content">
   <section>
    <div class="banniere">
     <img src="<?php echo get_template_directory_uri(); ?>/image/fond_realisation.jpg" alt="fond_membres">
    </div>
    <div class="banniere_responsive">
     <img src="<?php echo get_template_directory_uri(); ?>/image/fond_realisation_responsive.jpg" alt="banniere_bienvenue">
    </div>
   </section>
   <h1 class="vert">Les différents sites réalisés par l'équipe d'EchoPixels</h1>

   <div class="realisation_wrapper">
     <div class="realisation_col_left">
       <img src="<?php echo get_template_directory_uri(); ?>/image/logo/echoPixels.png" alt="">
       <ul class="bleu">
           <h4>Equipe</h4>
           <li>Chef de projet : <span class="vert">Alexandre Baca</span></li>
           <li>Développeur front/back : <span class="vert">Alexandre Baca</span></li>
           <li>Développeur front/back : <span class="vert">Bertrand Feuille</span></li>
           <li>Webdesigner : <span class="vert">Nicolas Blavet</span></li>
           <li>Conception logo : <span class="vert">Mélinda Khammar</span></li>
           <li>Rédatrice web : <span class="vert">Carine Halbout</span></li>
       </ul>
     </div>
     <div class="realisation_col_right">
         <h3 class="bleu">Echo Pixels</h3>
         <p class="bleu">Parce qu'il fallait bien commencer par en faire un, et pas des moindres, celui de notre propre association. <br>
             L'équipe constituée et le chef de projet désigné, chacun des membres a trouvé sa place et fait le job. </p>
     </div>
   </div>

   <div class="realisation_wrapper">
     <div class="realisation_col_left">
       <img src="<?php echo get_template_directory_uri(); ?>/image/logo/fond_de_placard.png" alt="">
       <ul class="bleu">
           <h4>Equipe</h4>
           <li>Chef de projet : <span class="vert">Paul Goyer</span></li>
           <li>Développeur front : <span class="vert">Paul Goyer</span></li>
           <li>Développeur front : <span class="vert">Sammy Rimbert</span></li>
           <li>Développeur back : <span class="vert">Théo Lerquet</span></li>
           <li>Développeur back : <span class="vert">Alexandre Baca</span></li>
           <li>Conception logo : <span class="vert">Mélinda Khammar</span></li>
       </ul>
     </div>
     <div class="realisation_col_right">
         <h3 class="bleu">Fond de placard</h3>
         <p class="bleu">Fond de placard est l'un des projets de fin de formation réalisé par quatre élèves de l'Ecole de codeurs d'Arques-la-Bataille, sous framework interne à WeForce3. </p>
         <p>Avec un cuisinier parmi les développeurs de l'équipe, l'idée d'un site de recettes était toute trouvée.</p>
         <p>Indiquez les ingrédients dont vous disposez, trouvez une recette et voilà de quoi vous mettre aux fourneaux ! </p>
         <p>Deux autres fonctionnalités sont présentes sur le site mais n'ont pu être développées par manque de temps.</p>
         <p>La première, une carte permettant de trouver le magasin le plus proche en cas d'aliment manquant pour la recette.<br>
            La deuxième, des soirées à thème avec recettes à la clé ainsi que des jeux pour égayer les soirées.</p>
         <p>Une bonne idée de site en somme.</p>


         <a href="http://fond-de-placard.baca-alexandre.fr/" target="_blank">Aller sur le site </a>
     </div>
   </div>

   <div class="realisation_wrapper">
     <div class="realisation_col_left">
       <img src="<?php echo get_template_directory_uri(); ?>/image/logo/ikedori.jpg" alt="">
       <ul class="bleu">
           <h4>Equipe</h4>
           <li>Chef de projet : <span class="vert">Bertrand Feuille</span></li>
           <li>Développeur front + Webdesigner : <span class="vert">Bertrand Feuille</span></li>
           <li>Développeur front + Webdesigner : <span class="vert">Nicolas Blavet</span></li>
           <li>Développeur back : <span class="vert">Quentin Hedouin</span></li>
           <li>Développeur back + récolte de datas : <span class="vert">Carine Halbout</span></li>
       </ul>
     </div>
     <div class="realisation_col_right">
         <h3 class="bleu">Ikedori</h3>
         <p class="bleu">Ikedori est également l'un des projets de fin de formation de l'Ecole de codeurs d'Arques-la-Bataille réalisé sous framework interne à WebForce3.</p>
         <p>L'idée est née d'un centre d'intérêt commun trouvé aux quatre membres de l'équipe, celui des jardins japonais. </p>
         <p>L'existence d'un annuaire sur le sujet n'ayant pas été trouvé sur le web, le défi était lancé. </p>
         <p>La récolte de données pour alimenter le site a permis de recenser une vingtaine de jardins ouverts au public.</p>
         <p>Le site permet en l'état de consulter les jardins référencés et de se créer un compte.</p>
         <p>Le compte utilisateur permet aux propriétaires d'ajouter un jardin à l'annuaire, qu'il soit ouvert ou non au public.</p>
         <p>De nombreuses autres fonctionnalités ont été pensées mais pas développées par manque de temps : distinction des jardins (public/privé), ajout de commentaires, notation des jardins, création d'itinéraires </p>
         <p>Un projet qui verra peut-être le jour, un jour...</p>

       <a href="http://ikedori.bertrandfeuille.fr/" target="_blank">Aller sur le site </a>
     </div>
   </div>
 </main>



 <?php
 get_footer();
  ?>
