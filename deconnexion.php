<?php
session_start();

$unset=session_unset();

$destroy=session_destroy();
header('location:http://localhost/Ecommerce/menu.php');
if($unset==$destroy){
echo '<img =src"https://img1.picmix.com/output/stamp/normal/5/0/4/8/1638405_9a633.gif">';

}