<?php

  /*
  Template Name: Membres
  */
  get_header();
 ?>
 <main class="membres_content">
   <section>
    <div class="banniere">
     <img src="<?php echo get_template_directory_uri(); ?>/image/fond_membres.jpg" alt="fond_membres">
    </div>
    <div class="banniere_responsive">
      <img src="<?php echo get_template_directory_uri(); ?>/image/fond_membres_responsive.jpg" alt="banniere_bienvenue">
    </div>
   </section>
   <h2 class="vert">Les membres de l'association</h2>
   <div class="bloc_membres">
     <?php

     // Liste des utilisateurs pour avoir le nombre de membres pour la boucle
     $liste_user = get_users();
     // Boucle pour crée les différents profiles
     for ($i=2; $i <=count($liste_user) ; $i++) { ?>
       <div class="wrapper_profile">
         <p class="rouge"><span class="vert"> < </span> <?php the_author_meta('poste', $i) ?> <span class ="vert"> > </span></p>
         <div class="profile">
            <!-- condition pour vérifier qu'une adresse pour la photo a bien été rentrée en backoffice -->
           <?php if (get_the_author_meta('photo', $i) == ''){ ?>
              <img src=" <?php echo get_template_directory_uri(); ?>\image\photo\inconnu.jpg" alt="">
           <?php } else { ?>
             <img src="<?php echo get_template_directory_uri(); the_author_meta('photo', $i) ?>" alt="">
           <?php  }?>
           <div class="info">
             <p class="bleu">
               <strong>
                 <?php the_author_meta('last_name', $i) ?>
                 <?php the_author_meta('first_name', $i) ?>
               </strong>
             </p>
             <p><?php the_author_meta('description', $i) ?></p>
             <?php if(get_the_author_meta('site_perso', $i) != ''){ ?>
               <a href="<?php the_author_meta('site_perso', $i) ?>" target="_blank" class="lien_site_perso">Site perso</a>

             <?php } ?>
             <!-- <p><?php the_author_meta('site_perso', $i) ?></p> -->

             <div class="liens">
               <div class="">
                 <?php if (get_the_author_meta('twitter', $i) != '') { ?>
                   <a href="<?php the_author_meta('twitter', $i) ?>" target="_blank" class="icone bleu"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                 <?php } ?>
                 <?php if (get_the_author_meta('linkedin', $i) != '') { ?>
                   <a href="<?php the_author_meta('linkedin', $i) ?>" target="_blank" class="icone bleu"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                 <?php } ?>

               </div>
               <!--condition pour savoir si il y a le lien du cv  -->
               <?php if (get_the_author_meta('cv', $i) != '') { ?>
                 <a href="<?php echo get_template_directory_uri(); the_author_meta('cv', $i) ?>" target="_blank" class="cv rouge" class="icone"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
               <?php } ?>
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
