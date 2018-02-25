<?php
session_start();

$page_title ="Ajout des stages";
include"header.php";
include"db_configpdo.php";


if ( isset($_POST["fid"]) && isset($_POST["cid"]) && isset($_POST["description"]) && isset($_POST["titre"]) )
{
   
    $id = $_SESSION['id'];
    $fid = $_POST['fid'];
    $cid = $_POST['cid'];
    $d = $_POST['description'];
    $t = $_POST['titre'];
    
    
    
                 
   
    if(  (!is_numeric($fid)) || (!is_numeric($cid)) || ($d =="") || ($t =="") ){
       
   
       include"form_st.php";
    }

  try{

	    $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
      $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $SQL = "SELECT userid FROM users WHERE id=?"; 
      $st = $db->prepare($SQL);
      $res = $st->execute (array($id));
      
      $row = $st->fetch();
      $eeid = $row['userid'];

      $SQL = "INSERT INTO stages VALUES (DEFAULT,?,?,?,?,?)";
      $st = $db->prepare($SQL);
      $res = $st->execute (array($eeid,$fid,$cid,$d,$t));
   
    if(!$res){
       ?>

       <div class="alert alert-danger">
          <center><b>Erreur!!</b> le stage n a été pas enregistré</center>
        </div>
     <?php
     }else{ 
      ?>  
        <div class="alert alert-success">
          <center><b>Success!</b> le stage a bien été enregistré</center>
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