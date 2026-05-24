<?php



$id=($_GET['id']);
include_once("config.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_subscriber'])) {
	$stmt = $conn->query( "DELETE FROM abonnes WHERE identifiant='" . $id . "'");
	header('Location: /views/subscribers.php/?admin=true');
}

// Récupérer les informations de tous les abonnés
$stmt = $conn->prepare( "SELECT * FROM abonnes WHERE identifiant='" . $id . "'");
$stmt->execute();
$stmt->bind_result($prenom , $nom, $dateNaissance, $adresse,$telephone,$email,$tele_fixe,$Profession,$id,$mot);
$stmt->fetch();
$stmt->close();

// Afficher les informations de l'abonné
$markup = "";

$markup .= '<h1>Détails de l\'abonné</h1>';

$markup .= '<p>Nom: ' . htmlspecialchars($nom) . '</p>';
$markup .= '<p>Prénom: ' . htmlspecialchars($prenom) . '</p>';
$markup .= '<p>Année de naissance: ' . htmlspecialchars($dateNaissance) . '</p>';
$markup .= '<p>Adresse: ' . htmlspecialchars($adresse) . '</p>';
$markup .= '<p>Numéro de téléphone: ' . htmlspecialchars($telephone) . '</p>';
$markup .= '<p>Adresse e-mail: ' . htmlspecialchars($email) . '</p>';
$markup .= '<p>Identifiant: ' . htmlspecialchars($id) . '</p>';
$markup .= '<p>Mot de passe: ' . htmlspecialchars($mot) . '</p>';
$markup .= '<p>Telephone fixe: ' . htmlspecialchars($tele_fixe) . '</p>';
$markup .= '<p>Profession: ' . htmlspecialchars($Profession) . '</p>';

// Ajouter un bouton de retour à la page liste_abonnes.php
$markup .= '<p><a href="/views/subscribers.php/?admin=true">[ Nos abonnés  ]</a></p>';

//   formulaire  suppression 
$markup .= '<form method="POST">';
$markup .= '<input type="hidden" name="delete_subscriber" value="true">';
$markup .= '<button type="submit" onclick="return confirm(\'Voulez-vous vraiment supprimer cet abonné ?\')">Supprimer cet abonné</button>';
$markup .= '</form>';

//   bouton modification 
$markup .= '<form method="GET" action="/views/edit_subscriber.php">'; //page pour modifier 
$markup .= '<input type="hidden" name="id" value="' . $id . '">';
$markup .= '<button type="submit">Modifier cet abonné</button>';
$markup .= '</form>';

echo $markup;
?>