<?php include("haut.php"); ?>
<section id="contenu2"><!-- #contenu2 -->	
						<?php
						$p=0;
						$pc=0;
				if(isset($_POST['recherche']))
				            {
				             $recherche=$_POST['recherche'];
				            }
				else if(isset($_GET['tr']))
				            {
				             $recherche=$_GET['tr'];
				            }
							$parents = array ('Mathematiques', 'Informatique', 'Physique', 'Chimie','Litterature','Dictionnaires');
							$parentsid=array (1,2,3,4,5,6);
							for($i=0;$i<6;$i++){
							
							                   if(stristr($parents[$i],$recherche))
											    {
												$p=$parents[$i];
												$pc=$parentsid[$i];
												}
							                    }
												
$db=mysql_connect("localhost","root","");
 if ($db)
       {
	     $seldb=mysql_select_db("bibliotheque");
		 if($seldb){
           $requete="SELECT * FROM livre ,categorie WHERE livre.livcategorie=categorie.categorieid AND (titre LIKE '%$recherche%' OR auteur LIKE '%$recherche%' OR isbn LIKE '%$recherche%' OR nom LIKE '%$recherche%' OR ('$p' LIKE '%$recherche%' AND parentcategorie='$pc'))";
		   
		        $reqfinal = mysql_query($requete); 
				mysql_close(); 
				if(mysql_num_rows($reqfinal)==0)

               {
                  echo "resultat pour les mots de recherche ".$recherche." : <br><br>";
                  echo 'Aucun resultat';

                }
				
                else
                {
				echo "resultat pour les mots de recherche ".$recherche." : <br><br>";
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
			    echo ('<br><form method="post" action="AjouPan2.php?idliv='.$row['livreid'].'&amp;prixliv='.$row['prix'].'&amp;tr='.$recherche.'"><input class="bouton" type="submit" width="5b0" value="Ajouter au panier" /></form>');
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
