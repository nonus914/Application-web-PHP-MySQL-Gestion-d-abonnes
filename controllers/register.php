<?php

    if(isset($_POST["submit"]))
    {
        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prenom"]);
        $dateNaissance = htmlspecialchars($_POST["date-naissance"]);
        $adresse = htmlspecialchars($_POST["adresse"]);
        $telephone = htmlspecialchars($_POST["telephone"]);
		$tele_fixe = htmlspecialchars($_POST["tele_fixe"]);
        $email = htmlspecialchars($_POST["email"]);
		$Profession = htmlspecialchars($_POST["Profession"]);
        $identifiant = htmlspecialchars($_POST["identifiant"]);
        $mot = htmlspecialchars($_POST["mot"]);

        // Vérification de l'âge de l'abonné
        $annee = intval(explode("-",$dateNaissance)[0]);
        $age = 2023 - $annee;


        if ($age < 18) {
            // L'abonné est mineur, afficher un message d'erreur
            echo "Désolé, vous devez être majeur pour vous inscrire.";
            die();
        }  
        
        if(strlen($telephone) != 10 or strval($telephone)[0] != '0')
        {
            // le numéro de téléphone est éronnée
            die("le numéro de téléphone est éronné.");
        }
        
		
        include_once("config.php");
		$enregistrement=$conn->prepare("INSERT INTO abonnes (Prenom, Nom, Annee_naissance, Adresse, Numero_telephone, Adresse_mail, Numero_telephone_fixe, Profession, identifiant, Mot_de_passe) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $enregistrement->bind_param('ssssssssss', $prenom , $nom, $dateNaissance, $adresse,$telephone,$email,$tele_fixe,$Profession, $identifiant, $mot);
		$enregistrement->execute();
		$enregistrement->close();
        header("Location: /views/subscribers.php");
		
    }
	?>