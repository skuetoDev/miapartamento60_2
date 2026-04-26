<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
      <head >
        <title><?php echo bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!-- para importar estilos desde functions.php -->
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon" />
        <?php wp_head(); ?>
      </head>
      <div id="page-wrapper">
         <!-- Header -->
         <section id="header">
            <div class="logo">
               <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo-miapartamento60"/>

            </div>
            <!-- Logo -->
               <a  class="title" href="<?php echo home_url(); ?>">
                  <span>Mi</span>Apartamento<span>60</span>
               </a>
               <!-- Nav -->
               <section id="nav">
                  <?php
                     $arg = array(
                        'theme_location' => 'principal',
                        'container' => 'nav',
                        'container_id' => 'nav'
                     );
                     wp_nav_menu($arg);
                        ?>
               </section>
            </section>
         </div>