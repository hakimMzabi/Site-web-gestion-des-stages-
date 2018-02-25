<?php
session_start();
 $page_title = "Liste des etudiants sans stage";
 include"header_ent.php";
  
       try{ 

        include"db_configpdo.php";
       
        $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
        $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
               
        
           $SQL = "SELECT nom,prenom FROM etudiants 
                   WHERE eid NOT IN 
                   (SELECT eid FROM demandes)";

            $st = $db->prepare($SQL);
            $res = $db->query($SQL);
            
           
           
          

           if(!$res){
           ?>
            <div class="alert alert-warning">
               <center><b>inof!!</b> tout les stages sont affectés </center>
            </div>
          <?php
           }else{?>
               
               <div class="container">  
                    <table class="table table-sripted ">
                       <thead>
                         <tr>        
                          <th>Titre</th>
                         </tr>
                        </thead>
                        <tbody>
                          <?php while($row = $st->fetch()){?>
                            <tr>  
                              <td>
                                  <?php echo"$row[nom]";?>
                              </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                 </div>
              <?php
            
            echo"<center><a href = 'resp.php'> Revenir la page principale </a></center>";}
        $db = null;
       
  
    
   }catch (PDOEXception $e){
        echo"Erreur SQL:".$e->getMessage();
   }

include"footer.php";
?>
