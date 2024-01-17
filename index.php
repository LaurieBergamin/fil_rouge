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
<body id="body">
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
        <div class= "col">
            <div id="sideBar" class="sideBar" justify-self-end>
                <a id="closeBtn" href="#" class="close">×</a>
                <ul>
                <li><a href="#">Inscription</a></li>
                <li><a href="#">Connexion</a></li>
                </ul>
            </div>
                <ul class="nav justify-self-end">
                <li class="nav-item">
                <a class="nav-link" href="#">Panier</a>
            </li>
                <li class="nav-item">
                <a class="nav-link" href="#" id="openBtn">Mon compte</a>
            </li>
            </ul>     
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
<img src="dressing.jpg" class="img-fluid" alt="photo vêtements" justify-self-end/>
    
<div class="container-fluid">
    <footer>
        <ul2>
            <li>Instagram</li>
            <li>Facebook</li>
            <li>Mentions Légales</li>
            <li>CGV</li>
        </ul2>
    </footer>  
    </div>
</body>
</html>