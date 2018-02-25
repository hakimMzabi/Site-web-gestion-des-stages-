<?php
session_start();
$page_title = "Modification de stage";
 include"header.php";

  if (!isset($_GET["id"])){
   
          echo "<p> Erreur!! </p>\n";
 
        }else{

       try{
        
        $sid = $_GET["id"];        
        include"db_configpdo.php";
        $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
       
               
        $SQL = "SELECT eeid,fid,cid,titre,description FROM stages WHERE sid =?"; 
        $st = $db->prepare($SQL);
        $st->execute(array($sid));
        if($st->rowCount() == 0){
        	echo"<p> Erreur dans id</p>\n";
        
          
        }else if( !isset($_POST['fid']) || !isset($_POST['cid']) || !isset($_POST['titre']) || !isset($_POST['description']) ){
           $row = $st->fetch();
        	 include"form_stmd.php";
        
       
        }else{
            
            $row = $st->fetch();
          	$eeid = $row['eeid'];
            $fid = $_POST['fid'];
        	  $cid = $_POST['cid'];
            $d = $_POST['description'];
            $t = $_POST['titre'];
            
            
          
            if( !is_numeric($fid) || !is_numeric($cid)|| $d=="" || $t=="" )
            {
            
          	    include"from_stmd.php";
          
          
            }else{
          
          

              $SQL = "UPDATE stages SET eeid=?,fid=? ,cid=? ,description=? ,titre=? WHERE sid=?";
              $st = $db->prepare($SQL);
              $res = $st->execute (array($eeid,$fid,$cid,$d,$t,$sid));
          
              if(!$res){
                
                ?>
               <div class="alert alert-danger">
                  <center><b>Erreur!!</b> Erreur de modification</center>
               </div>
             
               <?php
             }else{ 
              ?>  
            
             <div class="alert alert-success">
               <center><b>Success!!</b> le stage a bien été modifié</center>
            </div>
        
           <?php
                  
                }
             
              echo"<center><a href = 'esp_entr.php'> Revenir la page de gestion </a></center>";
              $db = null;
            }
        }
   
    }catch (PDOEXception $e){
        echo"Erreur SQL:".$e->getMessage();
    }
}
include"footer.php";
?>
