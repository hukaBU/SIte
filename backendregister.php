<?php
require 'config.php'; // Inclure la connexion à la base de données

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $country = htmlspecialchars($_POST['country']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Vérification des champs obligatoires
    if (!empty($firstname) && !empty($lastname) && !empty($email) && !empty($phone) && !empty($country) && !empty($password) && !empty($confirm_password)) {
        if ($password !== $confirm_password) {
            echo "<p style='color:red;'>Les mots de passe ne correspondent pas.</p>";
        } else {
            // Vérifier si l'email existe déjà
            $stmt = $pdo->prepare("SELECT * FROM compte_web WHERE email = ?");
            $stmt->execute([$email]);
            if ($stmt->rowCount() > 0) {
                echo "<p style='color:red;'>Cet email est déjà utilisé.</p>";
            } else {
                // Hasher le mot de passe
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                // Insérer dans la base de données
                $stmt = $pdo->prepare("INSERT INTO compte_web (firstname, lastname, email, phone, country, password) VALUES (?, ?, ?, ?, ?, ?)");
                if ($stmt->execute([$firstname, $lastname, $email, $phone, $country, $hashedPassword])) {
                    echo "<p style='color:green;'>Inscription réussie !</p>";
                } else {
                    echo "<p style='color:red;'>Erreur lors de l'inscription.</p>";
                }
            }
        }
    } else {
        echo "<p style='color:red;'>Tous les champs sont obligatoires.</p>";
    }
}
?>
