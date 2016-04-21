<?php
/*
  Template Name: Blog
  Description: Page blog du site internet d'Annie Bearez.
*/
?>

<?php get_header();?>

    <div class="blog_section1_photo"></div>

    <div class="container">

      <div class="row">

        <div class="blog_section2_post col-lg-8 col-md-8 col-lg-offset-1 col-md-offset-1">
        	<div id="content">
            <div class="blog_article col-lg-12 col-md-12">
              <div id="blog2_content">
                <?php query_posts('category_name=articles'); ?>
                <?php if(have_posts()) : ?>
                  <?php while(have_posts()) : the_post(); ?> 
                    <div class="post" id="post-<?php the_ID(); ?>"> 
                      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2> 
                      <p class="postmetadata">   <?php the_time('j F Y') ?> par <?php the_author() ?> | Cat&eacute;gorie: <?php the_category(', ') ?> | <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?></p>
                      <div class="post2_content"> 
                        <?php the_content(); ?> 
                        <!-- <a href="<?php echo get_permalink(); ?>"> Lire la suite ...</a> -->
                      </div> 
                    </div> 
                  <?php endwhile; ?> 
                <?php endif; ?> 
              </div>
            </div>
          </div>
        </div>

        <div class="blog_section3_sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <?php get_sidebar();?>
        </div>

      </div>

  </div>

<?php get_footer();?>

