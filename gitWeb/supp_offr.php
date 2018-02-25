<?php
session_start();
$page_title = "Suppression d'un satge";
include"header.php";
include"db_configpdo.php";

  try{

	$db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
  $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  
  
 
  $SQL = "SELECT sid FROM demandes where statut=?";
  $st = $db->prepare($SQL);
  $res = $st->execute(array('acceptation'));

    if($st->rowCount() == 0)
     	 echo "<center><h3>La liste est vide</h3></center>";
       	else {
            
            while ($row = $st->fetch()){   

            $sid = $row['sid'];}
            $sql = "DELETE FROM stages WHERE sid=?";
            $st = $db->prepare($sql);
            $res = $st->execute(array($sid));
              ?>


             <div class="alert alert-success">
               <center><b>Success!!</b> La mise à jour a été effectuée </center>
            </div>


             <div class="col-sm-12">
          <nav>
            <ul class="pager">
              <li><a href="esp_entr.php">Retour</a></li>
            </ul>
          </nav>
      </div>
     

 <?php
     	 
      
         
}
 
 $db = null;
 }catch (PDOEXception $e)  {
     echo"Erreur SQL:".$e->getMessage();
   }




include"footer.php";

?>