<?php include("haut.php"); ?>
<section id="contenu2"><!-- #contenu2 -->
<div align="center">
<form method="post" action ="inscription2.php" align ="center">
<br><br><br>
<h3>Veuillez remplir les informations suivantes:</h3>

<h4> Nom:</h4> <input type="text" name="nom"size="40" border="18"><br><br>
<h4> Pseudonyme:</h4> <input type="text" name="pseudo"size="40" border="18"><br><br>
<h4> Mot de passe :</h4> <input type="password" name="mdp"size="40" border="18"><br><br>
<h4> Adresse: </h4><input type="text" name="email"size="40"><br><br>
<h4>Date de naissance: </h4><input type="date" name="ddn"size="40"><br><br>
<h4>Genre: </h4><select name="genre"><option>M</option><option>F</option></select><br><br>
<input type="submit" value="S'inscrire" />


</form></div>
        		
</section>

		
<?php include("gauche.php"); ?>
<?php include("bas.html"); ?>