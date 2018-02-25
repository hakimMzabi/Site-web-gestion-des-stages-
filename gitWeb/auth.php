<?php
session_start();

include 'db_configpdo.php';
require 'Authentification.class.php';
try {

	

  $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
  $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $redirect = function ($first){
    $page_title ="Connexion";
    include("heeader.php");
    if(!$first) $badlogin = true;
    include("login_form.php");
    include("footer.php");
    exit();  
   };

   $auth = new Authentification($db,$redirect);

   if (!$auth->authentificate()){

   
    exit();
  }

  
 $_SESSION['id'] = $auth->userid;
 $_SESSION['login'] = $auth->username;
 //$auth->username;
 //$auth->userid;
 
  $SQL = "SELECT type FROM users WHERE id=?"; 
  $st = $db->prepare($SQL);
  $res = $st->execute(array($auth->userid));
  $row = $st->fetch();

  $t = "etudiant";
  $t2 = "entreprise";
  $t3 = "admin";
  
  if (($row['type'])===$t)
  {
      
    include"esp_etu.php";
 
  }
  
  if($row['type']===$t2)
  {
     include"esp_entr.php";

  }
	
  if($row['type']===$t3)
  {
     include"resp.php";

  }

  
}catch (PDOEXception $e) {

	echo"Erreur SQL:".$e->getMessage();
   }
 
     $db = null;

 include"footer.php";
?>