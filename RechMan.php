<?php include("haut.php"); ?>
<section id="contenu2">
<?php

$cat=$_GET['cat'];
$pcat=$_GET['pcat'];

/*if(isset($_GET['k']))
{
$p=$_GET['k'];
echo $p;
}*/
$db=mysql_connect("localhost","root","");
 if ($db)
       {
	     $seldb=mysql_select_db("bibliotheque");
		 if($seldb){
           $requete="SELECT * FROM livre ,categorie WHERE livre.livcategorie=categorie.categorieid AND categorie.nom='$cat'";
		   
		   $reqfinal = mysql_query($requete); 
                if ($reqfinal)
                {
				//echo "Livres Numeriques > ".$row["parentcategorie"]." > ".$row["nom"]." : <br><br>";
				echo "<u><b>Livres Numeriques > ".$pcat." > ".$cat." :<br><br></b></u>";
				while($row=mysql_fetch_array($reqfinal))
				{
				$nomimg=$row["nomimg"];
				$dosimg=$row["dosimg"];
				/*if(!empty($row["nomextrait"])AND !empty($row["dosextrait"]))
				{$nomextrait=$row["nomextrait"];
				$dosextrait=$row["dosextrait"];
				$fichier="imlivres/".$dosextrait."/".$nomextrait;
				$fp = fopen($fichier,"r");}*/
				echo ('<img src="imlivres/'.$dosimg.'/'.$nomimg.'"/>');
				
                             echo '<br>';
                             echo "Titre : ".$row["titre"]." <br> Auteur : ".$row["auteur"]. " <br> Categorie : ".$row["nom"].
							 "<br> isbn : ".$row["isbn"]."<br> Prix : ".$row["prix"]." UM <br> Description : ".$row["descriptionlivre"]."<br>";
				/*echo  ('<a href="lecture.php?dos='.$dosextrait.'&amp;nom='.$nomextrait.'">Lire l\'extrait gratuit</a>');	*/
                if(!empty($row['nomextrait']))
				{
				echo  ('<a href="alg1.pdf">Telecharger l\'extrait gratuit</a>');
				}
				if($row['prix']==0)
				{
                echo  ('<br><form method="post" action="alg1.pdf"><input class="bouton" type="submit" width="5b0" value="     Telecharger     " /></form>');
				}
				else
				{
			    echo ('<br><br><form method="post" action="AjouPan.php?idliv='.$row['livreid'].'&amp;prixliv='.$row['prix'].'"><input class="bouton" type="submit" width="5b0" value="Ajouter au panier" /></form>');
				}
				echo "<br>";
				
                }
				
				
			   }
			
		    
		      }
	    
        }
		
?>
</section>
<?php include("gauche.php"); ?>
<?php include("bas.html"); ?>
