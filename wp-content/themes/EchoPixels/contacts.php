<?php

  /*
  Template Name: Contacts
  */
  get_header();
 ?>
 <main>
  <section>
   <div class="banniere">
    <img src="<?php echo get_template_directory_uri(); ?>/image/fond_contact.jpg" alt="fond_membres">
   </div>
   <div class="banniere_responsive">
    <img src="<?php echo get_template_directory_uri(); ?>/image/fond_contact_responsive.jpg" alt="banniere_bienvenue">
   </div>
  </section>
  <section>
      <h3> Vous souhaitez en savoir plus sur notre association ou nous soumettre un projet de site internet ? Merci de remplir le formulaire de contact, nous ne manquerons pas de revenir vers vous ! </h3>
  </section>
  <section class="formulaire_contact">
   <h1>Contacter l'association Echo Pixels</h1>
      <div>
          <?php echo do_shortcode('[contact-form-7 id="22" title="Contact form 1"]'); ?>
      </div>
  </section>
 </main>

 <?php
 get_footer();
  ?>
