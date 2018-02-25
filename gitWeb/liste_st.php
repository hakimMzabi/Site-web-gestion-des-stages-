<?php
session_start();

$page_title = "La liste des stages";
include"header_etud.php";
require"db_configpdo.php";


if (  isset($_POST["cid"]))
{
   
    
    $cid = $_POST['cid'];
        
    
    if(  (!is_numeric($cid)) || (!$cid>0) ){
       
   
       include"form_list_st.php";
 }else{
  
   try{

    $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
    $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $id = $_SESSION['id'];
   
    $sql = "SELECT userid FROM users WHERE id=?"; 	   
    $st = $db->prepare($sql);
    $res = $st->execute(array($id));
    $row = $st->fetch();
    $eid = $row['userid'];
   

    
    $SQL = "SELECT fid FROM etudiants WHERE eid=?";      
    $st = $db->prepare($SQL);
    $res = $st->execute(array($eid));
    $row = $st->fetch();
    $fid = $row['fid'];

          ?>
                        <div class="container">  
                             <table class="table ">
                             <thead>
                               <tr>
                                
                                 <th>choix</th>
                                 <th>Titre</th>
                                 <th>Entreperise</th>
                               </tr>
                            </thead>
                            <tbody>
                               
                                
                                <?php 

                                      $SQL = "SELECT sid,eeid,description,titre FROM stages WHERE (fid=? AND cid=?)";
                                      $st = $db->prepare($SQL);
                                      $res = $st->execute(array($fid,$cid));
  
                                       if($st->rowCount() == 0){
                                        echo "<center>La liste est vide!!</center";
                                        include "footer.php";
                                        exit();

                                        }else{
                                       
                                         while($row = $st->fetch()){
                                          
                                          $eeid = $row['eeid'];
                                          $titre = $row['titre'];
                                          
                                          echo"<tr><td><a href='dmd.php?id=$row[sid]'>Envoyer une demande</a></td>";
                                      ?><td><?php echo $titre ;} ?></td>
                                      
                                        <?php 
                                    
                                         $SQL = "SELECT nom FROM entreprises WHERE eeid=?";
                                         $st = $db->prepare($SQL);
                                         $res = $st->execute(array($eeid));
                                          
                                        if($st->rowCount() == 0)
                                           echo "<center>La liste est vide!!</center>";
                                          else
                                           while($row = $st->fetch()){
                  
                                            echo "<td> $row[nom] </td>"; }?> 
                                            
                                  </tr>
                           
                           </tbody>
                          </table>
                        </div>    
                <?php
              }
     	
   }catch (PDOEXception $e) {

    	echo"Erreur SQL:".$e->getMessage();
   }
 
 $db = null;
  }

include"footer.php";

}
?>