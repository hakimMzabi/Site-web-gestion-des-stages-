<?php
$page_title="Ajout de satge";
include"header.php";
include("db_configpdo.php");
 try{
 
$db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp); 

if (!isset($_GET["cid"]))
   {
	echo"Erreur";
   }
  if (isset($_POST["titre"]) && isset($_POST["des"]){

 	  $cid = $_GET['cid'];
 	  $titre = $_POST['titre'];
    $des = $_POST['des'];
   

    if($titre ==""|| $des ==""){
    include"from_st.php";
    }
	
	$SQL = "INSERT INTO stages VALUES( DEFAULT,?,?,?,?,?)";
	$st = $db->prepare($SQL);
  $res = $st->execute (array($eeid,$fid,$cid,$titre,$des));
   
    if(!$res)
	echo "<h4><center><p>le stage est ajoute\n";
  echo "<p><a href='esp_etu.php'>Revenir a la page d'accueil</a>\n</center></h4>";
	
	$db = null;
   }
   }catch (PDOEXception $e) {
	exit("Erreur de connexion".$e->getMessage());
  
    }

include("footer.php");
?>