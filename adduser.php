<?php
include "./connectdb.php";
include "./inscription.php";
//vérif bouton cliqué
if(isset($_POST["submit"])){
    //vérif chps remplis
    if(!empty($_POST["nom_utilisateur"]) AND !empty($_POST["prenom_utilisateur"]) AND !empty($_POST["email_utilisateur"])
    AND !empty($_POST["password_utilisateur"]) AND !empty($_POST["confirm_password"])){
        if($_POST["password_utilisateur"]===$_POST["confirm_password"]){
            //clean mail 
            $email = cleanInput($_POST["email_utilisateur"]);
            //test existence cpte
            if(empty(getUserByMail($bdd,$email))){
                //clean entrées user
                $nom = cleanInput($_POST["nom_utilisateur"]);
                $prenom = cleanInput($_POST["prenom_utilisateur"]);
                $password = cleanInput($_POST["password_utilisateur"]);
                //hash mdp
                $hash = password_hash($password,PASSWORD_DEFAULT);
                //ajout compte en BDD
                addUser($bdd,$nom, $prenom, $email, $hash);
            
                //afficher un message le compte crée
                echo "Votre compte a bien été créé";
            }
            //tester si le compte existe
            else{
                //Afficher un message erreur
                echo "Les informations sont incorrectes";
            }
        }
        //mots de passe différents
        else{
            //Afficher un message d'erreur
            echo "Les mots de passe ne sont pas identiques";
        }
    }
    //test si les champs ne sont pas tous remplis
    else{
        echo "Veuillez remplir tous les champs du formulaire";
    }
}

function getUserByMail($bdd,$email){
    try {
        $requete = $bdd->prepare('SELECT id_utilisateur FROM utilisateur WHERE email_utilisateur = ?');
        $requete->bindParam(1,$email,PDO::PARAM_STR);
        $requete->execute();
        $data = $requete->fetch(PDO::FETCH_ASSOC);
        return $data;
    } 
    catch (Exception $e) {
        die('Error : '.$e->getMessage());
    }
}
function addUser($bdd,$nom,$prenom,$email,$password){
    try {
        $requete = $bdd->prepare('INSERT INTO utilisateur(nom_utilisateur,prenom_utilisateur,email_utilisateur,password_utilisateur) VALUE(?,?,?,?)');
        $requete->bindParam(1,$nom,PDO::PARAM_STR);
        $requete->bindParam(2,$prenom,PDO::PARAM_STR);
        $requete->bindParam(3,$email,PDO::PARAM_STR);
        $requete->bindParam(4,$password,PDO::PARAM_STR);
        $requete->execute();
    } 
    catch (Exception $e) {
        die('Error : '.$e->getMessage());
    }
}
function cleanInput(string $value):string
{
    return htmlspecialchars(strip_tags(trim($value)),ENT_NOQUOTES);
}