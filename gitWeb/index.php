<?php
$page_title = "The Stage";
include"heeader.php";

?>

<style>
.carousel-page
{
width:90%;
height:450px;
color:white;
}
</style>



		<div id="my_carousel" class="carousel slide" data-ride="carousel">
			
			   <ol class="carousel-indicators">
			    <li data-target="#" data-slide-to="0" class="active"></li>
			    <li data-target="#" data-slide-to="1"></li>
			    <li data-target="#" data-slide-to="2"></li>
			   </ol>
			
			<div class="carousel-inner">
			<!-- Page 1 -->
			  <div class="item active">  
			   <div class="carousel-page">
			    <img src="pr1.png" class="img-responsive" style="margin:0px auto;" />
			   </div> 
			</div>   
			<!-- Page 2 -->
			<div class="item"> 
			  <div class="carousel-page">
			    <img src="pr5.png" class="img-responsive img-rounded" style="margin:0px auto;"/>
			  </div> 
			</div>  
			<!-- Page 3 -->
			<div class="item">  
			  <div class="carousel-page">
			   <img src="pr4.jpg" class="img-responsive img-rounded" style="margin:0px auto;"/>
			  </div>  
			</div>     
		 </div>
		
			<a class="left carousel-control" href="#" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
	 </div>
	 
<center><h5>© Copyright 2016 - Tous les droits réservés - The stage</h5> </center>
<?php
include"footer.php";
?>