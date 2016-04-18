<?php
/*
  Template Name: Ateliers
  Description: Template pour la page ateliers incluant un planning des prochains ateliers ...
*/
?>

<?php get_header();?>

    <div class="row">
      <div class="ateliers_section1_texte col-lg-offset-1 col-lg-6 col-md-offset-1 col-md-6 col-sm-offset-1 col-sm-6 col-xs-offset-1 col-xs-6">
        <h1>ATELIERS</h1><br>
        <p>Mieux se connaitre, c’est l’enjeu de toute une vie.</p>
        <p>Nous avons tous un vécu différent, qui influence notre façon de nous comporter, de ressentir, <br>d’agir, et qui conditionne notre relation aux autres.</p>
        <p>Ces ateliers fournissent quelques axes de réflexion et d’actions possibles pour mieux <br>nous connaitre et mieux vivre avec les autres.</p>
        <p>Chaque atelier propose un angle d’approche nouveau.</p>
        <p>Tous les ateliers sont indépendants les uns des autres : le groupe est OUVERT.</p>
        <p>Le nombre de participants est limité (10 maxi) afin de garantir un travail personnel pour chacun.</p>
        <p>1 atelier par mois, souvent le dernier jeudi après midi du mois</p>      
      </div>
      <div class="ateliers_section2_photo col-lg-4 col-md-4 hidden-sm hidden-xs">
          <img class="img-coaching" src="<?php bloginfo('template_directory'); ?>/images/ateliers_test1.jpg" alt="Atelier en groupe à Saint Piat">
      </div>
    </div>

    <div class="row ateliers_section3_planning">
      <h2><u>Planning des prochains ateliers :</u></h2>
      <div id="atelier_content">
        <?php query_posts('category_name=Planning-ateliers&showposts=2'); ?>
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?> 
            <?php the_content(); ?> 
          <?php endwhile; ?> 
        <?php endif; ?> 
      </div>

    </div>
    
<?php get_footer();?>