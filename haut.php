










<?php
session_start();

if(isset($_SESSION["nom"]))
{  
      require 'login.php';
}
else
{   

     require 'logout.php';
}


?>

























<?php /*<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	
	<title>Librairie</title>
	<link rel="stylesheet" href="styles.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="table.css" type="text/css" media="screen" />
	<link rel="shortcut icon" type="image/png" href="/images/logo2.png" />
	
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
				<li><a href="#">Livres gratuits</a></li>
				<li><a href="#">Extraits</a></li>
				<li><a href="#">Nouveaut&eacute;s</a></li>
				<?php 
				
				$Fichier="idcon.txt";
				$TabFich = file($Fichier);
				if(count($TabFich)==0){
				echo ('<li><a href="identification.php">S\'identifier</a></li>');
				echo ('<li><a href="inscription1.php">S\'inscrire</a></li>');
				
				                      }
				
				
				?>
				
			</ul>
		</div>
	</nav>
	
	<section id="main">
	
	        <section id="contenu2">
			
			
			
			
	           <?php
			    $f="idcon.txt";
			   
			   if(count($TabFich)!=0)
			      { 
				    echo ('<div align ="right">Bienvenue&nbsp; '.$TabFich[0].'&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Mes commandes</a>&nbsp;<a href="deconnexion.php?var='.$f.'">Deconnexion</a></div>');
					/*echo "<br>";
					echo ('<a href="#">Mes commandes</a>');
					echo ('<a href="#">Deconnexion</a>');
                    //header("Refresh:0; url=haut.php");					
				  }
				  ?>
				  <?php
				  //echo("<meta http-equiv='refresh' content='1'>");
				  
				  ?>
	     <?php /*  <form method="POST" action="Recherche.php">
			<table  border="1" width="400" height="20" >
			<tr><td width="350"><input type="search" name="recherche" size="90" placeholder="Rechercher par titre , Auteur , Editeur , ISBN ..."  /></td><td width="50"><input type="submit" value="Rechercher" /></td></tr>
			</table>
			</form>
			</section> */ ?>