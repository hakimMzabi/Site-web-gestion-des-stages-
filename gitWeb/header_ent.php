<!DOCTYPE html>

<html>

<head>
    <title><?php if(isset($page_title)) echo "$page_title" ?></title>
    <meta charset="utf-8" />
  
                                
  
  <script type="text/javascript" src="jquery-2.2.1.js"></script>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  

  
   
   <img src="The-Stage-Logo.jpg"style="width:250px;height:100px00px">
   <img src="ad2.png"style="width:115px;height:100px00px; float:right";>
   <header class="navbar navbar-inverse navbar-static-top">
   
   <div class="container">
      <a href ="resp.php" class ="navbar-brand">THE STAGE</a>
      <ul class="nav navbar-nav">
      
        <li ><a href="resp.php"><span class="glyphicon glyphicon-home"> Home</span></a></li>
      	
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> Déconnecter</span></a></li>
        
      </ul>
       <form class="navbar-form navbar-right inline-form"  method="post" action="rest_etud.php">
         
         <div class="from-group">
              <input type="text" class="form-control" name="nom" placeholder="Rechercher..." required>
              <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
           
        </div>
      </form>     
    </div>
</header>

</head>

<body >
