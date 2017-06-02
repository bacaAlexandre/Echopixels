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

        <h1> Des développeurs web made in Dieppe</h1>

        <div class="text_presentation">
            <p> A l'issue de trois mois et demi de formation aux <strong>métiers de développeurs et d'intégrateur web,</strong> d'anciens élèves de la première école de codeurs de la région dieppoise ont souhaité rester en contact, poursuivre leur formation et s'exercer à leur futur métier.</p>
            <p><strong>L'association Echo Pixels</strong> est donc née. Passerelle entre employeurs et candidats à l'emploi, entre professionnels et freelancer, elle regroupe aujourd'hui des webmaster, mais également des webdesigner et des rédacteurs web.</p>
            <p>L'arrivée d'internet a considérablement bouleversé le monde et la façon de communiquer, de promouvoir son activité, de vendre ses produits et services, d'échanger.</p>
            <p>Or, de nombreux professionnels ne sont pas encore équipés dans ce domaine et ils devront l'être à l'avenir car exister sur le net est devenu indispensable. Mais voilà, les développeurs ne courent pas les rues et leurs compétences sont recherchées à prix d'or.</p>
            <p>Partant de ce constat, la première école dieppoise de formation aux métiers de <strong>développeur et d'intégrateur web</strong>, appelée également <strong>Ecole de codeurs d'Arques la Bataille</strong>, a vu le jour en octobre 2016. Elle porte le nom de "Promotion Danièle Thétiot" en hommage à la porteuse du projet décédée peu avant l'ouverture de l'école.</p>
            <p>Installée dans l'agglomération dieppoise, à Arques la Bataille, dans des locaux flambant neufs voués aux métiers du numérique, la première promotion a suivi pendant trois mois et demi l'enseignement dispensé par l'école parisienne <strong>WebForce3</strong>. Tous en sont sortis certifiés aux deux métiers : développeur web et intégrateur web.</p>
            <p>A l'issue de la formation, certains d'entre eux ont souhaité rester en contact, poursuivre leur formation et s'exercer à leur futur métier.</p>
            <p><strong>L'association Echo Pixels</strong> est donc née. </p>
            <p>Passerelle entre employeurs et candidats à l'emploi, entre professionnels et freelancers, elle regroupe aujourd'hui des webmasters, mais également des webdesigners et des rédacteurs web.</p>

 </section>



 <section class="bloc_blanc">
    <div class="wrapper">
        <div class="wrapper_gauche">
            <h2>La poursuite de formation</h2>
            <p>perfectionnement des compétences acquises durant la formation de développeur/intégrateur web</p>
            <h2>L'insertion professionnelle</h2>
            <p>des anciens élèves de l'école de codeur d'Arques la Bataille</p>
            <h2>La réalisation des sites et d'applications</h2>
            <p>accompagnement d'associations dans la réalisation de sites internet "vitrine" ou d'application moyennant une adhésion en tant que membre biendaiteur</p>
        </div>
        <div class="wrapper_centre">
            <img src="<?php echo get_template_directory_uri(); ?>/image/echopixels_logo.png">
        </div>
        <div class="wrapper_droite">
            <h2>La mise en relation</h2>
            <p>entre professionnels et anciens élèves de l'école des codeurs installés sous le statut d'indépendant pour tout projet que l'association ne pourrait porter</p>
            <h2>La promotion de l'école</h2>
            <p>par des interventios lors de manifestations liées au domaine du numérique</p>
            <h2>Toutes actions</h2>
            <p>liées au domaine digital que l'association jugera nécessaire de mener en relation avec l'objet principal</p>
        </div>
    </div>
 </section>
</div>
 <?php
 get_footer();
  ?>
