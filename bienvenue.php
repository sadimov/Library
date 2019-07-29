
<?php include("haut.php"); ?>
<section id="contenu2">
<?php
if(!empty($_POST['user'])AND $_POST['mdp'])
{
$nom=$_POST['user'];
$mdp=$_POST['mdp'];
$i1=0;
$i2=0;
$db=mysql_connect("localhost","root","");
                if ($db)
                          {
	                                    $seldb=mysql_select_db("bibliotheque");
		                                if($seldb){
		                                $requete1="SELECT pseudonyme FROM client" ;
										$reqfinal1 = mysql_query($requete1);
		                                while($row1=mysql_fetch_row($reqfinal1))
										{
										 $tab1[$i1]=$row1[0];
										 $i1++;
										}
										 								 
										if(in_array($nom,$tab1))
										      { 
											    $key1 = array_search($nom, $tab1);
										        $requete2="SELECT mdp FROM client ";
										        $reqfinal2 = mysql_query($requete2);
		                                        while($row2=mysql_fetch_row($reqfinal2)){
																								
												                                    $tab2[$i2]=$row2[0];
																					$i2++;
												                                         }
										                            
												                if($mdp==$tab2[$key1]){
																                 session_start();
																                 echo ('<section id= "contenu2">Bienvenue '.$nom.', vous etes maintenant connectes</section>');
																				 
																				  //session_register("nom");     
																				  $_SESSION["nom"]=$nom;            
																                  header("Location: bienvenue.php?" . session_name() . "=" . session_id());
																				  //exit;
																                        }
																else {
																        echo "Mot de passe eronne";
																		
																      }			   
												                              
										                    
										      }					
										 else { 										      
										       echo " Le nom d'utilisateur n'est pas correct ";
										      }		   
										
										
                                        }
}
}
else {                
                    if(isset($_SESSION["nom"]))
                     {
					  echo "<b>Bonjour ".$_SESSION["nom"]." et bienvenue sur ce site</b>";
					 }
					 else{
                     echo "<br><br><b>Veuillez remplir tous les champs !!!</b><br>";
					 echo ('<a href="identification.php">retour</a>');
					 }
}


?>
</section>
<?php include("gauche.php"); ?>
<?php include("bas.html"); ?>