<?php
require 'config.php'; // Inclure la connexion à la base de données
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    // Vérification des champs obligatoires
    if (!empty($email) && !empty($password)) {
        // Rechercher l'utilisateur dans la base de données
        $stmt = $pdo->prepare("SELECT * FROM compte_web WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Enregistrer les données utilisateur dans la session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['firstname'] . ' ' . $user['lastname'];
            echo "<p style='color:green;'>Connexion réussie. Bienvenue, " . htmlspecialchars($_SESSION['user_name']) . "!</p>";
        } else {
            echo "<p style='color:red;'>Email ou mot de passe incorrect.</p>";
        }
    } else {
        echo "<p style='color:red;'>Tous les champs sont obligatoires.</p>";
    }
}
?>
