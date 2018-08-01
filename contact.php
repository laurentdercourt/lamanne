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
</head>

<body>
  <div class="container-fluid">
    <?php include "top-menu.html";?>

    <div class="row accroche">
      <div class="col-12 col-md-9">
        <h1 class="accroche-h1 rubrique">Demande de disponibilités</br>
          <strong>Village vacances La Manne
            <strong>
        </h1>
      </div>
      <div class="col-md-3">
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-9">
        <h2 class="textebody">Complétez le formulaire ci-dessous, nous vous répondrons très rapidement. Cette demande n'est en aucun cas une réservation
          ferme, elle ne vous engage en rien, simplement à obtenir l'informtation sur la disponibilité d'une
          <strong>location de vacances</strong> au
          <strong>village vacances La Manne</strong>.</h2>
      </div>
      <div class="col-md-3">
      </div>
    </div>
  </div>

  <!-- CONTACT FORM -->

  <div class="my-container">
    <form class="needs-validation" novalidate>
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <input type="text" class="form-control" id="nom" placeholder="Nom" required>
        </div>
        <div class="col-md-4 mb-3">
          <input type="text" class="form-control" id="prenom" placeholder="Prénom" required>
        </div>
        <div class="col-md-4 mb-3">
          <div class="form-group">
            <select class="form-control" id="civilite">
              <option>Civilité</option>
              <option>Mademoiselle</option>
              <option>Madame</option>
              <option>Monsieur</option>
            </select>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <input type="date" class="form-control" id="arrive" required>
          <label class="text-date" for="arrive">Date d'arrivée</label>
        </div>
        <div class="col-md-4 mb-3">
          <input type="date" class="form-control" id="depart" required>
          <label class="text-date" for="depart">Date de départ</label>
        </div>
        <div class="col-md-4 mb-3">
          <select class="form-control" id="hebergement">
            <option>Type d'Hébergement souhaité</option>
            <option>Chambre</option>
            <option>Maisonnette</option>
          </select>
        </div>
        <div class="col-md-4 mb-3">
          <input type="text" class="form-control" id="pax" placeholder="Nombre total de personnes" required>
        </div>
        <div class="col-md-4 mb-3">
          <input type="text" class="form-control" id="adulte" placeholder="Moins de 12 ans " required>
        </div>
        <div class="col-md-4 mb-3">
          <input type="text" class="form-control" id="enfant" placeholder="A partir de 13 ans" required>
        </div>
        <div class="col-md-4 mb-3">
          <select class="form-control" id="formule">
            <option>Formule souhaitée</option>
            <option>Demi-pension</option>
            <option>Pension complète</option>
          </select>
        </div>
        <div class="col-md-8 mb-3 text-checkbox">
          <div class="custom-control custom-checkbox">
            <span>Présence d'un animal ? </span>
            <label class="checkbox-inline">
              <input type="checkbox" id="oui"> Oui
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="non"> Non
            </label>
          </div>
        </div>
        <div class="col-md-12 mb-3">
          <textarea class="form-control" id="commentaire" rows="5">Commentaire :</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </div>
  </form>
  <div class="row accroche2">
    <div class="col-12 col-md-9">
      <h2 class="accroche-h2 rubrique">Contactez-nous</h2>
    </div>
    <div class="col-md-3">
    </div>
  </div>
  <iframe width="1900" height="450" frameborder="0" style="border:0"
src="https://image.maps.api.here.com/mia/1.6/mapview
?app_id=Mar9K4JUMjYXKiNBnJZb 
&app_code=4ZfxAvuhWhCKk2K3bSn2bA 
&c=52.431,13.3845
&z=8
" allowfullscreen></iframe>



  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      'use strict';
      window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
          form.addEventListener('submit', function (event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>



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