<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
        <!-- raleway font library or link -->
		<!-- <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" /> -->

		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/footer_style.css">
		
		<title> QR-setup | quick online QR code for all type of  url and download free qr image </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="Qr setup, quick, online, qr code, all url, download, free qr image"/>
		<meta name="description" content="QR setup is here to provide online qr code generator service.Everybody came here and created unlimited freely different  types of QR code like website url, social website url, blog url and you can download it as an image. No sign-up required."/>
		<meta name="copyright"content="qr-setup">
		<meta name="language" content="ES">
		<meta name="robots" content="index,follow"/>
		<meta name="googlebot" content="index">
		<meta name="author" content="Umer Shahzad,umer.shahzad.softwareengineer@gmail.com">
		<meta name="url" content="https://qr-setup.com/website.php">
		<meta name="owner" content="QR-Setup">
		<meta name="Classification" content="Business">
		<link rel="canonical" href="https://qr-setup.com/website.php">
		<meta name="twitter:card" content="QR-Setup - Generate QR code For your business"/>
		<link rel="shortcut icon" href="img/icon.png"/>
	</head>
	<body onload="start()">
		<nav id="navbar"class="navbar navbar1 navbar-expand-lg bg-white my-3">
			<a href="index.php"><img class="logo" src="img/logo.png" alt="Logo" ></a>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="generate-qr-code.php" class="nav-btn">Generate Qr</a>
				</li>
		    </ul>

		</nav>
		
		<h1 class="heading text-center mt-3">QR for Website</h1>
		
		
		<div class="nav">
			<div class="links">
				<a onclick="website(this)" id="website">Website URL</a>
				<a onclick="youtube(this)" id="youtube">Youtube URL</a>
				<a onclick="facebook(this)" id="facebook">facebook URL</a>
				<a onclick="instagram(this)" id="instagram">Instagram URL</a>
				<a onclick="twitter(this)" id="twitter">Twitter URL</a>
				<a onclick="linkedin(this)" id="linkedin">Linkedin URL</a>
				<a onclick="pinterest(this)" id="pinterest">Pinterest URL</a>
				<a onclick="skype(this)" id="skype">Skype URL</a>
			</div>
		</div>
		
		<div class="container my-5">
		    <div class="row">
		        		<div class="col-xl-3 col-lg-3 col-md-4 col-sm-12" >
		        		</div>
		        <?php
     			 if(isset($_GET['qrimage'])){
      			   $imgg = $_GET['qrimage'];
      		    ?>
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 mobo" id="qr-img-div">
					<div class="qr-img-div">
						<img src="<?php echo $imgg; ?>" alt="Generated qr-image" class="qr-img">
					</div>
					<div class="download-btn-div">
						<a class="download-btn" href="<?php echo $imgg; ?>" download="qr-setup.png">Download Qr Code</a>
					</div>
				</div>
				<?php  
     			 }
     			 else{}
     		    ?>
     					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-12" >
		        	    </div> 
		    </div>
		    <br>
			<div class="row">
				<div class="col-xl-9 col-lg-9 col-md-8 col-sm-12">
					
					<form method="POST" onsubmit="return validate()" action="functions.php" id="form">
				
					</form>
					
				</div>
				<!-- <div class="col-xl-2 d-lg-2 d-md-none "></div> -->
				
				<?php
     			 if(isset($_GET['qrimage'])){
      			   $imgg = $_GET['qrimage'];
      		    ?>
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 desktopo" id="qr-img-div">
					<div class="qr-img-div">
						<img src="<?php echo $imgg; ?>" alt="Generated qr-image" class="qr-img">
					</div>
					<div class="download-btn-div">
						<a class="download-btn" href="<?php echo $imgg; ?>" download="qr-setup.png">Download Qr Code</a>
					</div>
				</div>
				<?php  
     			 }
     			 else{
      			}
     				 ?>
			</div>
			
		</div>
		
		<?php 
        include("footer.php");
		 ?>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		
		<script src="js/website.js"type="text/javascript"></script>
		<script src="js/regexp.js"type="text/javascript"></script>
		<script src="js/website_validation.js"type="text/javascript"></script>
		
		 <script type="text/javascript">

		 	function func(x){
		 		var menuitem=document.querySelectorAll('a');
		 		for(var i=0;i<menuitem.length;i++)
		 		{
		 			if(menuitem[i].className=='active')
		 				menuitem[i].classList.remove("active");
		 		}
		 		x.classList.add("active");

		 	}
		
			function start(){
              
            <?php
                
                if(isset($_GET['value'])){
                   $value=$_GET['value'];
                   
                    if($value=="website")
                    { ?>
                    var x=document.getElementById("website");	
                    website(x);
                    <?php }

                    else if($value=="youtube")
                    { ?>
                    var x=document.getElementById("youtube");	
                    youtube(x);
                    <?php }

                    else if($value=="facebook")
                    { ?>
                    var x=document.getElementById("facebook");	
                    facebook(x);
                    <?php }

                    else if($value=="instagram")
                    { ?>
                    var x=document.getElementById("instagram");	
                    instagram(x);
                    <?php }
                    
                    else if($value=="twitter")
                    { ?>
                    var x=document.getElementById("twitter");
                    twitter(x);
                    <?php }

                    else if($value=="linkedin")
                    { ?>
                    var x=document.getElementById("linkedin");
                    linkedin(x);
                    <?php }

                    else if($value=="pinterest")
                    { ?>
                    var x=document.getElementById("pinterest");
                    pinterest(x);
                    <?php }

                    else if($value=="skype")
                    { ?>
                    var x=document.getElementById("skype");
                    skype(x);
                    <?php }
                    


                    else;        
                    


                    }

                else
                { ?>
                var x=document.getElementById("website");	
                website(x);
                <?php }
            ?>	
        }
  			   
		</script> 
	</body>
</html>