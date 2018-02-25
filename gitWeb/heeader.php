<!DOCTYPE html>

<html>

<head>
    <title><?php if(isset($page_title)) echo "$page_title" ?></title>
    <meta charset="utf-8" />
  
    <script type="text/javascript" src="jquery-2.2.1.js"></script>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
   <img src="The-Stage-Logo.jpg"style="width:200px;height:100px00px">
    
   <a href="https://www.facebook.com">
    <img src="fb.png" alt ="facebook.com" style="width:48px;height:48px; float:right";>
   </a>
  
    <a href="https://www.twitter.com">
    <img src="twii.png"style="width:48px;height:48px; float:right";>
   </a>
    
   <a href="https://plus.google.com/">
     <img src="go.png"style="width:48px;height:48px; float:right";>
   </a>
    
    <header class="navbar navbar-inverse navbar-static-top">
     
      <div class="container">
     
      <a href ="index.php" class ="navbar-brand">THE STAGE</a>
      <ul class="nav navbar-nav">
      	
        <li ><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a> </li>
      	
        <li><a href="about.php"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
      	
        <li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
      	       
        <li><a href="auth.php"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>
           
      </ul>
       <form class="navbar-form navbar-right inline-form" action="">
         
         <div class="from-group">
              <input type="search" class="form-control" placeholder="Rechercher..." required>
              <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
           
        </div>
      </form>     
    </div>
</header>

</head>

<body>
