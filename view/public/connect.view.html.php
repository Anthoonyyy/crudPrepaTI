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
    <h1 class="text-center mt-3">Connexion</h1>
    <nav class="navbar navbar-expand-sm mt-5">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?json" target="_blank">API format JSON</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?connect">Connexion</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div id="content">
        <h3 class="text-center mt-4">Connexion à notre administration</h3>
        <?php if (isset($error)) : ?>
            <h4 id="alert" class="text-center"><?= $error ?></h4>
        <?php endif ?>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <form method="POST" name="connexion" action="">
                    <div class="mb-3">
                        <label for="username" class=" form-label">Login</label>
                        <input type="text" name="username" placeholder="Votre login" class="form-control" id="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="userpwd" class="form-label">Mot de passe</label>
                        <input type="password" placeholder="Votre mot de passe" name="userpwd" class="form-control" id="userpwd" required>
                    </div>
                    <div class="mb-3 text-center">
                        <input type="submit" value="connexion" class="btn btn-outline-primary">
                    </div>
                </form>
            </div>
        </div>

        <?php //var_dump($_POST)
        ?>
    </div>
    <!--Lien JS Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>