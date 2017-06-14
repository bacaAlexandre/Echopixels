<?php

  /*
  Template Name: Services
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
   <h1 class="vert">Les services proposés par l'association EchoPixels</h1>

   <section>
     <div class="services_text">
       <h2>La réalisation de sites internet et d'applications</h2>
       <p>Les membres d'Echo Pixels proposent à des associations la réalisation de leur site internet ou d'une application, à moindre coût.</p>
       <p>Afin de ne pas entrer en concurrence avec les concepteurs de sites internet locaux, Echo Pixels ne propose ce service qu'à des associations à but non lucratif. Le but est de leur permettre d'être présent sur internet, et ainsi d'accroître ou de faire connaître leurs activités. </p>
       <p>Si vous êtes dans ce cas et que vous souhaitez plus de renseignements, merci de prendre contact avec Echo Pixels.</p>
     </div>
    </section>
    <section>
      <div class="services_text">
        <h2>La mise en relation</h2>
        <p>L'objectif premier d'Echo Pixels est d'insérer professionnellement ses membres à l'issue de leur formation, jouant si possible le rôle d'intermédiaire.</p>
        <p>Que vous soyez à la recherche d'un salarié ou d'un prestataire, tous les profils sont regroupés dans la page <a href="<?php echo get_page_link(9);?>">"Membres".</a>Vous êtes libre de les contacter directement ou par l'intermédiaire d'Echo Pixels. </p>
      </div>
    <section>
      <div class="services_text">
        <p>Pour tout renseignement, un formulaire est à votre disposition à la page <a href="<?php echo get_page_link(7);?>">"Contacts".</a></p>
      </div>
    </section>
    <section>
      <div class="services_text">
        <blockquote>
          <p>Echo Pixels, une association du numérique à votre service.</p>
        </blockquote>
      </div>
    </section>
 </main>



 <?php
 get_footer();
  ?>
