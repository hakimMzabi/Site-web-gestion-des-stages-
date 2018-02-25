<?php
include"header_ent.php";
?>
<div class="container">
 <div class="row">
   <div class="col-sm-3"></div>
     <section class="col-md-12">
         <div class="jumbotron" style="background-color: #ffffff;">
            <center><h3>La liste des étudiants<h3></center>          
         </div>
     </section>
   </div>
  </div>      


<?php
require "db_configpdo.php";
 
     try{

  	$db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
    $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   	
   	$SQL = "SELECT fid,nom FROM filieres";
    $res = $db->query($SQL);
    if($res->rowCount() == 0)
     	 echo "liste est vide!!";
       	else {

          ?>  
            <div class="container">
              <table class="table table-striped">
                 <thead>
                         <tr>        
                          <th>Filiére</th>
                          <th>Choix</th>
                         </tr>
                        </thead>
                        <tbody>
                         
                         <?php while ($row = $res->fetch()){?>
                          <tr>
                          <td><?php echo "$row[nom]";?></td>
                          <td><?php echo "<a href ='list_etu.php?id=$row[fid]'?><h4>Voir liste<h4></a>";?></td>
                         </tr>
                         <?php }?>
                         </tbody>
                   </table>
               
                        <nav>
                          <ul class="pager">
                              <li><a href="resp.php">Retour</a></li>
                   </nav>
               </div>             
    <?php
      

     $db = null;
         }
       }catch (PDOEXception $e) {
  			echo"Erreur SQL:".$e->getMessage();
   		}

   


include"footer.php";

?>