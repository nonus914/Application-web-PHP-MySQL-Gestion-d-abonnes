<?php include_once "../controllers/login.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
</head>

<body>
    <div class="form-container">
        <div class="form">
            <h1 class="form-title">Connectez-vous</h1>
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" >
                <div  class="label-input">
                    <label for="identifiant">Identifiant:</label>
                    <input type="text" id="identifiant" name="identifiant" required>
                </div>
                        <div  class="label-input">
                    <label for="mot">Mot de passe:</label>
                    <input type="text" id="mot" name="mot" required>
                </div>
                    <div class="button-submit">
                        <button type="submit" name="submit" onclick="validateForm()"> Se connecter </button>
                    </div>
                </form>
            <div class="register-wrapper">
                <p>Vous n'avez pas de compte? <a class="register-link" href="/views/register.php">S'inscrire !</a></p>
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
    background-image: url(/views/assets/undraw_login_re_4vu2.svg);
    background-repeat: no-repeat;
    z-index: 1;
}

.form {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,50%);
    width: 400px;
}

.label-input {
    margin-top: 24px;
    color: #323337;
}


.form-title {
    font-weight: lighter;
    margin-bottom: 40px;
    color:#661e4d;
    text-align: center;
}

.register-link {
    text-decoration: none;
    color: #661e4d;
}

.register-link:hover {
    text-decoration: underline;
    color: #F7A3CD;
}

.register-wrapper {
    text-align: center;
    color: #323337;
}

</style>

</html>