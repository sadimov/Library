<?php
 $idliv=$_GET['idliv'];
 $prixliv=$_GET['prixliv'];
 $tr=$_GET['tr'];
 
 $fp = fopen("fichier1.txt","a");
 fputs($fp, $idliv."\n");
 
 $fp = fopen("fichier2.txt","a");
 fputs($fp, $prixliv."\n");
 header("Location: finale2.php?tr=".$tr);
 ?>