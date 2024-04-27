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

<body id="connectView">
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

        <!--Formulaire basique en bootstrap -->

        <!--<div class="container">
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
        </div>-->

        <?php //var_dump($_POST)
        ?>
        <div class="container col-xl-10 col-xxl-8 px-4 ">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <img src="img/forgotPassword.jpg" alt="">
                </div>
                <div class="col-md-10 mx-auto col-lg-5">
                    <form method="POST" name="connexion" action="" class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Votre login" name="username">
                            <label for="username">Login</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Votre mot de passe" name="userpwd">
                            <label for="userpwd">Mot de passe</label>
                        </div>

                        <button class="w-100 btn btn-lg  mt-4" type="submit" value="connexion" id="btnConnexion">Connexion</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Lien JS Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>