<?php

session_start();

include"header.php";

?>
<div class="container">
  
  	<aside class ="clo-sm-5">
      <form action="recherche_etd.php" class="panel-group form-horizontal" role="form">
      <div class ="panel panel-default">
       <div class ="panel-body">
        <div class ="panel-header">
         <h4>Recherche</h4>
        </div>
       <div class="input-group col-sm-5">
         <input type="search" class="form-control" placeholder="Rechercher..." required>
       <div class="input-group-btn">
         <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
       </div>
     </div>
    </aside>
  </div>
</div>
<?php

    
   if (isset($_POST["nom"])){

    $n = $_POST['nom'];
    

    if($n ==""){
    include"cat_form.php";
    }

   require"db_configpdo.php";


    try{

     $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
    

    $SQL = "SELECT nom,prenom FROM etudiants WHERE nom=?";
    $st = $db->prepare($SQL);
    $res = $st->execute (array($n));
   
    if(!$res)
       echo "Erreur de recherche";
    else 
      while ($row = $res->fetch()){
             echo "<table>
                 
                      <td>$row[nom]</td><td>$row[prenom]</td>
                 
                   </table>";
         }
      
           echo"<a href = 'resp.php'> Revenir la page de gestion </a>";
      $db = null;

   }catch (PDOEXception $e) {
      exit("Erreur de connexion".$e->getMessage());
  
    }
  }
include"footer.php";
?>
