<?php

$page_title = "supression catégorie";
include "header_ent.php";
?>
<div class="container">
 <div class="row">
   <div class="col-sm-3"></div>
     <section class="col-md-12">
         <div class="jumbotron"style="background-color: #ffffff;">
            <center><h3>Choisissez le catégorie à supprimer<h3></center>          
         </div>
     </section>
   </div>
  </div>      

<?php
include"db_configpdo.php";
   
    try{

	$db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
    $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   	
   	$SQL = "SELECT * FROM categories";
    $res = $db->query($SQL);
    if($res->rowCount() == 0)
     	 echo "liste est vide";
       	else {
       		?>
          <div class="container">
            <table class="table">
              
              <thead>
                         <tr>        
                          <th>Nom</th>
                          <th>Choix</th>
                         </tr>
                        </thead>
                        <tbody>
                          <?php while($row = $res->fetch()){?>
                            <tr>  
                              <td>
                                  <?php echo"$row[nom]";?>
                              </td>
                              <td>
                                 <?php echo"<a href ='getid2.php?id=$row[cid]'>Supprimer</h3></a>"?>
                              </td>
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
 }catch (PDOEXception $e) 
   {
  echo"Erreur SQL:".$e->getMessage();
   }

include("footer.php");
?>