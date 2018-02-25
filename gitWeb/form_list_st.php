<?php
$page_title = "La liste des stages";
include"header_etud.php";
require"db_configpdo.php";
try{

	  $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
    $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
?>

      <div class="container">
       <div class="row">
          <section class="col-md-12">
          <div class="jumbotron" style="background-color: #ffffff;">
             <h1>Recherche de stage:<h1>        
          </div>

         <form class="form-horizontal" method="post" action="liste_st.php">
               
<?php
 

  $SQL = "SELECT cid,nom FROM categories";
  $res = $db->query($SQL);
  

?>                
              
               <div class="form-group">
                  <label for="cid" class="control-label col-sm-2">Carégorie(*) </label>
                  <div class="col-sm-5">
                    <select class ="form-control" name="cid" required >
                    <option value=""> Selectionner un catégorie</option>
<?php        
        while($row = $res->fetch()){              
?>
           <option value=<?php echo "$row[cid]";?>> <?php echo "$row[nom]";?> </option>
                    
<?php 
   }
?>

                   </select>
                  </div>
                </div>
                <div class="form-group">
                 <label class="control-label col-sm-2"></label>
                 <div class="col-sm-5">
                   <input type="submit" class="btn btn-primary btn-block" value="Rechercher">
                 </div>
               </div>    
              </form>
              </section>
              </div>
              <div class="col-sm-9">
               <nav>
                  <ul class="pager">
                    <li><a href="esp_etu.php">Retour</a></li>
                  </ul>
             </nav>
            </div>
         </div>     
<?php

     /*$SQL = "SELECT userid FROM users";
     $res = $db->query($SQL);
     $row = $res->fetch();
     $_SESSION['id'] = $row['userid'];
  */
   }catch (PDOEXception $e) {

  echo"Erreur SQL:".$e->getMessage();
   }
 
     $db = null;

include"footer.php"
?>