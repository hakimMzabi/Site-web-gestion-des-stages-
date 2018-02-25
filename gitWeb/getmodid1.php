<?php
 include"header_ent.php";
  if (!isset($_GET["id"])){
   
          echo "<p> Erreur </p>\n";
 
        }else{

       try{
        $cid = $_GET["id"];        
        include"db_configpdo.php";
        $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
        $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
               
        $SQL = "SELECT *FROM categories WHERE cid =?"; 
        $st = $db->prepare($SQL);
        $st->execute(array($cid));
        if($st->rowCount() == 0){
        	echo"<p> Erreur dans id</p>\n";
        
          
        }else if(!isset($_POST['nom'])){
           $row = $st->fetch();
        	 include"mod_form1.php";
        
       
        }else{

          	$nom = $_POST['nom'];
        	
            if($nom==""){
          	include"mod_from1.php";
          
          }else{
          
          

           $SQL = "UPDATE categories SET nom=? WHERE cid=?";
           $st = $db->prepare($SQL);
           $res = $st->execute (array($nom,$cid));
          
           if(!$res){
            ?>
             <div class="alert alert-danger">
             
              <center> <strong>Erreur!!</strong> Erreur de modification !! </center>
             
             </div>      
     <?php
     }else{

            ?>

             <div class="alert alert-success">
             
              <center> <strong>Success!</strong> La modification a été effecuée </center>
             
             </div>
          <?php

         } 
            
           
           
         
         echo"<center><a href = 'resp.php'> Revenir la page de gestion </a></center>";
         $db = null;
       }
  }
   
   }catch (PDOEXception $e){
        echo"Erreur SQL:".$e->getMessage();
   }
}
include"footer.php";
?>
