<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="/../public/assets/img/thomas.png">
    <meta name="description" content="Activ'Code - Votre site internet simplement">
    <title>Activ'Code - Développement web</title>
    <link rel="icon" type="image/x-icon" href="/../public/assets/img/thomas.png" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/f1a6751849.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link href="/../public/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-xl text-center" aria-label="Barre de navigation" id="header">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h1 class="fw-bold"><i class="fa-solid fa-bolt fa-flip logo"></i> Activ'Code</h1>
            </a>
        </div>
    </nav>

    <!-- main -->
    <main class="min-vh-85">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6 text-center d-flex flex-column align-self-center pt-5">
                    <h2>OUPS... ERREUR 404</h2>
                    <p><a href="/accueil">Retourne sur Activ'Code ici</a></p>
                </div>
            </div>
    </main>

    <!-- footer -->
    <footer class="container-fluid text-center" id="footer">
        <div class="row">
            <div class="col-12 fw-bold p-3 copy">
                <i class="fa-solid fa-copyright"></i> Tous droits réservés - Activ'Code <?= date("Y") ?>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>