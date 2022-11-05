<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="./assets/img/pnj/cv.jpg">
    <meta name="description" content="Activ'Code - Votre site internet simplement">
    <title>Activ'Code - Développement web</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/bolt.jpg" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/f1a6751849.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link href="./assets/css/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-xl text-center fixed-top" aria-label="Barre de navigation" id="header">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h1 class="fs-4 fw-bold"><i class="fa-solid fa-bolt fa-flip"></i> Activ'Code</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Basculer la navigation">
                <span class="fw-bold"><i class="fa-solid fa-ellipsis-vertical"></i></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbar">
                <ul class="navbar-nav fw-bold">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Nos services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Foire aux questions
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- main -->
    <main>
        <div class="container-fluid pt-main pb-main">
            <div class="row p-3 min-vh-50">
                <div class="col-12 col-md-8 text-center d-flex flex-column align-self-center">
                    <h2>Activ'Code?</h2>
                    <p>Activ'Code est une Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod repudiandae perferendis error sit sunt provident fuga odit sed ipsum sapiente accusamus officiis laboriosam molestias, maiores perspiciatis tempore, ducimus cum officia placeat corrupti corporis harum rem soluta voluptatibus! Laboriosam ullam numquam, distinctio a ex esse ducimus omnis. Adipisci architecto quibusdam illum!</p>
                </div>
                <div class="col-12 col-md-4 text-center d-flex align-self-center justify-content-center">
                    <img class="img-thomas floating pb-3" src="./assets/img/thomas.png" alt="Personnage cartoon qui représente Thomas Guillemont">
                </div>
            </div>
            <div class="row p-3">
                <div class="col-12 text-center">
                    <h2>Lorem ipsum dolor sit amet.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod repudiandae perferendis error sit sunt provident fuga odit sed ipsum sapiente accusamus officiis laboriosam molestias, maiores perspiciatis tempore, ducimus cum officia placeat corrupti corporis harum rem soluta voluptatibus! Laboriosam ullam numquam, distinctio a ex esse ducimus omnis. Adipisci architecto quibusdam illum!</p>
                </div>
            </div>
            <div class="row p-3">
                <div class="col-12 text-center">
                    <h2>Ils nous font confiance !</h2>
                    <p>Activ'Code prend soins de ses clients.<br>
                        Comme eux, optez pour la simplicité</p>
                </div>
                <div class="col-12 col-sm-6 d-flex justify-content-center p-2">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Cécile</h5>
                            <p><i class="fa-solid fa-star stars"></i><i class="fa-solid fa-star stars"></i><i class="fa-solid fa-star stars"></i><i class="fa-solid fa-star stars"></i><i class="fa-solid fa-star stars"></i></p>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem voluptatibus libero unde deleniti exercitationem iusto odit doloremque ipsum a dolore!</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 d-flex justify-content-center p-2">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Alain</h5>
                            <p><i class="fa-solid fa-star stars"></i><i class="fa-solid fa-star stars"></i><i class="fa-solid fa-star stars"></i><i class="fa-solid fa-star stars"></i><i class="fa-regular fa-star stars"></i></p>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam quibusdam saepe animi tenetur recusandae cupiditate. Debitis molestias neque quibusdam voluptas. Provident distinctio officia ea vero sequi sunt culpa aliquid asperiores facilis est.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <!-- footer -->
    <footer class="container-fluid text-center" id="footer">
        <div class="row">
            <div class="col-12 col-md-6 d-flex flex-column p-3">
                <h3>Contact</h3>
                <a href="mailto:thomas.guillemont@hotmail.fr"><i class="fa-solid fa-envelope"></i> thomas.guillemont@hotmail.fr</a>
                <a href="tel:0699230675"><i class="fa-solid fa-mobile"></i> 06 99 23 06 75</a>
            </div>
            <div class="col-12 col-md-6 d-flex flex-column p-3">
                <h3>A propos</h3>
                <a href="#">Mentions légales</a>
                <a href="#">Politique de confidentialité</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 fw-bold p-3">
                <i class="fa-solid fa-copyright"></i> Tous droits réservés - Activ'Code <?= date("Y") ?>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>