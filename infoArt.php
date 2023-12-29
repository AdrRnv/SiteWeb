<?php
session_start();

try {
    $host = 'iutbg-lamp.univ-lyon1.fr';
    $dbname = 'p2207394';
    $username = 'p2207394';
    $password = '12207394';

    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);  
    $query = "INSERT INTO articles (titre, descri, contenu, photo) 
              VALUES (?, ?, ?, ?)";
    $stmt = $db->prepare($query);
    

    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $contenu = $_POST['contenu'];

    $photo = $_FILES["fileArt"]["name"];
    $photo_tmp_name = $_FILES["fileArt"]["tmp_name"];
    $photo_path = 'ImgArt/' . basename($photo);

    if(move_uploaded_file($photo_tmp_name, $photo_path)){
        $stmt->execute([$titre, $description, $contenu, $photo]);
    } else {
        
    }

    header("Location: addArt.php");
    exit();
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
