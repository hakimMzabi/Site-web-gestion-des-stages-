 
 <?php
 $page_title ="Modification filiére";
 include"header_ent.php";
  if (!isset($_GET["id"])){
   
          echo "<p> Erreur </p>\n";
 
        }else{

       try{
        $fid = $_GET["id"];        
        include"db_configpdo.php";
        $db = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$login,$mdp);
        $db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
               
        $SQL = "SELECT *FROM filieres WHERE fid =?"; 
        $st = $db->prepare($SQL);
        $st->execute(array($fid));
        if($st->rowCount() == 0){
        	echo"<p> Erreur dans id</p>\n";
        
          
        }else if(!isset($_POST['nom'])){
          $row = $st->fetch();
        	 include"mod_form.php";
        
       
        }else{

          	$nom = $_POST['nom'];
        	
            if($nom==""){
          	include"mod_from.php";
          
          }else{
          
          

           $SQL = "UPDATE filieres SET nom=? WHERE fid=?";
           $st = $db->prepare($SQL);
           $res = $st->execute (array($nom,$fid));
          
           if(!$res){
             ?>
              
              <div class="alert alert-danger">
             
                    <center> <strong>Erreur!</strong> La modification est echouée </center>
             
             </div>
              
           <?php
           }else { 
             ?>
              
              <div class="alert alert-success">
             
                    <center> <strong>Success!</strong> La modification a bien été effectuée </center>
             
             </div>   

                
                <?php
           
           }
          
            echo"<center><a href = 'resp.php'> Revenir la page de gestion </a></center>";}
        $db = null;
       }
  
   
   }catch (PDOEXception $e){
        echo"Erreur SQL:".$e->getMessage();
   }
}
include"footer.php";
?>
