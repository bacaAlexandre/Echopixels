<?php
/*
Template Name: Accueil
*/
  get_header();
 ?>

<div class="index_content">


 <section>
  <!-- Switch d'affichage entre la banniere classique et la banniere responsive-->
  <div class="banniere">
   <img src="<?php echo get_template_directory_uri(); ?>/image/fond_accueil.jpg" alt="banniere_bienvenue">
  </div>
   <div class="banniere_responsive">
    <img src="<?php echo get_template_directory_uri(); ?>/image/fond_accueil_responsive.jpg" alt="banniere_bienvenue">
   </div>
    <!--  Fin du switch   -->
 </section>


 <section class="bloc_bleu">
<!--    <div class="presentation">-->
        <h1>Des développeurs web made in Dieppe</h1>
<!--        <div class="img_association">-->
<!--            <img src="--><?php //echo get_template_directory_uri(); ?><!--/image/groupe_asso.jpg" alt="photo de groupe de l'association">-->
<!--        </div>-->
        <div class="text_presentation">
            <p>L'arrivée d'internet a considérablement bouleversé le monde et la façon de communiquer, de promouvoir son activité, de vendre ses produits et services, d'échanger.</p>
            <p>Or, de nombreux professionnels ne sont pas encore équipés dans ce domaine et ils devront l'être à l'avenir car exister sur le net est devenu indispensable.
            Mais voilà, les développeurs ne courent pas les rues et leurs compétences sont recherchées à prix d'or.</p>
            <p>Partant de ce constat, la première école dieppoise de formation aux métiers de <strong>développeur et d'intégrateur web</strong>, appelée également <strong>Ecole de codeurs d'Arques la Bataille</strong>, a vu le jour en octobre 2016. Elle porte le nom de "Promotion Danièle Thétiot" en hommage à la porteuse du projet décédée peu avant l'ouverture de l'école.</p>
            <p>Installée dans l'agglomération dieppoise, à Arques la Bataille, dans des locaux flambant neufs voués aux métiers du numérique, la première promotion a suivi pendant trois mois et demi l'enseignement dispensé par l'école parisienne <strong>WebForce3</strong>. Tous en sont sortis certifiés aux deux métiers : développeur web et intégrateur web.</p>
            <p>A l'issue de la formation, certains d'entre eux ont souhaité rester en contact, poursuivre leur formation et s'exercer à leur futur métier.</p>
            <p><strong>L'association Echo Pixels</strong> est donc née. </p>
            <p>Passerelle entre employeurs et candidats à l'emploi, entre professionnels et freelancers, elle regroupe aujourd'hui des webmasters, mais également des webdesigners et des rédacteurs web.</p>
<!--    </div>-->

 </section>



 <section class="bloc_blanc">
    <div class="wrapper">
        <div class="wrapper_gauche">
            <h2>Mettre en relation</h2>
            <p>L'association sert d'intermédiaire entre les professionnels et ses membres, qu'ils soient en recherche d'emploi ou en freelance.</p>
            <p>La section "membres" regroupe leurs profils et pour certains, leur cv.</p>

            <h2>Développer des sites & <br> des applications </h2>
            <p>Les développeurs disponibles peuvent venir en aide à des associations ayant besoin d'un site internet pour leur activité.</p>
        </div>
        <div class="wrapper_centre">
            <img src="<?php echo get_template_directory_uri(); ?>/image/echopixels_logo.png">
        </div>
        <div class="wrapper_droite">
            <h2>Continuer à se former</h2>
            <p>Le métier de développeur web est en constante évolution. La formation continue est donc primordiale pour se maintenir à jour ses connaissances.</p>
            <p>De chez eux ou réunis en petits groupes, les élèves poursuivrent leur apprentissage.</p>

            <h2>Promouvoir l'école & <br> se faire connaître</h2>
            <p>L'association est présente aux manifestations locales liées au domaine du numérique.</p>
        </div>
    </div>
 </section>
</div>
 <?php
 get_footer();
  ?>
