<?php
$page_title = "Ajout filiere";
include"header.php";

 include"db_configpdo.php";

 if (isset($_POST["nom"])){

    $n = $_POST['nom'];


    if($n ==""){
    include"fil_form.php";
    }
    try{

     $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
    

    $SQL = "INSERT INTO filieres VALUES (DEFAULT,?)";
    $st = $db->prepare($SQL);
    $res = $st->execute (array($n));
   
    if(!$res)
    {
     ?>
         <div class="alert alert-danger">
             
              <center> <strong>Erreur!!</strong> Erreur d'ajout !! </center>
             
             </div>      
     <?php
     }else{

            ?>

             <div class="alert alert-success">
             
              <center> <strong>Success!</strong> La filiére <?php echo"$n";?> a été ajoutée </center>
             
             </div>
          <?php

     } 
     
      echo"<center><a href = 'resp.php'> Revenir la page de gestion </a></center>";
      $db = null;

   }catch (PDOEXception $e) {
  exit("Erreur de connexion".$e->getMessage());
  
    }

}
 include"footer.php";


?>