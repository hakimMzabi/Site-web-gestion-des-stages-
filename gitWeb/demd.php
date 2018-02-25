<?php
session_start();
$page_title ="Demande de stage";

include"header.php";
include "db_configpdo.php";
?>
<div class="container">
 <div class="row">
    <section class="col-md-12">
         <div class="jumbotron" style="background-color: #ffffff;">
	    	<center><h1> La liste des demandes <h1></center>          
         </div>

     

<?php 
    try{

	  $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
    $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $id = $_SESSION['id'];



   	                   $SQL = "SELECT userid FROM users WHERE id=?"; 
                       $st = $db->prepare($SQL);
                       $res = $st->execute (array($id));
                       $row = $st->fetch();
                       $eeid = $row['userid'];
     
                       $SQL = "SELECT eid,sid FROM demandes WHERE (eeid=? AND statut=?)";
                       $st= $db->prepare($SQL);
                       $res = $st->execute(array($eeid,'refus'));
                    
                       if($st->rowCount() == 0){
                           echo "<center><h3>La liste est vide !!</h3></center>";
                           exit();
    
                       }else{
                          ?>
                        <div class="container">  
                         <table class="table table-stripted ">
                          <thead>
                           <tr>
                                
                           <th>Titre</th>
                           <th>Nom</th>
                           <th>Prenom</th>
                           <th>Choix</th>
                         </tr>
                      </thead>
                      <tbody>
                    <tr>  
                    <?php
                          while($row = $st->fetch()){
                          $eid = $row['eid'];
                          $sid = $row['sid'];
                          $_SESSION['eid'] = $eid;
                          
                         }
                        
                       
                       $SQL = "SELECT titre FROM stages WHERE sid=?";
                       $st = $db->prepare($SQL); 
                       $res = $st->execute(array($sid));
    
                echo"<td>";
                   $row = $st->fetch();
                   $titre = $row['titre'];
                  echo $titre;
                 }
                 echo "</td><td>";

              	$SQL = "SELECT nom,prenom FROM etudiants WHERE eid=?";
                $st = $db->prepare($SQL); 
                $res = $st->execute(array($eid));
    
      
                 $row = $st->fetch();
                 $n = $row['nom'];
                 $p = $row['prenom'];
                 echo $n;
                 echo"</td><td>";
                 echo $p;
                 echo "</td><td>";

               ?>
         <form class="form-horizontal" action="cnf.php" method="post" role="form">
           <div class="form-group">
                
                <div class="col-sm-12"> 

                  <label for="checkbox-inline" class="col-sm-3" ><input value ="acceptation"  name="statut" type="checkbox" > accepter </label>
                  <label for="checkbox-inline"><input value="refus" name="statut" type="checkbox" > refuser </label>
                </div>
              </div>  
       </td>
      </tr>
     </tbody>
    </table>
            
            <div class="form-group">
              <label class="control-label col-sm-4"></label>
                 <div class="col-sm-4">
                   <input type="submit" class="btn btn-primary " value="Confirmer">
                </div>
              </div>
            </form>
</div>      
<?php
    
     	

   $db = null;
   }catch (PDOEXception $e) {

	echo"Erreur SQL:".$e->getMessage();
   }
 
    
?>

  </section>
  </div>
</div>
<?php

include"footer.php";

?>