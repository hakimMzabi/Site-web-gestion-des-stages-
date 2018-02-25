<?php
$page_title ="Ajout de satge";
include"header.php";

include("db_configpdo.php");

if (!isset($_GET["fid"])){
   
          echo "<p> Erreur </p>\n";
   }else{


 

 $fid = $_GET["fid"];
 
$db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp); 

 
try{

$SQL = "SELECT * FROM categories";
$res = $db->query($SQL);
		
?>
<h2><p>Liste des categories..<p><h2>

<?php
while($row = $res->fetch())
		echo"<h4>$row[cid]. $row[nom] <a href='insert1.php?id=$row[cid]'> cliquer </a></h4>";
	}catch (PDOEXception $e) {
	exit("Erreur de connexion".$e->getMessage());
  
    }
}

		
include("footer.php");
?>