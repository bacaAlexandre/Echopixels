<?php

  /*
  Template Name: Membres
  */
  get_header();
 ?>
 <section>
   <p>Page membres</p>

   <div class="bloc_membres">


   <?php

    $liste_user = get_users();
     for ($i=2; $i <=count($liste_user) ; $i++) { ?>
       <div class="profile">
         <p><?php the_author_meta('poste', $i) ?></p>
         <img src="<?php the_author_meta('photo', $i) ?>" alt="">
         <p><?php the_author_meta('last_name', $i) ?></p>
         <p><?php the_author_meta('first_name', $i) ?></p>
         <p><?php the_author_meta('site_perso', $i) ?></p>


         <a href="<?php the_author_meta('twitter', $i) ?>" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
         <a href="<?php the_author_meta('linkedin', $i) ?>" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>

         <a href="<?php the_author_meta('cv', $i) ?>" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
       </div>
    <?php }

    ?>
  </div>
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
