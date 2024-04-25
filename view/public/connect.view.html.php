<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/style.css">
    <!--Lien CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Connexion</h1>
    <nav>
        <ul>
            <li><a href="./">Accueil</a></li>
            <li><a href="?json" target="_blank">API</a> format JSON</li>
            <li>Connexion</li>
        </ul>
    </nav>
    <div id="content">
        <h3>Connexion à notre administration</h3>
        <?php if (isset($error)) : ?>
            <h4 id="alert"><?= $error ?></h4>
        <?php endif ?>
        <form action="" method="POST" name="connexion">
            <input type="text" name="username" placeholder="Votre login" required><br>
            <input type="password" name="userpwd" placeholder="Votre mot de passe" required><br>
            <input type="submit" value="connexion">
        </form>
        <?php //var_dump($_POST)
        ?>
    </div>
    <!--Lien JS Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>