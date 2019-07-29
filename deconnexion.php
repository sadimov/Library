<?php include("logout.php"); ?>
<?php session_start(); ?>
<section id ="contenu2">
<?php
/*if(isset($_GET['var'])){
$fich=$_GET['var'];
$fp = fopen($fich,"w");
fputs($fp, "");*/
session_destroy();

//header("Location: deconnexion.php?" . session_name() . "=" . session_id());
echo "Vous vous etes deconnectes<br><br>";
echo ('<a href="identification.php">Connexion</a>');
                        
?>
</section>
<?php include("gauche.php"); ?>
<?php include("bas.html"); ?>
