<?php get_header('page'); ?>
   <body class="no-sidebar is-preload">
      <!-- Main -->
      <section id="main" role="main">
         <div class="container">

            <!-- Content -->
            <?php
            if (have_posts()) :
                while (have_posts()) :
                     the_post();
                    ?>
               <article class="box post">
                  <?php if (get_the_content()) : ?>
                     <div class="post-content">
                        <?php the_content(); ?>
                     </div>
                  <?php endif; ?>
               </article>
                    <?php
                endwhile;
            endif;
            ?>
         </div>
      </section>

      <!-- Footer -->
      <?php get_footer(); ?>
