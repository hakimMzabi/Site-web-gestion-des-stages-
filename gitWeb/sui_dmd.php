<?php
session_start();
$page_title ="consultation de demande";
include"header_etud.php";
?>
<div class="container">
 <div class="row">
   <div class="col-sm-3"></div>
     <section class="col-md-12">
         <div class="jumbotron" style="background-color:#ffffff;">
            <center><h1>Consulation de votre demande<h1></center>          
         </div>
     </section>
   </div>
  </div>      


<?php
require "db_configpdo.php";
 $id = $_SESSION['id'];

     try{

  	  $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
      $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      
      $SQL = "SELECT userid FROM users WHERE id=?"; 
      $st = $db->prepare($SQL);
      $res = $st->execute (array($id));
      $row = $st->fetch();
      $eid = $row['userid'];	
      

    	$SQL = "SELECT statut,sid FROM demandes WHERE eid=?";
      $st = $db->prepare($SQL);
      $res = $st->execute (array($eid));
      $row = $st->fetch();
      $s = $row['statut'];
     
  
      
      $sid = $row['sid'];

      if($st->rowCount() == 0)
     	   echo "<center>Vous n'avez pas effectuez une demande encore!!</center>";
       
      $SQL = "SELECT titre FROM stages WHERE sid=?";
      $st = $db->prepare($SQL);
      $res = $st->execute (array($sid));
      $row = $st->fetch();
      $t = $row['titre'];
     	
      if ($s==='refus'){
      
       ?>
       <div class="alert alert-danger">
          <center><b>Malheursement!!</b> votre demande pour <?php echo $t ?> a été refusée</center>
      </div>
      
      <?php
      }
      
      
      if($s === 'acceptation'){
       ?>       
       <div class="alert alert-success">
          <center><b>Félicitation !!</b> votre demande pour <?php echo $t ?> a été acceptée</center>
      </div>
     
      <nav>
        <ul class="pager">
          <li><a href="esp_etu.php">Retour</a></li>
        </ul>
      </nav>
      <?php

      }

         
     $db = null;
         
       }catch (PDOEXception $e) {
  			echo"Erreur SQL:".$e->getMessage();
   		}

   


include"footer.php";

?>