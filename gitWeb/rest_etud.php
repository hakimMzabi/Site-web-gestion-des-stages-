<?php
include"header_ent.php";
echo"<h3>La recherche que vous avez effectuée correspont à: </h3><br/>";
  if (isset($_POST["nom"])){

    $n = $_POST['nom'];
    

    if($n ==""){
    include"cat_form.php";
    }

   require"db_configpdo.php";


    try{

     $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
     $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    

    $SQL = "SELECT * FROM etudiants WHERE nom=?";
    $st = $db->prepare($SQL);
    $res = $st->execute (array($n));
   
    if(!$res)
       echo "Erreur de recherche";
    else 
      
             ?>
             <div class="container">
               <div class="col-sm-9">
               <center><table class="table table-stripted">
                 <tr>
                   <td><h3>Nom</h3></td>
                   <td><h3>Prenom</h3></td>
                 </tr>
                 <?php while ($row = $st->fetch()) { ?>
                 <tr>
                   <td><?php echo"$row[nom]";?></td>
                   <td><?php echo"$row[prenom]";?></td>
                 </tr>
                  <?php } ?>
               </table>
              </div>
            </div>  
         <?php
         

   }catch (PDOEXception $e) {
      exit("Erreur de connexion".$e->getMessage());
  
    }
    $db = null; 

include"footer.php";
}
?>