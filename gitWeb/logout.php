 <?php

session_start();
$page_title = "Déconnexion";
session_destroy();
include("heeader.php");
?>
<br/><br/>
 <div class="alert alert-warning">
               
 <center>  <strong>Information:</strong> Vous êtes déconnecté !! </center>
            
 </div> 

<?php
include("footer.php");

?>