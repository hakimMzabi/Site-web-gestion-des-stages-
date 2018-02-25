
      <div class="container">
 
           <p><h4> Introduisez les données de l'utilisateur:</h4></p>
 
           <form class="form-horizontal" method="post" role="form">
           
           <div class="form-group">
              <label for="nom" class="col-sm-2 control-label"> Nom *</label>
              <div class="col-sm-3">
                  <input type="text" class="form-control" placeholder ="Full name" required name="nom" >
              </div>
           </div>

            <div class="form-group">
               <label for="prenom" class="col-sm-2 control-label"> Prenom *</label>
               <div class="col-sm-3">
                <input type="text" class="form-control"  placeholder ="Full Last name" required  name="prenom">
              </div>
           </div>

            <div class="form-group">
              <label for="userid" class="col-sm-2 control-label">Identifiant *</label>
              <div class="col-sm-3">
                  <input type="text" class="form-control" placeholder ="identifiant" required name="userid" >
              </div>
           </div>

            <div class="form-group">
               <label for="login" class="col-sm-2 control-label"> Login *</label>
               <div class="col-sm-3">
                <input type="email" class="form-control"  placeholder ="exemple@yyy.com" required  name="login">
              </div>
            </div>
    
             <div class="form-group">
                <label for="type" class="col-sm-2 control-label"  > Type *</label>
                <div class="col-sm-6"> 
                  <label for="checkbox-inline" class="col-sm-3" ><input value ="etudiant"  name="type" type="checkbox"> Etudiant </label>
                  <label for="checkbox-inline"><input value="entreprise" name="type" type="checkbox" > Entreprise </label>
                </div>
              </div>  

     
            <div class="form-group">
              <label for="password" class="col-sm-2 control-label">Mot de passe *</label>
              <div class="col-sm-3">
                <input type="password" class="form-control"  placeholder ="******************" required  name="password">
              </div>
            </div>

            <div class="form-group">
              <label for="password2" class="col-sm-2 control-label">confirmer le mot de passe *</label>
              <div class="col-sm-3">
                <input type="password" class="form-control"  placeholder ="*******************" required  name="password2">
              </div>
            </div>


            <div class="form-group">
              <label class="control-label col-sm-2"></label>
              <div class="col-sm-3">
                <input type="submit" class="btn btn-primary btn-block" value="Valider">
              </div>
            </div>
            
           <div class="form-group">
              <label class="control-label col-sm-2"></label>
              <div class="col-sm-3">
                <input type="submit" class="btn btn-primary btn-block" value="Recommencer">
              </div>
          </div>
       </form>
  </div>

<?php
include"footer.php";
?>
