<?php
$page_title = "Ajout étudiant";
include"header_ent.php";
include"db_configpdo.php";
 
   try{

           $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
           $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
           $SQL = "SELECT fid,nom FROM filieres";
           $res = $db->query($SQL);
        
?>
	
	
<div class="container">
	<div class="row">
      <section class="col-md-12">
         <div class="jumbotron" style="background-color:#ffffff;">
          	<h2>Inscription étudiant:</h2>     
         </div>
      
           <form class="form-horizontal" action="inscri1.php" method="post" role="form">
             
               <div class="form-group">
       		        <label for="nom" class="col-sm-2 control-label"> Nom(*)</label> 
	  	            <div class="col-sm-5">
        	          <input type="text" class="form-control" placeholder ="Full name" required  name="nom">
                 </div>
               </div>
	    
	           <div class="form-group">
	             <label for="prenom" class="col-sm-2 control-label"> Prenom(*)</label>
                 <div class="col-sm-5">
                   <input type="text" class="form-control" placeholder ="Last name" required  name="prenom">
                 </div>
               </div>
	 
	          <div class="form-group">
	            <label for="email" class="col-sm-2 control-label">E-mail(*)</label>
                <div class="col-sm-5">
                  <input type="email" class="form-control" placeholder ="exemple@yyyy.com" required  name="email">
                </div>
            </div> 

              <div class="form-group">
                <label for="fid" class="control-label col-sm-2">Filiére(*)</label>
                   <div class="col-sm-5"> 
                     <select class ="form-control" id ="fid" required name="fid">
                        <option value="">Sélectionner une filiére </option>
                        <?php        
                          while($row = $res->fetch()){              
                        ?>

                        <option value=<?php echo "$row[fid]";?>> <?php echo "$row[nom]";?> </option>
                    
                        <?php 

                        }
                  
                     }catch (PDOEXception $e) {

                       echo"Erreur SQL:".$e->getMessage();
                      }
 
                    $db = null;

                   ?>

                   </select>       
                 </div>
               </div>
                 
	          <div class="form-group">
                 <label class=" control-label col-sm-2"></label>
                 <div class="col-sm-5">
                   <input type="submit" class="btn btn-primary btn-block"  value="Enregistrer">
                 </div>
            </div>

         </form>
       </section>
      </div> 
     <nav>
       <div class="col-sm-9">
        <ul class="pager">
            <li><a href="resp.php">Retour</a></li>
        </ul>
       </div> 
    </nav>
 </div>
    	
<?php
include"footer.php";
?>
