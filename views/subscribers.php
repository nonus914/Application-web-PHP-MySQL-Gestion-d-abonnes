<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tout les abonnés</title>
</head>
<body>
    <div class="subscribers-container">
        <h1 class="subscribers-title">Nos abonnés</h1>
        <?php include "../controllers/subscribers.php" ; ?>
    </div>
    <div class="subscribers-background" />
</body>

<style lang="css">

body {
    font-family: Arial, Helvetica, sans-serif;
    line-height: 20px;
}

li {
    list-style-type: none;
    color:#661e4d;
}

a {
    color: #661e4d;
}

.subscribers-container {
    position: absolute;
    left: 50%;
    transform: translate(-50%, 20%);
    width: 600px;
    padding: 32px;
    border: 1px solid #661e4d;
    border-radius: 12px;
    z-index: 2;
    box-shadow: 5px 5px 5px rgba(222, 224, 227, 0.5);
}

.subscribers-title {
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

.subscribers-background {
    position: fixed;
    top: 60%;
    left: 30%;
    width: 100%;
    height: 100%;    
    background-image: url(/views/assets/undraw_friends_online_re_r7pq.svg);
    background-repeat: no-repeat;
    z-index: 1;
    opacity: 0.7;
}

.subscriber-li {
    display: flex;
    gap: 12px;
    text-align: center;
    justify-content: start;
    border: 1px solid #F7A3CD;
    padding: 12px;
    border-radius: 8px;
    background-color: rgba(247, 163, 205, 0.5);
    margin-bottom: 12px;
}
</style>
</html>