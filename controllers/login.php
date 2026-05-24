<?php
include_once("config.php");
if (isset($_POST["submit"])) {
    $identifiant = htmlspecialchars($_POST["identifiant"]);
    $mot = htmlspecialchars($_POST["mot"]);

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if (!$conn) {
        die("Échec de la connexion à la base de données: " . mysqli_connect_error());
		
    }
	
	if ($identifiant === "admin" && $mot === "admin123") {
        header("Location: /views/subscribers.php?admin=True");
        exit();
    }
	
    $selection = "SELECT * FROM abonnes WHERE identifiant = ? AND mot_de_passe = ?";
    $stmt = mysqli_prepare($conn, $selection);
    mysqli_stmt_bind_param($stmt, "ss", $identifiant, $mot);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        header("Location: /views/subscribers.php");
        exit();
    } else {
        header("Location: /views/login.php");
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
