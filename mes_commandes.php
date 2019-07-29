<?php include("haut.php"); ?>
<section id = "contenu2">
<?php
$log=$_SESSION['nom'];
$i=1;
$db=mysql_connect("localhost","root","");
 if ($db)
       {
	     $seldb=mysql_select_db("bibliotheque");
		 if($seldb){
           $requete="SELECT * FROM commande WHERE commande.clientid='$log'";
		   $reqfinal=mysql_query($requete);
		   while($row=mysql_fetch_array($reqfinal))
		   {
		    echo "Commande N°: ".$i."<br>Date : ".$row['date']."<br>Total : ".$row['prixt']."<br>Statut : ".$row['statut'].'<br>';
			
			$coid=$row['commandeid'];
			echo ('<a href="contenucom.php?coid='.$coid.'&amp;num='.$i.'">Afficher les produits de cette commande</a>');
			echo '<br><br><br>';
			$i++;
		   }     
		   
		        }
				
				
       }
		   



?>
</section>
<?php include("gauche.php"); ?>
<?php include("bas.html"); ?>