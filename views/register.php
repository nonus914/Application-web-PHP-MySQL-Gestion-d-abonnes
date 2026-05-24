<?php include_once "../controllers/register.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
</head>

<body>
    <div class="form-container">
        <div class="form">
            <h1 class="form-title">Inscrivez-vous</h1>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                <div  class="label-input">
                    <label for="nom">Nom:</label>
                    <input type="text" id="nom" name="nom" required>
                </div>
                <div  class="label-input">
                    <label for="prenom">Prénom:</label>
                    <input type="text" id="prenom" name="prenom" required>
                </div>
                <div  class="label-input">
                    <label for="date-naissance">Date de naissance:</label>
                    <input type="date" id="date-naissance" name="date-naissance" required>
                </div>
                <div  class="label-input">
                    <label for="adresse">Adresse:</label>
                    <input type="text" id="adresse" name="adresse" required>
                </div>
                <div  class="label-input">
                    <label for="telephone">Numéro de téléphone:</label>
                    <input type="tel" id="telephone" name="telephone" required>
                </div>
				<div  class="label-input">
                    <label for="tele_fixe">Telephone fixe:</label>
                    <input type="tel" id="tele_fixe" name="tele_fixe" required>
                </div>
                <div  class="label-input">
                    <label for="email">Adresse mail:</label>
                    <input type="email" id="email" name="email" required>
                </div>
				<div  class="label-input">
                    <label for="Profession">Profession:</label>
                    <input type="text" id="Profession" name="Profession" required>
                </div>
                <div  class="label-input">
                    <label for="identifiant">identifiant:</label>
                    <input type="text" id="identifiant" name="identifiant" required>
                </div>
                <div  class="label-input">
                    <label for="mot">mot de passe:</label>
                    <input type="text" id="mot" name="mot" required>
                </div>
                <div class="button-submit">
                    <button type="submit" name="submit" onclick="validateForm()">S'inscrire</button>
                </div>
            </form>
            <div class="login-wrapper">
                <p>Vous avez déjà un compte ? <a class="login-link" href="/views/login.php">Se connecter !</a></p>
            </div>
        </div>
    </div>
    <div class="form-illustration" />
</body>
<script type="text/javascript">
    function validateForm() {
        if (document.getElementById("email").value == "" || document.getElementById("telephone").value == "") {
            alert('Veuillez remplir tous les champs');
        }
    }
</script>

<style lang="css">

body {
    font-family: Arial, Helvetica, sans-serif;
    line-height: 12px;
}

input {
    border: 1px solid #dee0e3;
    border-radius: 4px;
    background-color: transparent;
    padding: 8px;
    margin-top: 8px;
    width: 100%;
    box-sizing: border-box;
}

label {
 text-align: left;
 font-size: 12px;
}

button {
    border: 1px solid #661e4d;
    border-radius: 4px;
    background-color: #661e4d;
    text-align: center;
    color: #FFF;
    width: 100%;
    padding: 8px;
    box-sizing: content-box;
}

button:hover {
    background-color: #F7A3CD;
    border: 1px solid #F7A3CD;
    color:#661e4d;
}

.button-submit {
    display:flex;
    align-items: center;
    justify-content: center;
    margin-top: 24px;
}

.form-container {
    position: relative;
    width: 50%;
}

.form-illustration {       
    position: fixed;
    top: 50px;
    right: 0px;
    width: 50%;
    height: 100%;
    background-image: url(/views/assets/undraw_sign__up_nm4k.svg);
    background-repeat: no-repeat;
    z-index: 1;
}

.form {
    position: absolute;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    width: 400px;
}

.form-title {
    font-weight: lighter;
    margin-bottom: 40px;
    color:#661e4d;
    text-align: center;
}

.label-input {
    margin-top: 12px;
    color: #323337;
}


.login-link {
    text-decoration: none;
    color: #661e4d;
}

.login-link:hover {
    text-decoration: underline;
    color: #F7A3CD;
}

.login-wrapper {
    text-align: center;
    color: #323337;
}
</style>
</html>