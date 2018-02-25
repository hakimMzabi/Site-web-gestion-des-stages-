<?php
include"header_ent.php";
?>
<div class="container">
 <div class="row">
   <div class="col-sm-3"></div>
     <section class="col-md-12">
         <div class="jumbotron" style="background-color:#ffffff;">
            <h3>La liste des étudiants inscrits:<h3>          
         </div>
     </section>
   </div>
  </div>      
<?php

if (!isset($_GET["id"])){
   
          echo "<p> Erreur </p>\n";
 
        }else{

 try{
        $fid = $_GET["id"];        
        include"db_configpdo.php";
        $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
        $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
               
        $SQL = "SELECT eid,nom,prenom FROM etudiants WHERE fid =?"; 
        $st = $db->prepare($SQL);
        $st->execute(array($fid));
        if($st->rowCount() == 0)
     	 echo "<center><h3>La liste est vide</h3></center>";
       	else {
       		
     	    
     	       ?>
             
     	      	 <div class="container">
                 
     	      	 <table class= "table table-striped">
     	 	           <tr>
     	 	             <td><h3>Identifiant</h3></td>
                     <td><h3>Nom</h3></td>
                     <td><h3>Prenom</h3></td>
     	 	           </tr>
     	 	          <?php  while ($row = $st->fetch()){?> 
     	 	           <tr>
     	 	             <td><?=$row['eid']?></td>
                     <td><?=$row['nom']?></td>
                     <td><?=$row['prenom']?></td>
     	 	           </tr>
                    <?php }?>
     	 	         </table>

             </div>
<?php
     	          
     $db = null;
         }
 }catch (PDOEXception $e) 
   {
  echo"Erreur SQL:".$e->getMessage();
   }

}

include"footer.php";

?>