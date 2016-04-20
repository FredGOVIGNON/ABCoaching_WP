<?php
/*
  Template Name: Contact
  Description: Template pour la page contact.
*/
?>

<?php get_header();?>

  <div class="row contact_section1_photo">
  </div>

  <div class="row">
    
    <!--Bloc contact-->
    <div class="contact_section2 col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12 col-xs-12">

    <div class= "contact">
      <h1><u>Contact</u></h1><br>
      <p>41 Rue Robert Poisson<br>28130 SAINT PIAT<br>PARIS : Place d'Italie, Nationale<br><br>06 87 68 13 99<br><br>annie.bearez@wanadoo.fr</p><br><br>
    </div>

    <div class="sncf">
      <img src="./images/train-logo-icon-68833.png" alt="Horaires de train">
      <a href="http://www.voyages-sncf.com/billet-train/horaires">Pour consulter les horaires de train</a>
    </div>
    
    <!--Carte de localisation-->
    <div class="maps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2641.7611968077867!2d1.581280550808675!3d48.537808031078235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e41064cb21fb51%3A0x2e86372cadd676!2s41+Rue+Robert+Poisson%2C+28130+Saint-Piat%2C+France!5e0!3m2!1sen!2sus!4v1460479440735" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

  </div>
 
  <div class="section3_formulaire">
    <!--Formulaire-->
    <form class="formulaire col-lg-offset-1 col-lg-4 col-lg-offset-1 col-md-offset-1 col-md-4 col-md-offset-1 col-sm-10 col-xs-10">
      <h3>Formulaire de contact</h3>
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