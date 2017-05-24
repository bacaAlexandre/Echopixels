<?php

  /*
  Template Name: Contacts
  */
  get_header();
 ?>
 <main>
  <section class="formulaire_contact">
   <h1>Contacter l'association Echo Pixels</h1>
      <div>
          <?php echo do_shortcode('[contact-form-7 id="17" title="Contact form 1"]'); ?>
      </div>
  </section>
 </main>

 <?php
 get_footer();
  ?>
