<?php

$page_title ="Espace entudiant";

include"header_etud.php";
?>

  
   
    <div style="width:50px;"></div>
     <div class="col-sm-2">
         <ul class="navbar navbar-default nav" style="height:600px;">
            <li ><a href="form_list_st.php"><span class ="glyphicon glyphicon-tasks"> Offres de stage</span></a></li>
            <li><a href="sui_dmd.php"><span class ="glyphicon glyphicon-tasks"> vos demandes</span></a></li>  
             <li ><a href="#"><span class ="glyphicon glyphicon-comment"> Messages</span></a></li>
              <li ><a href="#"><span class ="glyphicon glyphicon-user"> profil</span></a></li>
         </ul>
            
    </div>
   <div class="col-md-3">
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

      <div class="col-md-3">
        <div style="width:20px;height:50px;"></div>
        <div class="panel panel-info">
          <div class="panel-heading">
          <div class="row">
             <div class="col-sx-3"><i class="glyphicon glyphicon-education" style="font-size:4.5em"></i></div>
             <div class="col-xs-9 text-right">
               <div style="font-size:2.5em">25</div>
               <div>Entreprises</div>
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
      <div class="col-md-3">
        <div style="width:20px;height:50px;"></div>
        <div class="panel panel-info">
          <div class="panel-heading">
          <div class="row">
             <div class="col-sx-3"><i class="glyphicon glyphicon-signal" style="font-size:4.5em"></i></div>
             <div class="col-xs-9 text-right">
               <div style="font-size:2.5em">30</div>
               <div>Vos activités</div>
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
   
         
<?php
include"footer.php";
?>