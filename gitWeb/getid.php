<?php
include"header_ent.php";

 if (!isset($_GET["id"])){
   
           echo "<p> Erreur </p>\n";
       }

include"db_configpdo.php";

   

    try{

        $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
        $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  
        $fid = $_GET["id"];
       
       
        if (!isset($_POST["supprimer"]) && !isset($_POST["annuler"])) {
         include"sup_form.php"; 
    
        }else if (isset($_POST["annuler"])) {
          echo "operation annuler";
           echo"<a href = 'resp.php'> Revenir la page de gestion </a>";
     
    
        }else{
     
           $SQL = "DELETE FROM filieres WHERE fid=?";
           $st = $db->prepare($SQL);
           $res = $st->execute(array($fid));
          
           if(!$res){
            ?>
              
              <div class="alert alert-danger">
             
                    <center> <strong>Erreur!</strong> La suppression est echouée </center>
             
             </div>
              
           <?php
           }else { 
             ?>
              
              <div class="alert alert-success">
             
                    <center> <strong>Success!</strong> La suppression a bien été effectue </center>
             
             </div>   

                
                <?php
                 echo"<center><a href = 'resp.php'> Revenir la page de gestion </a></center>";}

      $db = null;
     }
   
   }catch (PDOEXception $e) {
      echo"Erreur SQL:".$e->getMessage();
   }

include"footer.php";

?>