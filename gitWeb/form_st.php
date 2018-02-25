<?php

$page_title = "Ajout d'un stage";


include "header.php";
include "db_configpdo.php";
     
    
?>

       <div class="container">
          <div class="row">
            <section class="col-md-12">
            <div class="jumbotron" style="background-color:#ffffff;">
              <h2>Remplisez les champs: <h2>          
            </div>

            
	          <form class="form-horizontal" method="post" action="ajo_st.php">
               <div class="form-group">
                  <label for="fid" class="control-label col-sm-2">Filiére(*)</label>
                  <div class="col-sm-5">
                    
<?php

  try{

        $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
        $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
        $SQL = "SELECT fid,nom FROM filieres";
        $res = $db->query($SQL);
        
?>
        <select class ="form-control"  id ="fid" name="fid" required>
                 <option value="">Sélectionner une filiére </option>
<?php        
        while($row = $res->fetch()){              
?>

                <option value=<?php echo "$row[fid]";?>> <?php echo "$row[nom]";?> </option>
                    
<?php 
   }
?>
                     </select>       
                   </div>
                </div>        
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
 
<?php
 
}catch (PDOEXception $e) {

  echo"Erreur SQL:".$e->getMessage();
   }
 
     $db = null;
?>
                <div class="form-group">
                  <label for="description" class="control-label col-sm-2 ">Description(*)</label>
                  <div class="col-sm-5">
                    <textarea type="text" class="form-control my-fixed" row="8" required  id="des" name="description" ></textarea>
                  </div>
                </div>  

                 <div class="form-group">
                  <label for="titre" class="control-label col-sm-2 ">Titre(*)</label>
                  <div class="col-sm-5">
                     <input type="text" class="form-control" required  id="tit" name="titre">
                  </div>
                 </div>  
                
                <div class="form-group">
                 <label class="control-label col-sm-2"></label>
                 <div class="col-sm-5">
                   <input type="submit" class="btn btn-primary btn-block" value="Ajouter">
                 </div>
               </div> 
         </form>
        </section>
      </div>
     </div>    
     
        <div class="col-sm-9">
          <nav>
            <ul class="pager">
              <li><a href="esp_entr.php">Retour</a></li>
            </ul>
          </nav>
      </div>
     


<?php
include"footer.php";
?>
