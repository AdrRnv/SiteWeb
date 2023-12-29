<?php
session_start();

if (isset($_POST['remember'])) {
    setcookie('login', $_POST['inputEmail'], time() + 86400);
    setcookie('password', $_POST['inputPassword'], time() + 86400);
}

try{
    $host = 'iutbg-lamp.univ-lyon1.fr';
    $dbname = 'p2207394';
    $username = 'p2207394';
    $password = '12207394';

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    if (isset($_POST['inputEmail']) && isset($_POST['inputPassword'])) {

        $query = "SELECT * FROM users WHERE email = ?";
        $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $stmt = $db->prepare($query);

        $email = $_POST['inputEmail'];
        $password = $_POST['inputPassword'];

        $stmt->execute([$email]);
    
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        $pass = $db->prepare("SELECT password FROM users WHERE email = :email");
        $pass->execute(['email'=> $email]);
        $passHash = $pass->fetchColumn();

        if ($user) {
            $hashedPasswordFromDatabase = $user['password'];
            $enteredPassword = $_POST['inputPassword'];

            if (password_verify($enteredPassword, $hashedPasswordFromDatabase)) {
                $_SESSION['admin'] = true;
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                header("Location: index.php");
                exit();
            } else {
                header("Location: infoLogin.php");
                exit();
            }
        } else {
            header("Location: login.php");
            exit();
        }  

    }
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}