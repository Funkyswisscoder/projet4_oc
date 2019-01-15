<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="./public/css/welcome.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <title>Welcome</title>
</head>
<body>
    <div id="formsContainer">
        <form class="welcomeForm">
            <input type="button" name="loginBtn" value="J'ai un compte!" id="loginBtn" class="firstBtns">
        </form>
        <form class="welcomeForm">
            <input type="button" name="signUpBtn" value="Je m'inscris!" id="signUpBtn" class="firstBtns">
        </form>  
    </div>

    
    <form action="./index.php?redirect=loginCtrl" method="post" id="loginForm" class="display_none">
        <h3>Pseudo:</h3> 
        <input type="text" name="pseudo" value="pseudo" required> <br/>
        <h3>Mot de passe:</h3>
        <input type="password" name="userPwd" required> <br/>
        <input type="submit" value="Valider">
    </form>

    <form action="./index.php?redirect=signUpCtrl" method="post" id="signUpForm" class="display_none">
        <h3>Pseudo:</h3> <br/>
        <input type="text" name="pseudo" value="pseudo" required> <br/>
        <h3>Mot de Passe:</h3><br/>
        <input type="password" name="password" required> <br/>
        <h3>Confirmer Mot de Passe:</h3> <br/>
        <input type="password" name="passwordCheck" required> <br/>
        <h3>Votre adresse e-mail:</h3> <br/>
        <input type="submit" value="Valider">
    </form>
    <script type="text/javascript" src="./public/js/welcome.js"></script>
</body>
</html>
