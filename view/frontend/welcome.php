<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/welcome.css">
    <title>Welcome</title>
</head>
<body>
    <form action="">
        <input type="button" name="loginBtn" value="J'ai un compte!" id="loginBtn" class="firstBtns">
    </form>
    <form action="">
        <input type="button" name="signUpBtn" value="Je m'inscris!" id="signUpBtn" class="firstBtns">
    </form>
    
    <form action="./controller/listPostsCtrl.php" method="post" id="loginForm" class="display_none">
        Pseudo: <br/>
        <input type="text" name="pseudo" value="pseudo" required> <br/>
        Mot de passe: <br/>
        <input type="password" name="password" required> <br/>
        <input type="submit" value="Valider">
    </form>

    <form action="./controller/listPostsCtrl.php" method="post" id="signUpForm" class="display_none">
        Pseudo: <br/>
        <input type="text" name="pseudo" value="pseudo" required> <br/>
        Mot de passe: <br/>
        <input type="password" name="password" required> <br/>
        Confirmer Mot de Passe: <br/>
        <input type="password" name="passwordcheck" required> <br/>
        <input type="submit" value="Valider">
    </form>
    <script type="text/javascript" src="./public/js/welcome.js"></script>
</body>
</html>