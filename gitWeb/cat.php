<?php
$title = " Gestion des categories";
session_start();
include"header_ent.php";
?>
<div class="container">
 <div class="row">
    <section class="col-md-12">
         <div class="jumbotron">
	    	<center><h1> Gestion des catégories <h1>          
         </div>

   <div class="col-sm-12">
      <div class="col-sm-4">
         <h3><a href="cat_form.php" >Ajouter un catégorie</a><h3>
      </div>
      
      <div class="col-sm-4">
       <h3><a href="supp_cat.php">Supprimer un catégorie</a></h3>
      </div>
     
     <div class="col-sm-4">
        <h3><a href="update_cat.php">Modifier un catégorie</a></h3>
     </div>
     
    
 </section>
</div>
<center>
<?php
include"footer.php";
?>