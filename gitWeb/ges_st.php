<?php
session_start();
$page_title ="Gestion des stages";
include"header.php";
?>
<div class="container">
 <div class="row">
    <section class="col-md-12">
         <div class="jumbotron">
	    	<center><h1>Gestion des stages <h1></center>          
         </div>

   <div style="width:50px;height:20px;"></div>
     <div class="col-lg-3">
     <ul class="navbar navbar-default nav" style="height:650px;">
        <li ><a href="form_st.php"><span class ="glyphicon glyphicon-plus"> Ajout stage</span></a></li>
        <li><a href="supp_st.php"><span class ="glyphicon glyphicon-tasks"> Suppression stage</span></a></li>
        <li><a href="modi_st.php"><span class ="glyphicon glyphicon-tasks"> Modification stage</span></a></li>    
     </ul>      
   </div>

    </section>
   </div>  
  </div>


<?php

include"footer.php";
