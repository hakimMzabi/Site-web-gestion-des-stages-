<?php
$page_title ="Espace entreprise";
include"header.php";
?>

  <div style="width:50px;"></div>
     <div class="col-sm-2">
     <ul class="navbar navbar-default nav" style="height:650px;">
        <li ><a href="#ges" data-toggle="collapse"><span class ="glyphicon glyphicon-tasks"> Gestion des stages</span></a>
          <ul class="nav collapse" id ="ges">
              <li ><a href="form_st.php"><i class ="glyphicon glyphicon-plus"> Ajouter un stage</i></a></li>
              <li ><a href="supp_st.php"><i class ="glyphicon glyphicon-trash"> Supprimer un stage</i></a></li>
               <li ><a href="modi_st.php"><i class ="glyphicon glyphicon-cog"> Modifier un stage</i></a></li>
            </ul>

        </li>
        

        <li><a href="demd.php"><span class ="glyphicon glyphicon-tasks"> Les demandes</span></a></li>
       <li><a href="#"><span class ="glyphicon glyphicon-comment"> Messages</span></a></li>
       <li><a href="#"><span class ="glyphicon glyphicon-user"> Profil</span></a></li>
      </ul>
  </div>
  <div class="col-md-4">
        <div style="width:20px;height:50px;"></div>
        <div class="panel panel-primary">
          <div class="panel-heading">
          <div class="row">
             <div class="col-sx-3"><i class="glyphicon glyphicon-comment" style="font-size:4.5em"></i></div>
             <div class="col-xs-9 text-right">
               <div style="font-size:2.5em">10</div>
               <div>Messages</div>
          </div>
        </div>
      </div>
      <a href="#">
        <div class="panel-footer">
          <div class="pull-left">consulter</div>
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
      <a href="#">
        <div class="panel-footer">
          <div class="pull-left">Liste d'etudiants acceptés</div>
          <div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>
          <div class="clearfix"></div>
        </div>
        </a>
       </div>
      </div>
      <div class="col-md-4">
        <div style="width:20px;height:50px;"></div>
        <div class="panel panel-warning">
          <div class="panel-heading">
          <div class="row">
             <div class="col-sx-3"><i class="glyphicon glyphicon-signal" style="font-size:4.5em"></i></div>
             <div class="col-xs-9 text-right">
               <div style="font-size:2.5em">30</div>
               <div>Stage</div>
          </div>
        </div>
      </div>
      <a href="#">
        <div class="panel-footer">
          <div class="pull-left">stage-non affecté</div>
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
             <div class="col-sx-3"><i class="glyphicon glyphicon-refresh" style="font-size:4.5em"></i></div>
             <div class="col-xs-9 text-right">
               <div style="font-size:2.5em">7</div>
               <div>Mise à jour des stages</div>
          </div>
        </div>
      </div>
      <a href="supp_offr.php">
        <div class="panel-footer">
          <div class="pull-left">Actualiser</div>
          <div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>
          <div class="clearfix"></div>
        </div>
        </a>
       </div>
      </div>

 
   

<?php

include"footer.php";
?>
