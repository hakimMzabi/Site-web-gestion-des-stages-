<?php
$page_title = "la liste des entreprises";
 include"header_ent.php";
 require "db_configpdo.php";


   
try{

	  $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
    $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   	
   	$SQL = "SELECT eeid, nom FROM entreprises";
    $res = $db->query($SQL);
    if($res->rowCount() == 0)
     	 echo "<center><h3>La liste est vide !!<h3></center>";
       	else {
       		 ?>  
            <div class="container">
               <section class="col-md-12">
               <div class="jumbotron" style="background-color: #ffffff;" >
                  <h2>La liste des entreprises:<h2>          
              </div>
              <table class="table table-striped">
                 <thead>
                         <tr>        
                          <th>Identifiant</th>
                          <th>Entreprise</th>
                         </tr>
                        </thead>
                        <tbody>
                         
                         <?php while ($row = $res->fetch()){?>
                          <tr>
                          <td><?php echo "$row[eeid]";?></td>
                          <td><?php echo "$row[nom]";?></td>
                         </tr>
                         <?php }?>
                         </tbody>
                   </table>
               
                        <nav>
                          <ul class="pager">
                              <li><a href="resp.php">Retour</a></li>
                   </nav>
                </section>           
               </div>
            </div>             
     	    
     	   <?php
     	}
   }catch (PDOEXception $e) {

	echo"Erreur SQL:".$e->getMessage();
   }
 
     $db = null;

 include"footer.php";
?>