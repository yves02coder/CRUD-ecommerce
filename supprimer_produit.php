<?php
session_start(); // On démarre la session AVANT toute chose
include('navbar.php');

try{
    $db=new PDO("mysql:host=localhost;dbname=ecommerce;charset=utf8;","root","");
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    echo "connexion a la base de donnée";

}catch(PDOException $e){

    echo "Erreur de connexion a PDO";
}
?>

<div class="alert-danger p-5 flash">
    <h1><mark><b>ATTENTION L'ACTION EST IRREVERSIBLE</b></mark></h1>
</div>
<div class="alert-danger">

    <?php
//requète sql
$sql="SELECT * FROM id_produit WHERE id_produit=?";
//requète dans une variable
$requete=$db->prepare($sql);
//objet qui return la declaration AOP

//recuperation de id avec $_GET
$id=$_GET['id'];
var_dump($id);
//faire heriter le'?' a tout les $_GET['id']

$requete->bindParam(1,$id);

//execution requète passé a 'id'
$requete->execute();

//afficher les valeur par 'id'
$resultat=$requete->fetch();

?>

    <ul class="liste-group">
        <li class="liste-detail"><?php echo $resultat['nom_produit']?></li>
        <li><?php echo $resultat['id_produit']?></li>
        <li><img src="<?php echo $resultat['image_produit']?>" alt="<?php $resultat['nom_produit']  ?>"
                title="<?php $resultat['nom_produit']  ?>" /></li>
        <li><?php echo $resultat['prix_produit']?>€</li>
        <li><?php echo $resultat['description_produit']?></li>
    </ul>
    <a href="confirmer_suppression.php?id=<?php echo $resultat['id_produit']?>" class="btn btn-danger mt-5">
        Voulez vous supprimez = <?php echo $resultat['nom_produit']  ?></a>

</div>
<a href=" listeProduit.php " class="btn btn-message mt-5 "> ANNULER </a>