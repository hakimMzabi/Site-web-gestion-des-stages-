<?php
include"header.php";

 if (!isset($_GET["id"])){
   
           echo "<p> Erreur </p>\n";
       }

include"db_configpdo.php";

   

    try{

        $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
        $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  
        $sid = $_GET["id"];
       
       
        if (!isset($_POST["supprimer"]) && !isset($_POST["annuler"])) {
         include"sup_form.php"; 
    
        }else if (isset($_POST["annuler"])) {
          echo "operation annuler";
           echo"<a href = 'esp_entr.php'> Revenir la page de gestion </a>";
     
    
        }else{
     
           $SQL = "DELETE FROM stages WHERE sid=?";
           $st = $db->prepare($SQL);
           $res = $st->execute(array($sid));
          
           if(!$res){
             ?>

         <div class="alert alert-danger">
            <center><b>Erreur!!</b> La suppression a été echoueé</center>
         </div>
       <?php
     }else{ 
      ?>  
        <div class="alert alert-success">
           <center><b>Success!!</b> le stage a été supprimé</center>
        </div>
        
        <?php
                  echo"<center><a href = 'esp_entr.php'> Revenir la page de gestion </a></center>";
               }
      $db = null;
     }
   
   }catch (PDOEXception $e) 
   {
  echo"Erreur SQL:".$e->getMessage();
   }

include"footer.php";
?>