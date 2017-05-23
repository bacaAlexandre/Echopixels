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
        <form>
            <p><input type="text" name="nom" maxlength="50" placeholder="Nom">
               <input type="text" name="objet" maxlength="60" placeholder="Objet"></p>
            <p><input type="email" name="mail" placeholder="e-mail"></p>
            <p><textarea name="message" rows="12" cols="80" placeholder="Message"></textarea></p>
            <p><input type="submit" name="envoi" value="Envoyer"></p>
        </form>
      </div>
  </section>
 </main>

 <?php
 get_footer();
  ?>
