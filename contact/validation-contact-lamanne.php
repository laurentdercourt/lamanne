<!DOCTYPE html>

<html>

<head>
<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Location vacances, village club - vacances au soleil | Var, Bormes Les Mimosas, La Manne</title>
	<meta name='description' content='Votre location de vacances dans Var pour passer des vacances en famille dans un domaine en plein coeur de la pinède en Provence, rendez-vous au village club Touristra La Manne à Bormes Les Mimosas'
	/>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS BOOSTRAP -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
	   crossorigin="anonymous">
	<!-- mon CSS -->
	<link rel="stylesheet" type="text/css" media="screen" href="contact-lamanne.css" />
	<!-- typo roboto avec ttes les graisses -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700,900" rel="stylesheet">
	<!-- icone font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
	   crossorigin="anonymous">


</head>



<body>
    <div class="contact-pageheader">
        <div class="container scale-up-center">
            <div class="row">
                <div class="col-12">
                    <div class="contact-caption">
                        <h1 class="contact-title">Message bien reçu !</h1>
                        <p class="contact-text">On se dépêche de vous répondre, surveillez votre boîte mail.</p>
                        <p class="contact-text">Retour automatique à l'accueil du site d'ici quelques instants </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
<?php

$nomInternaute = htmlspecialchars (isset($_POST['nom']) ? $_POST['nom'] : NULL);
$prenomInternaute = htmlspecialchars (isset($_POST['prenom']) ? $_POST['prenom'] : NULL);
$emailInternaute = isset($_POST['email']) ? $_POST['email'] : NULL ;
$civiliteInternaute = isset($_POST['civilite']) ? $_POST['civilite'] : NULL ;
$dateArrivee = isset($_POST['arrive']) ? $_POST['arrive'] : NULL ;
$dateDepart = isset($_POST['depart']) ? $_POST['depart'] : NULL ;
$typeHebergement = isset($_POST['hebergement']) ? $_POST['hebergement'] : NULL ;
$nbrePersonnes = isset($_POST['pax']) ? $_POST['pax'] : NULL ;
$nbreEnfants = isset($_POST['enfant']) ? $_POST['enfant'] : NULL ;
$nbreAdultes = isset($_POST['adulte']) ? $_POST['adulte'] : NULL ;
$formuleInternaute = isset($_POST['formule']) ? $_POST['formule'] : NULL ;
$commentaireInternaute = isset($_POST['commentaire']) ? $_POST['commentaire'] : NULL ;
$animalInternaute=isset($_POST['animal']) ? $_POST['animal'] : NULL ;


if ($animalInternaute === "oui") {
    $animalvalide="l'internaute a déclaré un animal";
} else if ($animalInternaute === "non") {
    $animalvalide="l'internaute n'a pas déclaré venir avec un animal";
} else {
    $animalvalide="pas de réponse";
}

$mail = 'bormes@touristravacances.com'; // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
{
    $passage_ligne = "\r\n";
} else {
    $passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.
// $message_txt = $messageInternaute; // à changer
$message_html = "<html><head></head><body>
<div>Civilité : ".$civiliteInternaute."</div>
<div>Prénom : ".$prenomInternaute."</div>
<div>Nom : ".$nomInternaute."</div>
<div>Email : ".$emailInternaute."</div>
<div>Date séjour : du ".$dateArrivee." au ".$dateDepart."</div>
<div>Hébergement souhaité : ".$typeHebergement."</div>
<div>Nombre total de personnes : ".$nbrePersonnes.", dont ".$nbreAdultes." adultes + ".$nbreEnfants." enfants.</div>
<div>Animal : ".$animalvalide."</div>
<div>Formule : ".$formuleInternaute."</div>
<div>".$commentaireInternaute."</div>
</body></html>";

//==========

//=====Création de la boundary
$boundary = "-----=" . md5(rand());
//==========

//=====Définition du sujet.
$sujet = "demande d'information site Village Vacances La Manne";
//=========

//=====Création du header de l'e-mail.
$header = "From:" . $emailInternaute . $passage_ligne;
$header .= "Reply-to:" .$emailInternaute . $passage_ligne;
$header .= "MIME-Version: 1.0" . $passage_ligne;
$header .= "X-Priority: 3".$passage_ligne;
$header .= "Content-Type: multipart/alternative;" . $passage_ligne . " boundary=\"$boundary\"" . $passage_ligne;
//==========

//=====Création du message.
$message = $passage_ligne . "--" . $boundary . $passage_ligne;

//=====Ajout du message au format texte.
$message .= "Content-Type: text/plain; charset=\"ISO-8859-1\"" . $passage_ligne;
$message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne;
$message .= $passage_ligne . "Civilité : ". $civiliteInternaute . $passage_ligne;
$message .= $passage_ligne . "Nom : ". $nomInternaute . $passage_ligne;
$message .= $passage_ligne . "Prenom : ". $prenomInternaute . $passage_ligne;
$message .= $passage_ligne . "Email : ". $emailInternaute . $passage_ligne;
$message .= $passage_ligne . "Date de début de séjour : ". $dateArrivee . $passage_ligne;
$message .= $passage_ligne . "Date de fin de séjour : ". $dateDepart . $passage_ligne;
$message .= $passage_ligne . "Hébergement souhaité : ". $typeHebergement . $passage_ligne;
$message .= $passage_ligne . "Nombre de total de personnes : ". $nbrePersonnes . $passage_ligne;
$message .= $passage_ligne . "Adulte(s) : ". $nbreAdultes . $passage_ligne;
$message .= $passage_ligne . "Adulte(s) : ". $nbreEnfants . $passage_ligne;
$message .= $passage_ligne . "Animal : ". $animalvalide . $passage_ligne;
$message .= $passage_ligne . "Formule : ". $formuleInternaute . $passage_ligne;
$message .= $passage_ligne . "Commentaire : ". $commentaireInternaute . $passage_ligne;

//==========
$message .= $passage_ligne . "--" . $boundary . $passage_ligne;
//=====Ajout du message au format HTML
$message .= "Content-Type: text/html; charset=\"ISO-8859-1\"" . $passage_ligne;
$message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne;
$message .= $passage_ligne . $message_html . $passage_ligne;
//==========
$message .= $passage_ligne . "--" . $boundary . "--" . $passage_ligne;
$message .= $passage_ligne . "--" . $boundary . "--" . $passage_ligne;
//==========

//=====Envoi de l'e-mail.
mail($mail, $sujet, $message, $header);
//==========



?>

<script>
setTimeout(" window.location.href='../index.php' ", 5500);
</script>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- SCRIPT  -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</body>

</html>