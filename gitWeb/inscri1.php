<?php
$page_title = "Ajout etudiants";
include"header_ent.php";
include"db_configpdo.php";

//cnx PDO


if ( (isset($_POST["nom"]) ) && ( isset($_POST["prenom"]) ) && ( isset($_POST["email"]) ) && ( isset($_POST["fid"]) ) )
{
    
        $n = $_POST['nom'];
        $p = $_POST['prenom'];
        $e = $_POST['email'];
        $f = $_POST['fid'];
         
        if( ($n =="") || ($p =="") || ($e =="") || (!is_numeric($f))  )
         {
          
          include"form_etud.php";
         }

       try{

         $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
          
       
         $SQL = "INSERT INTO etudiants VALUES (DEFAULT,?,?,?,?)";
         $st = $db->prepare($SQL);
         $res = $st->execute (array($n,$p,$e,$f));
         
          if(!$res){
             
               ?>
             <div class="alert alert-danger">
               
                <center>  <strong>Attention:</strong> Erreur d'ajout !! </center>
            
             </div> 
         
         <?php 
        
          }else{ 
          
          ?>

             <div class="alert alert-success">
             
              <center> <strong>Success!</strong> L'etudiant <?php echo"$n";?> a été ajoutée </center>
             
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
