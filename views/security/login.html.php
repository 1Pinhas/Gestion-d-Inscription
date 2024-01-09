<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="WEBROOT"  method="post">
            <h2 class="log">Connexion</h2>
            <div class="email">
                <label for="login">Email Ou Nom</label>
                <div>
                    <input type="email" class="enter" placeholder="Entrer votre email"  name="login">
                </div>
            </div>
            <div class="password">
                <label for="password">Mot de passe</label>
                <div>
                    <input type="password" class="enter" placeholder="Entrer votre mot de passe"   name="password">
                </div>
            </div>
            <div class="check">
                <div class="remen">
                    <input class="checked" type="checkbox"><span class="che">Me Souvenir</span>
                </div>
                <div class="forget">
                    <a href=""><span class="che">Mot de passe oublié ?</span></a>
                </div>
            </div>
            <div class="login">
                <button type="submit" name ="action"  value="connexion" a>Connecter</button>
            </div>
            <div class="create">
                <a href="">Creer un compte</a>
            </div>
        </form>
    </div>
</body>
</html>