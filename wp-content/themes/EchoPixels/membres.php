<?php

  /*
  Template Name: Membres
  */
  get_header();
 ?>
 <main>
   <div class="bloc_membres">
     <?php
     $liste_user = get_users();
     for ($i=2; $i <=count($liste_user) ; $i++) { ?>
       <div class="wrapper_profile">
         <p class="rouge"><span class="vert"> < </span> <?php the_author_meta('poste', $i) ?> <span class ="vert"> > </span></p>
         <div class="profile">
           <img src="<?php the_author_meta('photo', $i) ?>" alt="">
           <div class="info">
             <p class="bleu">
               <?php the_author_meta('last_name', $i) ?>
               <?php the_author_meta('first_name', $i) ?>
             </p>
             <p><?php the_author_meta('description', $i) ?></p>
             <p><?php the_author_meta('site_perso', $i) ?></p>

             <div class="liens">
               <div class="">
                 <a href="<?php the_author_meta('twitter', $i) ?>" target="_blank" class="icone bleu"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                 <a href="<?php the_author_meta('linkedin', $i) ?>" target="_blank" class="icone bleu"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
               </div>
               <a href="<?php the_author_meta('cv', $i) ?>" target="_blank" class="cv rouge" class="icone"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
             </div>
           </div>
         </div>
       </div>
       <?php }
       ?>
     </div>
 </main>


 <?php
 get_footer();
  ?>
