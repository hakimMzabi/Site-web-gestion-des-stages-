<?php
session_start();
$page_title ="Confirmation des demandes ";
include"header.php";
include"db_configpdo.php";


if ( isset($_POST["statut"])) 
{
   
    $s = $_POST['statut'];
    
    $id = $_SESSION['id'];
   
  if(  ($s =="")) {
       
   
       ?>
          <div class="alert alert-danger">
            <center><b>Erreur!!</b> verifier votre choix !!?</center>
         </div>
        <center><a href='demd.php'>Revenir a la page des demandes</a></center>
       <?php
    }

  try{

	    $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
      $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $SQL = "SELECT userid FROM users WHERE id=?"; 
      $st = $db->prepare($SQL);
      $res = $st->execute (array($id));
      $row = $st->fetch();
      $eeid = $row['userid'];

      $eid = $_SESSION['eid'];

      $SQL = "UPDATE demandes SET statut=? WHERE (eeid=? AND eid =?)"; 
      $st = $db->prepare($SQL);
      $res = $st->execute (array($s,$eeid,$eid));
      
      
    if(!$res){
       ?>

       <div class="alert alert-danger">
          <center><b>Erreur!!</b> La demande n'est pas confirmée</center>
        </div>
     <?php
     }else{ 
      ?>  
        <div class="alert alert-success">
          <center><b>Success!</b> la demande a bien été confirmée </center>
        </div>
        
        <?php
            }       
             echo "<center><p><a href='esp_entr.php'>Revenir a la page d'accueil</a>\n</center>";
  

		$db = null;

   }catch (PDOEXception $e) {
	     exit("Erreur de connexion".$e->getMessage());
  
    }
}

include"footer.php";
		?>