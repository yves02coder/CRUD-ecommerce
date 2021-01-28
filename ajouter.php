<?php session_start() ;

include('navbar.php');
?>


<?php


try
{
    // On se connecte à MySQL
    $db = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', '');
    $db->setAttribute( PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION );
}catch(PDOException $exception)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die("Erreur de connexion PDO mySQL:".$exception-> getMessage());
}



?>
<h1 class="fadeInDown text-center" style="color: chartreuse;"><b>BIENVENUE A SCAR-LAND</b></h1>

<h2 class="text-center">Ajouter vos produits ici</h2>
<form method="post" action="enregistrer_produit.php">
    <div class="container m5">
        <div class="form-group">
            <label for="nom_produit">nom produit</label>
            <input type="text" class="form-control" id="nom_produit" name="nom_produit" required>
        </div>

        <div class="form-group">
            <label for="description_produit">description produit</label>
            <textarea rows="5" type="text" class="form-control" id="description_produit" name="description_produit"
                required></textarea>
        </div>

        <div class="form-group">
            <label for="image_produit">image produit</label>
            <input type="text" class="form-control" id="image_produit" name="image_produit" required>
        </div>


        <div class="form_group">
            <label for="prix_produit">Prix produit</label>
            <input type="text" class="form-control" id="prix_produit" name="prix_produit" required>
        </div>


        <div class="form_group">
            <button type="submit" class="btn btn-outline-success button">ajouter le produit</button>
        </div>
    </div>
</form>
<a href="index.php" class="btn btn-info m-5 button">retour</a>