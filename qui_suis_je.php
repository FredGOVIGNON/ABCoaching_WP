<?php
/*
  Template Name: Qui-suis-je ?
  Description: Page qui-suis-je du site internet d'Annie Bearez.
*/
?>

<?php get_header();?>
  

    <div class="qui_suis_je_section1_photo"></div>


    <div class="row qui_suis_je_section2">
        
            
            
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div>
    <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
  <?php endif; ?>
          
    </div>

<?php get_footer();?>