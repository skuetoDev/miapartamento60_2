<?php get_header('page'); ?> 
   <body class="no-sidebar is-preload">
      <!-- Main -->
      <section id="main">
         <div class="container">

            <!-- Content -->
            <?php
            if (have_posts()) :
                while (have_posts()) :
                     the_post();
                    ?>
               <article class="box post">
                  <header class="post-header">
                     <h1><?php the_title(); ?></h1>
                  </header>
                  <p class="post-content">
                     <?php the_content(); ?>
               </article>
                  </a>
                    <?php
                endwhile;
            endif;
            ?>
         </div>
      </section>

      <!-- Footer -->
      <?php get_footer(); ?>
