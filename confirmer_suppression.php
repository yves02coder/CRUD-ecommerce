<?php session_start() ;

include('navbar.php');
?>


<?php


try
{
    // On se connecte à MySQL
    $db = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', '');
    $db->setAttribute( PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION );
}catch(PDOException $exception){
    // En cas d'erreur, on affiche un message et on arrête tout
        die("Erreur de connexion PDO mySQL:".$exception-> getMessage());
}

//suppression d'une ligne id

$sql="DELETE  FROM id_produit WHERE id_produit=?";
$id = $_GET['id'];
var_dump($id);
$suppression=$db->prepare($sql);
$suppression->bindParam(1,$id);
$resultat=$suppression->execute();
var_dump($resultat);

if($resultat){

    echo"<p class='alert-danger'>Le produit a ete supprimé</p>";
}else{

    echo"<p class='alert-dark'>une erreur est survenue</p>";
}