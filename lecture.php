<?php include("haut.php"); ?>

<section id="contenu2">
<div id="fich1">
<object data="http://localhost/Bibliotheque/alg1.pdf" type="text/html" codetype="application/pdf" ></object>
</div> 


<!--<table>
	<tr>
		<td>test inclusion</td>
	</tr>
	<tr>
		<td>
			<iframe src="alg1.pdf" width="600" height="600" align="middle"></iframe>
		</td>
	</tr>
</table>-->
<?php /*
$Fichier = $_GET['dos'];

if (is_file($Fichier)) {
if ($TabFich = file($Fichier)) {
for($i = 0; $i < 20; $i++){
?>
<div id="contenu2">
<?php
echo $TabFich[$i] ;
?>
</div>
<?php
}
}


else {echo "Le fichier ne peut être lu...<br>";}}
else {echo "Désolé le fichier n'est pas valide<br> " ;}

*/
?>






</section>
<?php include("gauche.php"); ?>
<?php include("bas.html"); ?>