<?php
session_start();
$page_title = "Suppression d'un satge";
include"header.php";
include"db_configpdo.php";

  try{

	$db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
  $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  
  $id = $_SESSION['id']; 
  $SQL = "SELECT userid FROM users WHERE id=?";
  $st = $db->prepare($SQL);
  $res = $st->execute(array($id));
  $row = $st->fetch();
  $eeid = $row['userid'];

 
  $SQL = "SELECT sid,titre FROM stages where eeid=?";
  $st = $db->prepare($SQL);
  $res = $st->execute(array($eeid));

    if($st->rowCount() == 0)
     	 echo "<center><h3>La liste est vide</h3></center>";
       	else {
       		
             ?>
               <div class="container">  
                 <table class="table">
                 <thead>
                   <tr>
                     <th>Identifiant</th>
                     <th>Titre</th>
                     <th>Choix</th>
                   </tr>
                </thead>
                
                <tbody>
                    <?php while ($row = $st->fetch()){?>      
                  <tr>
                     <th scope="row"><?php echo "$row[sid]";?></th>
                     <td><?php echo "$row[titre]";?></td>
                     <td><?php echo "<a href ='getsup.php?id=$row[sid]'";?> > Supprimer </a></td>
                 </tr>
                  <?php }?>
                  </tbody>
                  
                </table>
                    <nav>
                      <ul class="pager">
                        <li><a href="esp_entr.php">Retour</a></li>
                      </ul>
                    </nav>               
               </div> 
       <?php
     	 
     $db = null;
         }
 }catch (PDOEXception $e) 
   {
  echo"Erreur SQL:".$e->getMessage();
   }

include"footer.php";
?>