<?php
$page_title ="Ajout entreprise";
include"header_ent.php";
 include"db_configpdo.php";


if ( (isset($_POST["nom"])) && (isset($_POST["nomc"])) && (isset($_POST["prenom"])) && (isset($_POST["email"])) && (isset($_POST["num"])) ){
  
  $n = $_POST['nom'];
  $nc = $_POST['nomc'];
  $p = $_POST['prenom'];
  $e = $_POST['email'];
  $num = $_POST['num'];

  
  if( ($n =="") || ($nc =="") || ($p =="") || ($e == "") || (!is_numeric($num)) )
   {
    include"entre_form.php";
   }

 try{

   $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
    
 
   $SQL = "INSERT INTO entreprises VALUES (DEFAULT,?,?,?,?,?)";
   $st = $db->prepare($SQL);
   $res = $st->execute (array($n,$nc,$p,$e,$num));
   
    if(!$res){
           ?>
          <div class="alert alert-info">
            <strong>Attention</strong> Erreur d'ajout 
         </div> 
        <?php
         }else{
        ?> 
         <div class="alert alert-success">
            <center><strong>Success!</strong> L'entreprise <?php echo"$n";?> a été ajoutée</center>
         </div>
        <?php
         }
      echo "<center><p><a href='resp.php'>Revenir a la page d'accueil</a>\n</center>";

      $db = null;

   }catch (PDOEXception $e) {
      exit("Erreur de connexion".$e->getMessage());
  
    }

include"footer.php";
}
?>