<?php
$page_title ="Ajout entreprise";
include"header_ent.php";

?>
	
<div class="container">
 <div class="row">
    <section class="col-md-12">
         <div class="jumbotron" style="background-color:#ffffff;">
           <h2>Inscription entreprise:</h2>
         </div>
   
 
   <form class="form-horizontal" action="inscri2.php" method="post" role="form">
     <div class="form-group">
	     <label for="nom" class="col-sm-4 control-label"> Nom de l'entreprise(*)</label>
       <div class="col-sm-5">
         <input type="text" class="form-control" placeholder ="Full name"  name="nom" required>
       </div>
     </div>

     <div class="form-group">
	      <label for="nomc" class="col-sm-4 control-label"> Nom de contact(*)</label>
        <div class="col-sm-5">
          <input type="text" class="form-control"  placeholder ="Full name"  name="nomc" required>
        </div>
      </div>

      <div class="form-group">
      	<label for="prenom" class="col-sm-4 control-label"> prenom de contact(*)</label>
        <div class="col-sm-5">
        	<input type="text" class="form-control"  placeholder ="Last name" name="prenom" required >
        </div>
     </div>

     <div class="form-group">
        <label for="email" class="col-sm-4 control-label"> Email de contact(*)</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" placeholder ="example@xxx.yyy"  name="email" required>
        </div>
      </div>

    <div class="form-group">
	     <label for="num" class="col-sm-4 control-label">Numéro de contact(*)</label>
       <div class="col-sm-5">
    	    <input type="text" class="form-control"  placeholder ="06xxxxxxx"  name="num" required>
       </div>
    </div>

     <div class="form-group">
       <label class="control-label col-sm-4"></label>
       <div class="col-sm-5">
          <input type="submit" class="btn btn-primary btn-block" value="Enregistrer">
      </div>
     </div>
    
    </form>
   </section>
  </div>  
  <nav>
       <div class="col-sm-12">
        <ul class="pager">
            <li><a href="resp.php">Retour</a></li>
        </ul>
       </div> 
    </nav>
 </div>
<?php
include"footer.php";
?>