!DOCTYPE html>

<html>

<head>
    <title><?php if(isset($page_title)) echo "$page_title" ?></title>
    <meta charset="utf-8" />
  
   <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<img src="The-Stage-Logo.jpg"style="width:250px;height:100px00px">
<header class="navbar navbar-inverse navbar-static-top">
   <div class="container">
      <a href ="acceuil.php" class ="navbar-brand">THE STAGE</a>
      <ul class="nav navbar-nav">
      	<li ><a href="acceuil.php">Home</a></li>
      	<li><a href="#">About</a></li>
      	<li><a href="contact.php">Contact</a></li>
      	       
          <li><a href="log_out.php">Se deconnecter</a></li>
           

        
      </ul>
       <form class="navbar-form navbar-right inline-form">
         
         <div class="from-group">
              <input type="search" class="form-control" placeholder="Rechercher..." required>
              <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
           
        </div>
      </form>     
    </div>
</header>

</head>

<body>
