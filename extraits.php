<?php include("haut.php"); ?>
<section id="contenu2"><!-- #contenu2 -->	
						<?php
						
												
$db=mysql_connect("localhost","root","");
 if ($db)
       {
	     $seldb=mysql_select_db("bibliotheque");
		 if($seldb){
           $requete="SELECT * FROM livre ,categorie WHERE livre.livcategorie=categorie.categorieid AND nomextrait IS NOT NULL";
		   
		        $reqfinal = mysql_query($requete); 
				mysql_close(); 
				if(mysql_num_rows($reqfinal)==0)

               {
                  echo "resultat pour les mots de recherche ".$recherche." : <br><br>";
                  echo 'Aucun resultat';

                }
				
                else
                {
				echo "Livres Numeriques > Extraits gratuits: <br><br>";
				while($row=mysql_fetch_array($reqfinal))
				{
				$nomimg=$row["nomimg"];
				$dosimg=$row["dosimg"];
				/*if(!empty($row["nomextrait"])AND !empty($row["dosextrait"]))
				{$nomextrait=$row["nomextrait"];
				$dosextrait=$row["dosextrait"];
				$fichier="imlivres/".$dosextrait."/".$nomextrait;
				$fp = fopen($fichier,"r");
				}*/
				echo ('<img src="imlivres/'.$dosimg.'/'.$nomimg.'"/>');
				
                             echo '<br>';
                             echo "Titre : ".$row["titre"]." <br> Auteur : ".$row["auteur"]. " <br> Categorie : ".$row["nom"].
							 "<br> isbn : ".$row["isbn"]."<br> Prix : ".$row["prix"]." UM <br> Description : ".$row["descriptionlivre"]."<br>";
				/*echo  ('<a href="lecture.php?dos='.$dosextrait.'&amp;nom='.$nomextrait.'">Lire l\'extrait gratuit</a>');	*/
				echo  ('<h3><b><a href="lecture.php">Telecharger l\'extrait gratuit</a></b></h3>');
				
				echo "<br><br>";
				
                }
				
				
				
			   }
			  
			
		    
		      }
	    
        }
		
		

				
				?>
						
			</section>
<?php include("gauche.php"); ?>
<?php include("bas.html"); ?>
