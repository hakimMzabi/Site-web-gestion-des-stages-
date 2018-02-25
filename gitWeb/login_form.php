<?php

if (isset($badlogin)) {
?>
<div class="alert alert-danger">
               
                <center>  <strong>Attention:</strong> Email ou mot de passe invalide! !! </center>
               <center><p class='info'>Vérifiez les données svp.</p></center>
             </div> 

 

<?php
}
?>

<div class="container">
 <div class="row">
  <section class="col-md-12">
  <center>
  <div class="col-sm-4"></div>
  <form class="col-sm-4" action="" method="post" role="form"><br/><br/><br/>
    <legend>Authentifiez-Vous</legend>
      <div class="form-group">
        <label for="login"> login</label>
    
        <input type="email" class="form-control" placeholder ="Votre email" required  name="login">
    
       </div>

       <div class="form-group">
          <label for="mdp">Votre mot de passe</label>
          <input type="password" class="form-control"  placeholder ="******************" required  name="password">
    
       </div>


      <div class="form-group">
        <label>
          <div class="col-sm-3">
            <button type="submit" class="btn btn-primary">Connexion</button>
          </div>
        </label>
      </div>

     
     </form>
    <div class="col-sm-4">
   </div>
  </center>
  </section>
 </div>
</div>
<?php
 include"footer.php";
?>

