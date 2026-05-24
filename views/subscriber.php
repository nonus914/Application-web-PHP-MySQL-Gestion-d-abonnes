
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info abonné</title>
</head>
<body>
    <div class="subscriber-container">
        <h1 class="subscriber-title">Détails de l'abonné</h1>
        <?php include "../controllers/subscriber.php"; ?>
    </div>
    <div class="subscriber-background" />
</body>

<style lang="css">
body {
    font-family: Arial, Helvetica, sans-serif;
    line-height: 20px;
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

a,p {
    color: #661e4d;
}

.subscriber-container {
    position: absolute;
    left: 50%;
    transform: translate(-50%, 50%);
    width: 600px;
    padding: 32px;
    border: 1px solid #661e4d;
    border-radius: 12px;
    z-index: 2;
    box-shadow: 5px 5px 5px rgba(222, 224, 227, 0.5);
}

.subscriber-title {
    font-weight: lighter;
    background-color:#661e4d;
    color: #fff;
    text-align: center;
    box-sizing: content-box;
    border: 1px solid #661e4d;
    border-radius: 12px;
    margin-bottom: 24px;
    padding: 24px;
}

.subscriber-background {
    position: fixed;
    top: 55%;
    left: 20%;
    width: 100%;
    height: 100%;    
    background-image: url(/views/assets/undraw_personal_file_re_5joy.svg);
    background-repeat: no-repeat;
    z-index: 1;
    opacity: 0.7;
}
</style>
</html>