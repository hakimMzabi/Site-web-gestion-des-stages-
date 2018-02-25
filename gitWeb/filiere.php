<?php
$page_title = "Gestion des filieres";
include"header.php";
?>
<div class="container">
 <div class="row">
    <section class="col-md-12">
         <div class="jumbotron" style="background-color: #ffffff;" >
    	    	<center><h1>Gestion des filiéres<h1></center>          
         </div>

   <div style="width:50px;height:20px;"></div>
     <div class="col-lg-3">
         <ul class="navbar navbar-default nav" style="height:500px;">
            <li ><a href="fil_form.php"><span class ="glyphicon glyphicon-plus"> Ajout filiére</span></a></li>
            <li><a href="supp_fil.php"><span class ="glyphicon glyphicon-trash"> Suppression filiére</span></a></li>  
            <li><a href="update_fil.php"><span class ="glyphicon glyphicon-cog"> Modification filiére</span></a></li>  
         </ul>       
     </div>

    
   </section>
 </div>
</div>

<?php

include"footer.php";
