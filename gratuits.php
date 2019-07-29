<?php include("haut.php"); ?>
<section id="contenu2">
<?php
$db=mysql_connect("localhost","root","");
 if ($db)
       {
	     $seldb=mysql_select_db("bibliotheque");
		 if($seldb){
           $requete="SELECT * FROM livre ,categorie WHERE livre.livcategorie=categorie.categorieid AND livre.prix=0";
		   
		   $reqfinal = mysql_query($requete); 
                if ($reqfinal)
                {
				echo "<b><u>Livres Numeriques > Livres Gratuits :</u></b> <br><br>";
				
				while($row=mysql_fetch_array($reqfinal))
				{
				$nomimg=$row["nomimg"];
				$dosimg=$row["dosimg"];
				if(!empty($row["nomextrait"])AND !empty($row["dosextrait"]))
				{$nomextrait=$row["nomextrait"];
				$dosextrait=$row["dosextrait"];
				$fichier="imlivres/".$dosextrait."/".$nomextrait;
				$fp = fopen($fichier,"r");}
				echo ('<img src="imlivres/'.$dosimg.'/'.$nomimg.'"/>');
				
                             echo '<br>';
                             echo "Titre : ".$row["titre"]." <br> Auteur : ".$row["auteur"]. " <br> Categorie : ".$row["nom"].
							 "<br> isbn : ".$row["isbn"]."<br> Prix : ".$row["prix"]." UM <br> Description : ".$row["descriptionlivre"]."<br>";
				/*echo  ('<a href="lecture.php?dos='.$dosextrait.'&amp;nom='.$nomextrait.'">Lire l\'extrait gratuit</a>');	*/

				echo  ('<br><form method="post" action="alg1.pdf"><input class="bouton" type="submit" width="5b0" value="     Telecharger     " /></form>');
				
				echo "<br>";
				
                }
				
				
			   }
			
		    
		      }
	    
        }
		
?>
</section>
<?php include("gauche.php"); ?>
<?php include("bas.html"); ?>