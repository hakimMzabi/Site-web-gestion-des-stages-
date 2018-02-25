<?php
include 'db_configpdo.php';
require 'Authentification.class.php';

 $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
 $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$page_title = "Ajout utilisateur";
include("header_ent.php");

if (!isset($_POST["login"]) || !isset($_POST["password"]) ||
    !isset($_POST["password2"])||!isset($_POST["nom"]) ||!isset($_POST["prenom"])||!isset($_POST["type"])||!isset($_POST["userid"])){
    //echo "<p>Erreur dans les données\n";
    include("reg_form.php");
    include("footer.php");
   exit();
}


if ($_POST["password"] != $_POST["password2"]){
    echo "<p>Mots de passe différents\n";
   include("reg_form.php");
   include("footer.php");
   exit();
}

if(empty(trim($_POST['nom'])) || empty(trim($_POST['prenom'])) || empty(trim($_POST['login'])) || empty(trim($_POST['type'])) || empty(trim($_POST['userid'])) ){
    echo "<p>Erreur dans les données\n";
   include("reg_form.php");
   include("footer.php");
   exit();    
}

 
  $mdp = md5($_POST["password"]);

  $SQL = "SELECT id FROM users WHERE login=?";
  $st = $db->prepare($SQL);
  $res = $st->execute([$_POST['login']]);

  $row = $st->fetch();

  if($row){
    echo "<p>Le login existe\n";
    include("reg_form.php"); 
    include("footer.php");
    exit(); 
  } 


  $SQL = "INSERT INTO users(userid,nom,prenom,login,mdp,type) VALUES (?,?,?,?,?,?)"; 
  $st = $db->prepare($SQL);
  $res = $st->execute( [$_POST['userid'],$_POST['nom'],$_POST['prenom'],$_POST['login'],$mdp,$_POST['type']]);

  if (!$res) die('Error: '); 
  
  $db=null; 

  ?>
       <div class="alert alert-success">
          <center><b>Réussi!!</b>Utilisateur <?php echo "$_POST[login]"?>a été ajouté</center>
        </div>
  <?php
  
  echo "<center><p><a href='resp.php'>Revenir à la page d'accueil</a>\n</center>";
  include("footer.php");

?>  