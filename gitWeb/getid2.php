<?php
$page_title ="Suppression catégorie";
include"header_ent.php";

 if (!isset($_GET["id"])){
   
           echo "<p> Erreur </p>\n";
       }

include"db_configpdo.php";

   

    try{

        $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
        $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  
        $cid = $_GET["id"];
       
       
        if (!isset($_POST["supprimer"]) && !isset($_POST["annuler"])) {
         include"sup_form.php"; 
    
        }else if (isset($_POST["annuler"])) {
          echo "operation annuler";
           echo"<a href = 'resp.php'> Revenir la page de gestion </a>";
     
    
        }else{
     
           $SQL = "DELETE FROM categories WHERE cid=?";
           $st = $db->prepare($SQL);
           $res = $st->execute(array($cid));
          
           if(!$res){
            ?>
            <div class="alert alert-danger">
             
              <center> <strong>Erreur!!</strong> La suppression est échouée !! </center>
             
             </div>      
     <?php
     }else{

            ?>

             <div class="alert alert-success">
             
              <center> <strong>Success!</strong> La suppression a été effectuée </center>
             
             </div>
          <?php

           } 
        
          echo"<center><a href = 'resp.php'> Revenir la page de gestion </a></center>";}
      $db = null;
     
   
   }catch (PDOEXception $e) 
   {
  echo"Erreur SQL:".$e->getMessage();
   }

include"footer.php";
?>