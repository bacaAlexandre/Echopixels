<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT)
// error_reporting(0);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Exo:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <?php wp_head(); ?>
    <title>Echo Pixels</title>
  </head>
  <body>
    <header>
      <img class= "logo" src="<?php echo get_template_directory_uri(); ?>/image/echoPixels.jpg" alt="">
      <!-- Mettre la nav ici -->
      <?php wp_nav_menu( array()); ?>
      <div class="lien_association">
        <a href="" target="_blank" class="icone bleu"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
        <a href="" target="_blank" class="icone bleu"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
      </div>
    </header>
