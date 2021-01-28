<?php session_start() ?>

<?php
//$prenom=$_POST['prenom'];

//$_SESSION['prenom'] =$prenom;


?>

<!DOCTYPE html>
<html lang="en" style="margin-top:40px;">

<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title="Ecommerce-Accueil" ?></title>

</head>

<body
    style="background-image: url('https://cdn.lowgif.com/small/bf3dc9fff9395a5f-image-result-for-black-background-animated-gif-pip.gif');background-size:cover;">

    <?php
?>
    <header>
        <h1 class="fadeInDown text-center" style="color: chartreuse;"><b>BIENVENUE A SCAR-LAND</b></h1>
        <div class="container text-center">
            <h1 class="fadeInDown  text-center " style="color: chartreuse;"><b> </b></h1>
            <h2 class="flash" style="color: white;"><b> Veuillez entrer votre prénom </b></h2>

            <form action="index.php" method="post">
                <p>
                    <input type="text" name="prenom" required />
                    <input type="submit" value="VALIDER" />
                </p>
                <h3><label>j'aime les chaussures<input type="checkbox" name="basket" required></input></label></h3>


            </form>

        </div>


    </header>





    <!--<div class="row">
    <div class="col">
    </div>
    </div>-->


    <?php
    ob_start();
    ?>

</body>


</html>