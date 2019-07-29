<?php include("haut.php"); ?>
<section id="contenu2">
<?php
$parents = array ('Mathematiques', 'Informatique', 'Physique', 'Chimie','Litterature','Dictionnaires');
							$parentsid=array (1,2,3,4,5,6);
 echo "<br><b>DECOUVREZ TOUTES LES DERNIERES COLLECTIONS DE NOTRE LIBRAIRIE:</b><br><br>";
for($i=0;$i<6;$i++){
                 $p=$parents[$i];
				 $pc=$parentsid[$i];							
$db=mysql_connect("localhost","root","");
 if ($db)
       {
	     $seldb=mysql_select_db("bibliotheque");
		 if($seldb){
           $requete="SELECT * FROM livre ,categorie WHERE livre.livcategorie=categorie.categorieid AND  parentcategorie='$pc'";
		   
		        $reqfinal = mysql_query($requete); 
				mysql_close(); 
				if(mysql_num_rows($reqfinal)==0)

               {
                  echo "resultat pour les mots de recherche ".$recherche." : <br><br>";
                  echo 'Aucun resultat';

                }
				
                else
                {
				$j=0;
				echo "<h3><b>Categorie de ".$p." : </b></h3>";
				echo('<figure>');
				while(($row=mysql_fetch_array($reqfinal))&&($j<6))
				{
				?>
				
				<?php
				$nomimg=$row["nomimg"];
				$dosimg=$row["dosimg"];
				/*if(!empty($row["nomextrait"])AND !empty($row["dosextrait"]))
				{$nomextrait=$row["nomextrait"];
				$dosextrait=$row["dosextrait"];
				$fichier="imlivres/".$dosextrait."/".$nomextrait;
				$fp = fopen($fichier,"r");
				}*/
				echo ('<img src="imlivres/'.$dosimg.'/'.$nomimg.'"/>');
				
                             /*echo '<br>';
                             echo "Titre : ".$row["titre"]." <br> Auteur : ".$row["auteur"]. " <br> Categorie : ".$row["nom"].
							 "<br> isbn : ".$row["isbn"]."<br> Prix : ".$row["prix"]." UM <br> ";
				/*echo  ('<a href="lecture.php?dos='.$dosextrait.'&amp;nom='.$nomextrait.'">Lire l\'extrait gratuit</a>');	*1/
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
			    echo ('<br><form method="post" action="AjouPan2.php?idliv='.$row['livreid'].'&amp;prixliv='.$row['prix'].'"><input class="bouton" type="submit" width="5b0" value="Ajouter au panier" /></form>');
				}
				echo "<br>";*/
				$j++;
				?>
				
				<?php
                }
				echo('<a href="Recherche.php?tr='.$p.'"><b>Plus</b></a>');
				
			   }
			  
			
		    
		      }
	    
        }
		}
?>
</section>
<?php include("gauche.php"); ?>
<?php include("bas.html"); ?>