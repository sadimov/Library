<?php include("haut.php"); ?>
<section id="contenu2">
<?php
if(isset($_SESSION['nom']))
{
$clientid=$_SESSION['nom'];
$total=0;
$Fich="fichier2.txt";
$Tfich=file($Fich);
for($i = 0; $i < count($Tfich); $i++)
{
$total=$total+$Tfich[$i];
}

$db=mysql_connect("localhost","root","");
 if ($db)
       {
	     $seldb=mysql_select_db("bibliotheque");
		 if($seldb){
           $requete1="INSERT INTO commande (commandeid,date,prixt,statut,clientid) VALUES ('',NOW(),'$total','','$clientid')";
		   $reqfinal=mysql_query($requete1);
		   
		   $q="SELECT LAST_INSERT_ID() FROM commande";
		   $qf=mysql_query($q);
		   $row=mysql_fetch_row($qf);
		   $comoid=$row[0];
		   
		   $Fich2="fichier1.txt";
           $Tfich2=file($Fich2);
		   for($i = 0; $i < count($Tfich2); $i++)
              {
			   $livcoid=$Tfich2[$i];
               $requete2="INSERT INTO produits_commandes (pcid,livreid,commandeid) VALUES ('','$livcoid','$comoid')";
		       $reqfinal=mysql_query($requete2); 
              }
		   
		   
		   
		   
		           }
        }
		$fp = fopen("fichier1.txt","w");
		fputs($fp, "");
		$fp = fopen("fichier2.txt","w");
		fputs($fp, "");
		header("Location: validation2.php");
       //echo "La commande a bien ete validee.<br>Merci a votre fidelite";		
}
else
{
echo "Veuillez vous connecter ou vous inscrire";
}
?>
</section>
<?php include("gauche.php"); ?>
<?php include("bas.html"); ?>