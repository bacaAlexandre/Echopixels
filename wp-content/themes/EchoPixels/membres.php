<?php

  /*
  Template Name: Membres
  */
  get_header();
 ?>
 <section>
   <p>Page membres</p>


   <?php
  //  $liste_user = $wpdb->get_results("SELECT ID
  //    FROM {$wpdb->prefix}users", ARRAY_A);
    //  var_dump($liste_user);
    $liste_user = get_users();
    // var_dump($liste_user);
     for ($i=2; $i <=count($liste_user) ; $i++) { ?>
       <div class="">
         <p>Nom :<?php the_author_meta('first_name', $i) ?></p>
         <p>Prenom :<?php the_author_meta('last_name', $i) ?></p>
         <p>Site perso :<?php the_author_meta('site perso', $i) ?></p>
         <p>Linkdin :<?php the_author_meta('linkdIn', $i) ?></p>
         <p>Twitter : <?php the_author_meta('twitter', $i) ?></p>
         <a href="<?php the_author_meta('cv', $i) ?>" target="_blank">CV</a>
       </div>
    <?php }

    ?>
 </section>


 <section>

 </section>



 <section>

 </section>



 <section>

 </section>




 <section>

 </section>

 <?php
 get_footer();
  ?>
