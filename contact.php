<!doctype <!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Nous contacter - village vacances La Manne | Var, Côte d’Azur, Provence</title>
  <meta name='description' content='Nous contacter - village vacances La Manne | Var, Côte d’Azur, Provence' />
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- CSS BOOSTRAP -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
  <!-- mon CSS -->
  <link rel="stylesheet" type="text/css" media="screen" href="css/contact.css" />
  <!-- typo roboto avec ttes les graisses -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700,900" rel="stylesheet">
  <!-- icone font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
    crossorigin="anonymous">
  <!-- HERE -->



</head>

<body>

  <?php include "top-menu.html";?>

  <div class="container">

    <div class="row">

      <div class="col-12 col-md-6">

        <div class="row">
          <div class="col-12">
            <h3 class="accroche-contact-h1">Demande de disponibilités au village vacances La Manne
            </h3>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <h2 class="textebody">Complétez le formulaire ci-dessous, nous vous répondrons très rapidement. Cette demande n'est en aucun cas une
              réservation ferme, elle ne vous engage en rien, simplement à obtenir l'information sur la disponibilité d'une
              <strong>location de vacances</strong> au
              <strong>village vacances La Manne</strong>.</h2>
          </div>
        </div>

      </div>

      <div class="col-12 col-md-6">

        <form class="form-group" action="contact/validation-contact-lamanne.php" method="post"> 

          <input type="text" class="form-control mt-5 mb-3" name="nom" placeholder="Nom" required>

          <input type="text" class="form-control mb-3" name="prenom" placeholder="Prénom" required>

          <input type="email" class="form-control mb-3" name="email" placeholder="E-Mail" required>

          <div class="form-group mb-3">
            <select class="form-control" name="civilite">
              <option>Civilité</option>
              <option>Mademoiselle</option>
              <option>Madame</option>
              <option>Monsieur</option>
            </select>
          </div>

          <label class="text-date" for="arrive">Date d'arrivée</label>
          <input style="height:38px" type="date" class="form-control mb-3" name="arrive" required>

          <label class="text-date" for="depart">Date de départ</label>
          <input style="height:38px" type="date" class="form-control mb-3" name="depart" required>


          <select class="form-control mb-3" name="hebergement" required>
            <option value="">Type d'Hébergement souhaité</option>
            <option value="chambre">Chambre</option>
            <option value="maisonnette">Maisonnette</option>
          </select>

          <input type="text" class="form-control mb-3" name="pax" placeholder="Nombre total de personnes" required>

          <input type="text" class="form-control mb-3" name="adulte" placeholder="Moins de 12 ans " required>

          <input type="text" class="form-control mb-3" name="enfant" placeholder="A partir de 13 ans" required>

          <select class="form-control mb-3" name="formule" required>
            <option value="">Formule souhaitée ?</option>
            <option value="demi-pension">Demi-pension</option>
            <option value="pension complète">Pension complète</option>
            <option value="sans pension">Sans pension</option>
          </select>

          <div class="custom-control custom-checkbox">
            <label class="checkbox-inline text-checkbox">Présence d'un animal ?
              <input type="checkbox" name="animal" value="oui"> Oui
            </label>
            <label class="checkbox-inline text-checkbox">
              <input type="checkbox" name="animal" value="non"> Non
            </label>
          </div>


          <textarea class="form-control mb-4 mt-4" name="commentaire" rows="5">Commentaire :</textarea>

          <button type="submit" class="btn btn-primary">Envoyez !</button>

        </form>

      </div>

    </div>
    
  </div>

  <div class="container-fluid">

    <div class="row text-center">
      <div class="col-12">
        <h2 class="accroche-h2 rubrique">Contactez-nous</h2>
      </div>
    </div>

    <div class="row text-center">

      <div class="col-12 col-md-3">
        <a class="picto-color liensousmenu" href="tel:+123456789">
          <i class="fas fa-phone fa-3x"></i>
          <h3>Téléphone</h3>
          <p class="text-contact">+123456789</p>
        </a>
      </div>

      <div class="col-xs-12 col-md-3">
        <i class="picto-color fas fa-home fa-3x"></i>
        <h3 class="picto-color">Adresse</h3>
        <p class="text-contact picto-color">1329 Route de Cabasson, 83230 Bormes-les-Mimosas</p>
      </div>

      <div class="col-xs-12 col-md-3">
        <a class="picto-color liensousmenu" href="mailto:bormes@touristravacances.com">
          <i class="fas fa-envelope fa-3x"></i>
          <h3>E-mail</h3>
          <p class="text-contact">bormes@touristravacances.com</p>
        </a>
      </div>

      <div class="col-xs-12 col-md-3">
        <a class="picto-color liensousmenu" href="https://m.me/Touristralamanne">
          <i class="fab fa-facebook-messenger fa-3x"></i>
          <h3>Messenger</h3>
          <p class="text-contact">Envoyez-nous un message</p>
        </a>
      </div>

    </div>

  </div>





  <!-- CONTACT FORM -->





  <div class="row">
    <div class="col-12 padding0">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2911.9279058062634!2d6.3325643157178755!3d43.127040679142866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c92dc51701bd9d%3A0x45ea06569ff471e9!2sTouristra+La+Manne!5e0!3m2!1sfr!2sfr!4v1533197307973"
        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>
      </iframe>
    </div>
  </div>
  </div>
  </div>





  <!-- FOOTER -->

  <?php include "footer/footer.html";?>

  <!-- Footer -->


  <!-- SCRIPT -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

  <script type="text/javascript" src="js/menu-photo-hoover.js"></script>



  <!--  -->
</body>


</html>