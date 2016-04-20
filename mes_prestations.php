<?php
/*
  Template Name: Mes prestations (coaching et formations)
  Description: Template pour coaching et formations.
*/
?>

<?php get_header();?>

    <div class="row">
      <div class="formations_section1_texte col-lg-offset-1 col-lg-6 col-md-offset-1 col-md-6 col-sm-offset-1 col-sm-6 col-xs-offset-1 col-xs-6">
        <!-- <h1>FORMATIONS</h1>
        <h2>Ma démarche - peu de théorie</h2>
        <p>Ma démarche est essentiellement basée sur le « vivre la thématique à apprendre » à travers des exercices appropriés , les participants découvrent la matière à apprendre.</p>
        <p>Nous exploitons également ce qui se passe au sein du groupe de formation pour comprendre les concepts développés.</p>
        <h2>Ma philosophie</h2>
        <p>Quand un homme a faim, mieux vaut lui apprendre à pêcher que de lui donner un poisson."<br>
        Confucius</p>
        <h2>Ma méthode</h2>
        <p>Je m’appuie sur le processus d’apprentissage très simple et pragmatique :</p>
        <ul>
          <li>inconsciemment incompétent : je ne sais même pas que je ne sais pas !</li>
          <li>consciemment incompétent : je réalise que je ne sais pas</li>
          <li>consciemment compétent : je commence à apprendre</li>
          <li>inconsciemment compétent : j’ai acquis une certaine maitrise</li>
          <li>apte à transmettre le savoir : je peux enseigner ce savoir acquis</li>
        </ul>
        <p>Prenez l’exemple de : apprendre à rouler en vélo<br></p>
        <p>  tout petit, je ne sais même pas que je ne sais pas rouler, je ne sais meme pas que le vélo existe !<br>&nbsp;&nbsp;puis, je découvre le vélo, mais je ne sais pas m’en servir<br>&nbsp;&nbsp;puis, je roule avec les petites roues derrière<br>&nbsp;&nbsp;puis, j’ote les petites roues, je tombe parfois, je roule parfois<br>&nbsp;&nbsp;puis, je profite du paysage en roulant<br>&nbsp;&nbsp;puis, si je le souhaite, je peux enseigner à mes enfants à rouler en vélo</p> -->
      <?php
          // 1. on défini ce que l'on veut
          $args = array(
              'post_type' => 'post',
              'posts_per_page' => 1,
              'category_name' => get_the_title().'-prestation'
          );

          // 2. on exécute la query
          $my_query = new WP_Query($args);

          // 3. on lance la boucle !
          if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
      ?> 
              <div class="col-md-12 about_me"> 
                  <?php the_content(); ?>
              </div>
      <?php
          endwhile;
          endif;

          // 4. On réinitialise à la requête principale (important)
          wp_reset_postdata();
      ?>
      </div>
      <div class="formations_section2_photo col-lg-4 col-md-4 hidden-sm hidden-xs">
          <img class="img-coaching" src="./images/formation_test1.jpg" alt="Formation nouvelle étape de la vie">
      </div>
    </div>
    
<?php get_footer();?>