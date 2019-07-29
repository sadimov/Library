
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	
	<title>Librairie</title>
	<link rel="stylesheet" href="styles.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="table.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="styles3.css" type="text/css" media="screen" />
	<link rel="shortcut icon" type="image/png" href="/images/logo2.png" />
	
	<script type="text/javascript">
	function afficherCacher(parametre)
{
var myArray = ['dica1', 'dica2','dica3','dica4','dica5','dica6'];
for (var i = 0; i < myArray.length; i++) {
	
    divInfo = document.getElementById(myArray[i]);
	if(myArray[i]==parametre)
      {
	   if (divInfo.style.display == 'none')
         {divInfo.style.display = 'block';}
       else
         {divInfo.style.display = 'none';}
	  }	
	else
	    {
		 divInfo.style.display = 'none';
		}
}
}
</script>
</head>
<body>
<div id="principal">

	<header>
		<h1><a href="#">Tous Les Livres En Ligne</a></h1>
		<h2>Bienvenue dans votre librairie pr&eacute;fer&eacute;e</h2>
	</header>
	
	<nav>
		<div class="menu">
			<ul>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="gratuits.php">Livres gratuits</a></li>
				<li><a href="extraits.php">Extraits</a></li>
				<li><a href="nouveautes.php">Nouveaut&eacute;s</a></li>
				
				<?php $Fich2="fichier1.txt";
                 $Tfich2=file($Fich2); 
				 $nbar=count($Tfich2);
				 
				?>
				 
				 <figure style="float:right;"><li><img src="panier2.jpg"></li>              
				 <li style="font-weight:normal;font-size:13px;"><?php echo $nbar; echo "<br>";?>article(s)<?php if($nbar!=0) {echo '<br>';echo('<a href="validation.php">valider</a>');} ?></li>
				 </figure>
				
			</ul>
		</div>
	</nav>
	
	<section id="main">
	
	        <section id="contenu2">
			
			
			
			
	           <?php
			   
			   if(isset($_SESSION["nom"]))
			      {  
				    $nom=$_SESSION["nom"];
				    echo ('<div align ="right">Bienvenue&nbsp; '.$nom.'&nbsp;&nbsp;&nbsp;&nbsp;<a href="mes_commandes.php">Mes commandes</a>&nbsp;<a href="deconnexion.php">Deconnexion</a></div>');
										
				  }
				  
			
				  ?>
	        <form method="POST" action="Recherche.php">
			<table  border="1" width="400" height="20" >
			<tr><td width="350"><input type="search" name="recherche" size="90" placeholder="Rechercher par titre , Auteur , Editeur , ISBN ..."  /></td><td width="50"><input type="submit" value="Rechercher" /></td></tr>
			</table>
			</form>
			</section>