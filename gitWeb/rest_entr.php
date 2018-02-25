<?php
include"header.php";
echo"<center><h3>La recherche que vous avez effectuée correspont à: </h3></center>";
  if (isset($_POST["nom"])){

    $n = $_POST['nom'];
    

    if($n ==""){
    include"cat_form.php";
    }

   require"db_configpdo.php";


    try{

     $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
     $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $SQL = "SELECT * FROM entreprises WHERE nom=?";
    $st = $db->prepare($SQL);
    $res = $st->execute (array($n));
   
    if(!$res)
       echo "Erreur de recherche";
    else 
      while ($row = $st->fetch()){
             ?>
             <div class="container">
               <div class="col-sm-9">
               <center><table class="table table-stripted">
                 <tr>
                   <td><h3>Nom</h3></td>
                   <td><h3>Nom contact</h3></td>
                    <td><h3>Prenom contact</h3></td>
                     <td><h3>Email</h3></td>
                      <td><h3>téléphone</h3></td>
                 </tr>
                 
                 <tr>
                   <td><?php echo"$row[nom]";?></td>
                   <td><?php echo"$row[nomC]";?></td>
                   <td><?php echo"$row[prenomC]";?></td>
                   <td><?php echo"$row[emailC]";?></td>
                   <td><?php echo"$row[telC]";?></td>
                 </tr>

                </table>
                </div>
              </div>  
         <?php
         }
      
           
      $db = null;

   }catch (PDOEXception $e) {
      exit("Erreur de connexion".$e->getMessage());
  
    }
  }




include"footer.php";
?>