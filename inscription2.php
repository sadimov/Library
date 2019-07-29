<?php include("haut.php"); ?>
<section id="contenu2"><!-- #contenu2 -->
        		<?php
				if(!empty($_POST['nom'])AND !empty($_POST['email'])AND !empty($_POST['ddn'])AND !empty($_POST['genre']))
				{
				$nom=$_POST['nom'];
				$pseudo=$_POST['pseudo'];
				$mdp=$_POST['mdp'];
				$email=$_POST['email'];
				$ddn=$_POST['ddn'];
				$genre=$_POST['genre'];
				
                $db=mysql_connect("localhost","root","");
                if ($db)
                          {
	                                    $seldb=mysql_select_db("bibliotheque");
		                                if($seldb){
		                                $requete1="SELECT pseudonyme FROM client";
										$reqfinal = mysql_query($requete1);
		                                $row=mysql_fetch_row($reqfinal);
										for($i=0;$i<count($row);$i++)
										{
										 if($pseudo==$row[$i]){
										        $b=true;
										                       }
										else { 
										       $b=false;
										     }					   
										}
										if($b){
										       echo "Ce pseudonyme n'est pas dispnible<br>";
											   echo ('<a href="inscription1.php">retour</a>');
										      }
										else{
                                         $requete2="INSERT INTO client (nom,pseudonyme,mdp,email,ddn,genre) VALUES ('$nom','$pseudo','$mdp','$email','$ddn','$genre')";
		                                 $reqfinal = mysql_query($requete2);
		                                 echo "<br><br>Bienvenue ".$nom." ,vous etes desormais un client.<br/>Vous pouvez profiter de tous les services d'e-book rim";
		                                    }
									}
	    
                            }
				}
		       else {
		             echo "<br><br>Veuillez remplir tous les champs !!!<br>";
					 echo ('<a href="inscription1.php">retour</a>');
		            }
		
		

				
				?>
				</section>
<?php include("gauche.php"); ?>
<?php include("bas.html"); ?>