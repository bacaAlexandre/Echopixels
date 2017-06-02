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
        <h1> TITRE H1 A METTRE ICI</h1>
        <div class="text_presentation">
            <p> A l'issue de trois mois et demi de formation aux <strong>métiers de développeurs et d'intégrateur web,</strong> d'anciens élèves de la première école de codeurs de la région dieppoise ont souhaité rester en contact, poursuivre leur formation et s'exercer à leur futur métier.</p>
            <p><strong>L'association Echo Pixels</strong> est donc née. Passerelle entre employeurs et candidats à l'emploi, entre professionnels et freelancer, elle regroupe aujourd'hui des webmaster, mais également des webdesigner et des rédacteurs web.</p>

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
