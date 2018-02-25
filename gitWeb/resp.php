<?php
session_start();
$page_title = "Espace responsable";

include"header_ent.php";
?>

  
	<div style="width:50px;"></div>
	   <div class="col-sm-2">
		 <ul class="navbar navbar-default nav" style="height:600px ;">
      	
        <li ><a href="#new" data-toggle="collapse"><span class ="glyphicon glyphicon-plus"> Inscriptions</span></a>
            
            <ul class="nav collapse" id ="new">
              <li ><a href="form_etud.php"><i class ="glyphicon glyphicon-share-alt"> Etudiant</i></a></li>
              <li ><a href="entre_form.php"><i class ="glyphicon glyphicon-share-alt"> Entreprise</i></a></li>
            </ul>

       </li>

        <li><a href="#filiere" data-toggle="collapse"><span class ="glyphicon glyphicon-tasks"> Filiéres</span></a>

              <ul class="nav collapse" id ="filiere">
              <li ><a href="fil_form.php"><i class ="glyphicon glyphicon-plus"> Ajout filiére</i></a></li>
              <li ><a href="supp_fil.php"><i class ="glyphicon glyphicon-trash"> Suppression filiére</i></a></li>
               <li ><a href="update_fil.php"><i class ="glyphicon glyphicon-cog"> Modification filiére</i></a></li>
            </ul>


        </li>

        <li><a href="#cat" data-toggle="collapse"><span class ="glyphicon glyphicon-tasks"> Catégories</span></a>

               <ul class="nav collapse" id ="cat">
              <li ><a href="cat_form.php"><i class ="glyphicon glyphicon-plus"> Ajout catégorie</i></a></li>
              <li ><a href="supp_cat.php"><i class ="glyphicon glyphicon-trash"> Suppression catégorie</i></a></li>
               <li ><a href="update_cat.php"><i class ="glyphicon glyphicon-cog"> Modification  catégorie</i></a></li>
            </ul>
        </li>
       
       <li><a href="new_user.php"><span class ="glyphicon glyphicon-plus"> Ajout utlisateur</span></a></li>
        <li><a href="#"><span class ="glyphicon glyphicon-comment"> Message</span></a></li>
        <li><a href="#"><span class ="glyphicon glyphicon-user"> Profile</span></a></li>
        
      </ul>
       </div>
      <div class="col-md-4">
        <div style="width:20px;height:50px;"></div>
        <div class="panel panel-success">
          <div class="panel-heading">
          <div class="row">
             <div class="col-sx-3"><i class="glyphicon glyphicon-signal" style="font-size:4.5em"></i></div>
             <div class="col-xs-9 text-right">
               <div style="font-size:2.5em">10</div>
               <div>Entreprises</div>
          </div>
        </div>
      </div>
      <a href="list_entr.php">
        <div class="panel-footer">
          <div class="pull-left">Liste des entreprises</div>
          <div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>
          <div class="clearfix"></div>
        </div>
        </a>
       </div>
      </div>

      <div class="col-md-4">
        <div style="width:20px;height:50px;"></div>
        <div class="panel panel-success">
          <div class="panel-heading">
          <div class="row">
             <div class="col-sx-3"><i class="glyphicon glyphicon-education" style="font-size:4.5em"></i></div>
             <div class="col-xs-9 text-right">
               <div style="font-size:2.5em">25</div>
               <div>Etudiants</div>
          </div>
        </div>
      </div>
      <a href="list_etd_fil.php">
        <div class="panel-footer">
          <div class="pull-left">Liste d'etudiants</div>
          <div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>
          <div class="clearfix"></div>
        </div>
        </a>
       </div>
      </div>
      <div class="col-md-4">
        <div style="width:20px;height:50px;"></div>
        <div class="panel panel-info">
          <div class="panel-heading">
          <div class="row">
             <div class="col-sx-3"><i class="glyphicon glyphicon-signal" style="font-size:4.5em"></i></div>
             <div class="col-xs-9 text-right">
               <div style="font-size:2.5em">30</div>
               <div>Stage</div>
          </div>
        </div>
      </div>
      <a href="list_st_naf.php">
        <div class="panel-footer">
          <div class="pull-left">stage-non affecté</div>
          <div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>
          <div class="clearfix"></div>
        </div>
        </a>
       </div>
      </div>
		    
<?php
include"footer.php";
?>