<?php include("haut.php"); ?>
<section id="contenu2">
<?php
$coid=$_GET['coid'];
$i=$_GET['num'];
$db=mysql_connect("localhost","root","");
 if ($db)
       {
	     $seldb=mysql_select_db("bibliotheque");
		 if($seldb){
           $requete="SELECT * FROM livre,produits_commandes,categorie WHERE produits_commandes.commandeid='$coid' AND produits_commandes.livreid=livre.livreid AND livre.livcategorie=categorie.categorieid";
		   $reqfinal=mysql_query($requete);
		   echo "<br>Contenu de la commande N° : ".$i."<br><br>";
		   while($row=mysql_fetch_array($reqfinal))
		   {
		        $nomimg=$row["nomimg"];
				$dosimg=$row["dosimg"];
				echo ('<img src="imlivres/'.$dosimg.'/'.$nomimg.'"/>');
				
                             echo '<br>';
                             echo "Titre : ".$row["titre"]." <br> Auteur : ".$row["auteur"]. " <br> Categorie : ".$row["nom"].
							 "<br> isbn : ".$row["isbn"]."<br> Prix : ".$row["prix"]." UM <br> Description : ".$row["descriptionlivre"]."<br><br>";
		   }     
		   
		        }
				
				
       }
?>
</section>
<?php include("gauche.php"); ?>
<?php include("bas.html"); ?>