<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backyard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script.js" async></script>
    <link rel="stylesheet" href="stylesheet.css">
    
</head>
<body>
<body>
    <header>
    <div class ="container"></div>
        <div class="row">
            <div class="col">
        <img src="logo4.png" class="img-fluid" alt="logo" >
        </div>
        <div class="col">
        <h1 justify-text-center>Backyard</h1>
        <h3>Une autre idée du vêtement</h3> 
        </div>
        <div class="col">
        <ul class="nav justify-content-end">
            <li class="nav-item">
            <a class="nav-link" href="#">Inscription</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Connexion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Panier</a>
                </li>
        </ul>
        </div>
        
    </div>
    </header>
    
    <div class="container justify-content-evenly" >
    <button type="button" class="btn opacity-100" dropdown-toggle data-bs-toggle="dropdown" aria-expanded="false">
    Femme
    </button>
    <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">T-shirts/Tops</a></li>
    <li><a class="dropdown-item" href="#">Pulls</a></li>
    <li><a class="dropdown-item" href="#">Manteaux</a></li>
    <li><a class="dropdown-item" href="#">Blazers/Vestes</a></li>
    <li><a class="dropdown-item" href="#">Pantalons/Shorts</a></li>
    <li><a class="dropdown-item" href="#">Jupes/Robes</a></li>
    </ul>
    <button type="button" class="btn opacity-100" dropdown-toggle data-bs-toggle="dropdown" aria-expanded="false">
    Homme
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">T-shirts/Tops</a></li>
    <li><a class="dropdown-item" href="#">Pulls</a></li>
    <li><a class="dropdown-item" href="#">Manteaux</a></li>
    <li><a class="dropdown-item" href="#">Blazers/Vestes</a></li>
    <li><a class="dropdown-item" href="#">Pantalons/Shorts</a></li>
    </ul>
    <button type="button" class="btn opacity-100" dropdown-toggle data-bs-toggle="dropdown" aria-expanded="false">
        Enfant
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">T-shirts/Tops</a></li>
            <li><a class="dropdown-item" href="#">Pulls</a></li>
            <li><a class="dropdown-item" href="#">Manteaux</a></li>
            <li><a class="dropdown-item" href="#">Vestes</a></li>
            <li><a class="dropdown-item" href="#">Pantalons/Shorts</a></li>
            <li><a class="dropdown-item" href="#">Jupes/Robes</a></li>
        </ul>
        <button type="button" class="btn opacity-100" dropdown-toggle data-bs-toggle="dropdown" aria-expanded="false">
            Unisexe
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">T-shirts/Tops</a></li>
                <li><a class="dropdown-item" href="#">Pulls</a></li>
                <li><a class="dropdown-item" href="#">Manteaux</a></li>
                <li><a class="dropdown-item" href="#">Blazers/Vestes</a></li>
                <li><a class="dropdown-item" href="#">Pantalons/Shorts</a></li>
                <li><a class="dropdown-item" href="#">Jupes/Robes</a></li>
            </ul>
</div>
<div class="row">
    <form action="" method="post" enctype="multipart/form-data">
            <h2>Formulaire d'inscription</h2> 
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom"><br>
            <label for="prenom">Prénom :</label>
            <input type="prenom" name="prenom" id="prenom"><br>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email"><br>
            <label for="password">Mot de passe:</label>
            <input type="password" name="password" id="password">
            <label for="confirm_password">Confirmez votre mot de passe:</label>
            <input type="password" name="confirm_password" id="password">
    <p id="error"></p>
    <button class="btn btn-">Valider</button>
    <button class="btn btn-secondary">Retour</button>
</form>
</div>
<footer>
    <ul2>
        <li>Instagram</li>
        <li>Facebook</li>
        <li>Mentions Légales</li>
        <li>CGV</li>
    </ul2>
</footer>  
</body>
</html>
<p>
<?php
include './connectdb.php';
            //tester si la super globale $_GET["error"] existe
            if(isset($_GET["error"])){
                //tester la valeur de $_GET["error"]
                switch ($_GET["error"]) {
                    case 1:
                        echo "Veuillez remplir tous les champs du formulaire";
                        break;
                    case 2:
                        echo "Les informations sont incorrectes";
                        break;
                    case 3:
                        echo "Les mots de passe sont différents";
                        break;
                    case 4:
                        echo "Votre compte a été créé";
                        break;
                    default:
                        # code...
                        break;
                }
            }
        ?>
    </p>
</body>
</html>