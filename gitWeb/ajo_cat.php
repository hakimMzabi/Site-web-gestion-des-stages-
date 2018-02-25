<?php

$page_title = "Ajout de categorie";
 include"header.php";
 include "db_configpdo.php";

 if (isset($_POST["nom"])){

    $n = $_POST['nom'];


    if($n ==""){
    include"cat_form.php";
    }
    try{

     $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
     $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $SQL = "INSERT INTO categories VALUES (DEFAULT,?)";
    $st = $db->prepare($SQL);
    $res = $st->execute (array($n));
   
    if(!$res){
       ?>
              
              <div class="alert alert-danger">
             
                    <center> <strong>Erreur!</strong> l'ajout du catégorie est échoué </center>
             
             </div>
              
           <?php
           }else { 
             ?>
              
              <div class="alert alert-success">
             
                    <center> <strong>Success!</strong> L'ajout du catégorie <?php echo $n ?> a bien été effectue </center>
             
             </div>   

                
                <?php
      }
      echo"<center><a href = 'resp.php'> Revenir la page de gestion </a></center>";
      $db = null;

   }catch (PDOEXception $e) {
      exit("Erreur de connexion".$e->getMessage());
  
    }

}

include"footer.php";



  

 include("footer.php");

?>