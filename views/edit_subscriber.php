<?php
// Récupérer l'ID de l'abonné 
$id=($_GET['id']);
include_once("../controllers/config.php");

// Récupérer les informations de tous les abonnés

 
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_subscriber'])) {
	$prenom = htmlspecialchars($_POST['first_name']);
	$nom = htmlspecialchars($_POST['last_name']);
	$dateNaissance = htmlspecialchars($_POST['birth_year']);
	$adresse = htmlspecialchars($_POST['address']);
	$telephone = htmlspecialchars($_POST['phone_number']);
	$email = htmlspecialchars($_POST['email']);
	$tele_fixe = htmlspecialchars($_POST['fix_phone']);
	$Profession = htmlspecialchars($_POST['job']);
	$mot = htmlspecialchars($_POST['pwd']);
	$identifiant = htmlspecialchars($_GET['id']);
	
	$stmt = $conn->prepare( "UPDATE abonnes SET Prenom = ?, Nom = ?, Annee_naissance = ?, Adresse = ?, Numero_telephone = ?, Adresse_mail = ?, Numero_telephone_fixe = ?, Profession = ?, Mot_de_passe = ? WHERE Identifiant = '" . $id . "'");
	$stmt->bind_param('sssssssss', $prenom , $nom, $dateNaissance, $adresse,$telephone,$email,$tele_fixe,$Profession,$mot);
	$stmt->execute();
	$stmt->close();
    // Rediriger vers la page de détails de l'abonné 
    header('Location: /views/subscriber.php?id=' . $id . '&admin=true');
	exit();
}

$stmt = $conn->prepare( "SELECT * FROM abonnes WHERE identifiant='" . $id . "'");
$stmt->execute();
$stmt->bind_result($prenom , $nom, $dateNaissance, $adresse,$telephone,$email,$tele_fixe,$Profession,$id,$mot);
$stmt->fetch();
$stmt->close();

// Afficher le formulaire de modification des informations de l'abonné 
$markup = "";

$markup .= '<h1>Modifier les informations de l\'abonné</h1>';

$markup .= '<form method="POST">';

$markup .= '<label for="last_name">Nom :</label>';
$markup .= '<input type="text" id="last_name" name="last_name" value="' . htmlspecialchars($nom) . '"><br>';

$markup .= '<label for="first_name">Prénom :</label>';
$markup .= '<input type="text" id="first_name" name="first_name" value="' . htmlspecialchars($prenom) . '"><br>';

$markup .= '<label for="birth_year">Année de naissance :</label>';
$markup .= '<input type="text" id="birth_year" name="birth_year" value="' . htmlspecialchars($dateNaissance) . '"><br>';

$markup .= '<label for="address">Adresse :</label>';
$markup .= '<input type="text" id="address" name="address" value="' . htmlspecialchars($adresse) . '"><br>';

$markup .= '<label for="phone_number">Numéro de téléphone :</label>';
$markup .= '<input type="text" id="phone_number" name="phone_number" value="' . htmlspecialchars($telephone) . '"><br>';

$markup .= '<label for="email">Adresse e-mail :</label>';
$markup .= '<input type="email" id="email" name="email" value="' . htmlspecialchars($email) . '"><br>';

$markup .= '<label for="fix_phone">Téléphone fixe :</label>';
$markup .= '<input type="text" id="fix_phone" name="fix_phone" value="' . htmlspecialchars($tele_fixe) . '"><br>';

$markup .= '<label for="job">Profession :</label>';
$markup .= '<input type="text" id="job" name="job" value="' . htmlspecialchars($Profession) . '"><br>';

$markup .= '<label for="pwd">Mot de passe :</label>';
$markup .= '<input type="text" id="pwd" name="pwd" value="' . htmlspecialchars($mot) . '"><br>';

$markup .= '<input type="hidden" name="update_subscriber" value="true">';
$markup .= '<button type="submit">Mettre à jour</button>';

$markup .= '</form>';

// Ajouter un bouton de retour à la page de détails de l'abonné
$markup .= '<p><a href="/views/subscriber.php?id=' . $id . '&admin=true">Retour aux détails de l\'abonné</a></p>';

echo $markup;
?>
