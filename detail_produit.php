<?php session_start() ?>

<?php
include('navbar.php');
?>
<h1 class="fadeInDown text-center" style="color: chartreuse;"><b>BIENVENUE A SCAR-LAND</b></h1>
<?php


try{
    $db=new PDO("mysql:host=localhost;dbname=ecommerce;charset=utf8;","root","");
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    echo "connexion a la base de donnée";

}catch(PDOException $e){

    echo "Erreur de connexion a PDO";
}
$sql="SELECT* FROM id_produit WHERE id_produit=?";
$req=$db->prepare($sql);

$id=$_GET['id'];
echo $id;
$req->bindParam(1,$id);
$req->execute();
$resultat=$req->fetch();
//var_dump($resultat);
if($resultat){
?>
<ul class="liste-detail">
    <li class="liste-detail"><?php echo $resultat['nom_produit']?></li>
    <li><?php echo $resultat['id_produit']?></li>
    <li><img src="<?php echo $resultat['image_produit']?>" alt="<?php $resultat['nom_produit']  ?>"
            title="<?php $resultat['nom_produit']  ?>" /></li>
    <li><?php echo $resultat['prix_produit']?>€</li>
    <li><?php echo $resultat['description_produit']?></li>
</ul>
<a href="index.php" class="btn btn-success button">retour</a>
<?php
}else{
    echo "id inconnu";
}
?>
<a href="paye.php" class="btn btn-success button">suivant</a>