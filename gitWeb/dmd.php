<?php
session_start();
 $page_title = "Demande de stage";
 include"header_etud.php";
  
  if (!isset($_GET["id"])){
   
          echo "<p> Erreur </p>\n";
 
        }else{

       try{
        
        $sid = $_GET["id"];
        $id = $_SESSION['id'];    
        
        include"db_configpdo.php";
        $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
        $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        $SQL = "SELECT userid FROM users WHERE id =?"; 
        $st = $db->prepare($SQL);
        $st->execute(array($id));
        if($st->rowCount() == 0){
          echo"<p> Erreur dans id</p>\n";
        }else{
          $row = $st->fetch();
          $eid = $row['userid'];
         }      



        $SQL = "SELECT eeid FROM stages WHERE sid =?"; 
        $st = $db->prepare($SQL);
        $st->execute(array($sid));
        if($st->rowCount() == 0){
        	echo"<p> Erreur dans id</p>\n";
          
          }else{
          $row = $st->fetch();
          $eeid = $row['eeid'];

        
           $SQL = "INSERT INTO demandes VALUES (DEFAULT,?,?,?,?)";
           $st = $db->prepare($SQL);
           $res = $st->execute (array($eid,$eeid,$sid,'refus'));
          
           if(!$res){
           ?>
            <div class="alert alert-danger">
               <center><b>Erreur!!</b> Votre demande n'a pas été envoyée </center>
            </div>
          <?php
           }else{?>
               <div class="alert alert-success">
               <center><b>Success!!</b> Votre demande a été envoyée </center>
            </div>
            <?php
            echo"<center><a href = 'esp_etu.php'> Revenir la page de gestion </a></center>";}
        

        $db = null;
       }
  
   
   }catch (PDOEXception $e){
        echo"Erreur SQL:".$e->getMessage();
   }
}
include"footer.php";
?>
