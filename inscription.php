<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./stylesheet.css">
    <script src="script.js"></script>
</head>
<body>
        <header><h1>Backyard</h1>
    <h2>Une autre idée du vêtement</h2>
    </header>
    <form action="" method="post" enctype="multipart/form-data">
            <legend id="page_inscript">Formulaire d'inscription</legend> 
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom"><br>
            <label for="prenom">Prénom :</label>
            <input type="prenom" name="prenom" id="prenom"><br>
            <label for="email">Date de naissance:</label>
            <input type="date" name="naissance" id="naissance"><br>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email"><br>
            <label for="password">Mot de passe:</label>
            <input type="password" name="password" id="password">
    <p id="error"></p>
    <button class="btn btn-primary">Valider</button>
    <button class="btn btn-secondary">Retour</button>

</form>

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
<?php

include './connectbdd.php';

if(isset($_POST["submit"])){

if(!empty($_POST["nom"]) AND !empty($_POST["prenom"]) 
AND !empty($_POST["email"]) AND !empty($_POST["password_utilisateur"])){
    ajouterUtilisateur($_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["password_utilisateur"],$bdd);
    echo "L'utilisateur ".$_POST["nom"]." a été ajouté en BDD";
}
}
function ajouterUtilisateur($nom, $prenom, $email, $password, $bdd){
try {
    $requete = $bdd->prepare('INSERT INTO utilisateur(nom,prenom,email,password_utilisateur)VALUE
    (?,?,?,?)');
    $requete->bindParam(1,$nom,PDO::PARAM_STR);
    $requete->bindParam(2,$prenom,PDO::PARAM_STR);
    $requete->bindParam(3,$email,PDO::PARAM_STR);
    $requete->bindParam(4,$password,PDO::PARAM_STR);
    $requete->execute();
}

catch (Exception $e) {

die("Error : ".$e->getMessage());
}
}
?>
</body>
</html>