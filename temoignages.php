<?php
/*
  Template Name: Témoignages
  Description: Template pour la page témoignages.
*/
?>

<?php get_header();?>

    <div class="temoignages_section1_photo">
    </div>

    <div class="temoignages_section2">
      <div class="row">
        <h1><u>Témoignages</u></h1>
        <div class="temoignages col-lg-offset-1 col-lg-5 col-lg-offset-1 col-md-offset-1 col-md-5 col-md-offset-1 col-sm-12 col-xs-12">
          <img src="images/1460407704_quote.png" class="img-quote">
          <p><strong>Corinne (lundi 14 mai 2012)</strong></p>
          <p><em>« J'ai connu Annie dans ma formation de plongeuse. Vu mon niveau maintenant, ce fut une belle réussite. Aussi, c'est sans peine que j'imagine cette belle personne en coach ! Vous avez fait le bon choix. »</em></p>
          <br>
          <p><strong>Sabine (vendredi 11 mai 2012)</strong></p>
          <p><em>« Annie a une capacité d'écoute exemplaire, sans parler de sa personnalité discrète mais perspicace, sa gentillesse, son professionnalisme...
          Concernant son savoir-faire et ses compétences, je compte bien les tester mais je n'ai aucun doute. »</em>
          </p>
          <img src="images/1460407704_quote_reverse.png" class="img-quote-reverse">
        </div>

        <!--Formulaire-->
        <form class="formulaire col-lg-offset-1 col-lg-4 col-md-offset-1 col-md-5 col-sm-12 col-xs-12">
          <h2>Votre avis m'intéresse...</h2>
          <div class="form-group">
            <label for="Input_nom"></label>
            <input type="text" class="form-control" id="Input_nom" placeholder="Nom, prénom">
          </div>
          <div class="form-group">
            <label for="Input_email"></label>
            <input type="email" class="form-control" id="Input_email" placeholder="Email">
          </div>
          <fieldset class="form-group">
            <label for="Input_telephone"></label>
            <input type="text" class="form-control" id="Input_telephone" placeholder="Téléphone">
          </fieldset>
          <fieldset class="form-group">
            <label for="Input_sujet"></label>
            <input type="text" class="form-control" id="Input_sujet" placeholder="Sujet">
          </fieldset>
          <fieldset class="form-group">
            <label for="Input_texte"></label>
            <textarea class="form-control" id="Input_texte" rows="3" placeholder="Mon message"></textarea>
          </fieldset>
          <button type="submit" class="btn btn-primary pull-right">Envoyer</button>
        </form>
        
      </div>
    </div>


<?php get_footer();?>