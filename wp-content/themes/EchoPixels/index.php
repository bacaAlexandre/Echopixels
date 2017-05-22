<?php
/*
Template Name: Accueil
*/
  get_header();
 ?>
<div class="index_content">

 <section>
  <div class="banniere">
   <img src="<?php echo get_template_directory_uri(); ?>/image/fond_accueil.jpg" alt="banniere_bienvenue">
  </div>
 </section>

 <section class="bloc_bleu">
    <div class="presentation">
        <div class="img_association">
            <img src="<?php echo get_template_directory_uri(); ?>/image/groupe_asso.jpg" alt="photo de groupe de l'association">
        </div>
        <div class="text_presentation">
            <p>L'association Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non rhoncus odio. Proin eu tellus quis turpis interdum posuere eu nec sem. Maecenas dictum dui nisi, elementum sodales libero lacinia quis. Aliquam vitae tincidunt elit. Fusce ex orci, iaculis eu faucibus quis, pretium ac mauris. Sed ullamcorper justo ut magna aliquam, et aliquam sapien egestas. Sed finibus diam quis nisl vehicula, a vestibulum metus varius.</p>
        </div>
    </div>
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
