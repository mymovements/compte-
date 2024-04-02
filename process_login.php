<?php
// Données de connexion (à des fins de démonstration uniquement, ne pas utiliser en production)
$identifiant_valide = "ivega01";
$mot_de_passe_valide = "86226800";

// Vérification des données postées depuis le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $identifiant = $_POST["username"];
    $mot_de_passe = $_POST["password"];

    // Vérification de l'identifiant et du mot de passe
    if ($identifiant === $identifiant_valide && $mot_de_passe === $mot_de_passe_valide) {
        // Identifiants corrects, rediriger vers la page d'accueil du compte
        header("Location: compte.php");
        exit;
    } else {
        // Identifiants incorrects, afficher un message d'erreur
        echo "Identifiant ou mot de passe incorrect.";
    }
}
?>
