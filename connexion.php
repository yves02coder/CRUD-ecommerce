<?php
session_start();

require'navbar.php';


$email="ecommerce@pj3";
$password="bonjour";
$prenom=$_SESSION['prenom'];

if(isset($_POST['email']) && !empty( $_POST['email']) && isset($_POST['password']) && !empty( $_POST['password'])){
    
    if($email==$_POST['email'] && $password==$_POST['password']){
    $_SESSION['email']=$_POST['email'];
    echo $_SESSION['email'];
    $_SESSION['password']=$_POST['password'];
    echo $_SESSION['password'];
    header('location:http://localhost/Ecommerce/index.php');

    }else{
        echo "merci de mettre des valeures valides";
        echo "<img class='image'; src='https://gifsdomi.files.wordpress.com/2014/03/gif-smiley-scc3a8ne-divers-217.gif' />";
    }

}else{
    echo "<p class='paragraph'>merci de mettre des valeures valides</p>";
   
    echo "<img src='https://gifsdomi.files.wordpress.com/2014/03/gif-smiley-scc3a8ne-divers-217.gif'/>";
}