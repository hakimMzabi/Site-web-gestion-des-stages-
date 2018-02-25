<?php

session_start();

include"header.php";

?>
<div class="container">
  
  	<aside class ="clo-sm-5">
      <form action="rest_entr.php" method="post"class="panel-group form-horizontal" role="form">
      <div class ="panel panel-default">
       <div class ="panel-body">
        <div class ="panel-header">
         <h4>Recherche</h4>
        </div>
       <div class="input-group col-sm-5">
         <input type="search" class="form-control" placeholder="Rechercher..." required name="nom">
       <div class="input-group-btn">
         <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
       </div>
     </div>
    </aside>
  </div>
</div>
<?php

include"footer.php";
?>
