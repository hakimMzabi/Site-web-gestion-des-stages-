<?php

$page_title ="Modification du catégorie";

?>
<div class="container">
 <div class="row">
   <div class="col-sm-3"></div>
    <section class="col-md-12">
         <div class="jumbotron" style="background-color: #ffffff;">
	    	<center><h3>Modifier le catégorie <h3></center>          
         </div> 
   
	
	<form class="form-horizontal" action="" method="post">
	  <div class="form-group">
	  <div class="col-sm-2"></div>
	     <label for="nom" class="col-sm-2 control-label">Nom du catégorie*</label>
               <div class="col-sm-4">
                <input type="text" class="form-control" name="nom" placeholder ="catégorie..." required  id="categorie" value="<?php echo $row['nom']; ?>">
	          </div>
	     </div>
	 
	  
	   <div class="form-group">
	          <div class="col-sm-2"></div>
              <label class="col-sm-2 control-label "></label>
              
              <div class="col-sm-4">
                <input type="submit" class="btn btn-primary btn-block" value="Modifier">
              </div>
          </div>
	   
	 
 </form>
 </section>
 </div>
</div>
<?php
include"footer.php";
?>