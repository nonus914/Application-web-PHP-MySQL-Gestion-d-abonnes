<?php
$markup = "";

include_once("config.php");

$tri = isset($_GET['tri']) ? $_GET['tri'] : 'nom'; 
$result = mysqli_query($conn, "SELECT * FROM abonnes ORDER BY $tri");

while ($subscriber = mysqli_fetch_array($result)) {
    $markup .= "<li> <div class='subscriber-li'> <p>Nom: {$subscriber['Nom']}</p> <p> Prénom: {$subscriber['Prenom']}</p> <p> Identifiant: {$subscriber['identifiant']}</p> </div> </li>";
    
    if(isset($_GET["admin"]) && $_GET["admin"]== true){
        $markup .= "<p><a href='/views/subscriber.php?id={$subscriber['identifiant']}'> [ Plus d'info ]</a></p><br/>";
    }
}

# étant donné que l'utilisateur doit être soit inscrit, soit connecté pour arriver à la page "nos abonnés"

$markup .= '<h2>Liens utiles : </h2>';
$markup .= '<p><a href="/views/register.php">[ S\'inscrire ]</a></p>';
$markup .= '<p><a href="/views/login.php">[ Se connecter ]</a></p>';

#bouton trier
$markup .= '<h2>Trier les abonnés :</h2>';
$markup .= '<form method="get">';
$markup .= '<label for="tri">Trier par :</label>';
$markup .= '<select name="tri" id="tri">';
$markup .= '<option value="nom" ' . ($tri == 'nom' ? 'selected' : '') . '>Nom</option>';
$markup .= '<option value="prenom" ' . ($tri == 'prenom' ? 'selected' : '') . '>Prénom</option>';
$markup .= '<option value="identifiant" ' . ($tri == 'identifiant' ? 'selected' : '') . '>Identifiant</option>';
$markup .= '</select>';
$markup .= '<input type="submit" value="Trier">';
$markup .= '</form>';

echo $markup;
?>
