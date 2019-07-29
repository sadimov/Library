<?php include("haut.php"); ?>
<section id="contenu2">

<?php
$tr=$_GET['tr'];
echo "L'article a ete ajoute au panier<br><br><br>";

		  

 echo('<a href="Recherche.php?tr='.$tr.'">Continuer mes achats</a>');
      
 echo'<br><br><br>';
 echo ('<a href="validation.php">Valider la commande</a>');

?>
</section>
<?php include("gauche.php"); ?>
<?php include("bas.html"); ?>