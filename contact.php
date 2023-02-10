<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/footer_style.css">

		<title> QR-code generator for personal contact information and download free image | QR-setup</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="Generate ,qr code,  free ,QR ,online, vcard qr code ,mecard qr code generate ,generate qr code for url, qr code generates for email, download free image,contact information, personal"/>
		<meta name="description" content="Generate your own QR code online for your personal contact information like phone number, Email, SMS, and simple text etc. QR setup generator offers you to download free QR code images and use it anywhere ."/>
		<meta name="copyright"content="qr-setup">
		<meta name="language" content="ES">
		<meta name="robots" content="index,follow"/>
		<meta name="googlebot" content="index">
		<meta name="author" content="Umer Shahzad,umer.shahzad.softwareengineer@gmail.com">
		<meta name="url" content="https://qr-setup.com/contact">
		<meta name="owner" content="QR-Setup">
		<meta name="Classification" content="Business">
		<link rel="canonical" href="https://qr-setup.com/contact.php">
		<meta name="twitter:card" content="QR-Setup - Generate QR code For your business"/>
		<link rel="shortcut icon" href="img/icon.png"/>
	</head>
	<body onload="start()">
		<nav id="navbar"class="navbar navbar1 navbar-expand-lg bg-white my-3">
			<a href="index.php"><img class="logo" src="img/logo.png" alt="Logo"></a>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="generate-qr-code.php" class="nav-btn">Generate Qr</a>
				</li>
		    </ul>

		</nav>
		
		<h1 class="heading text-center mt-3">QR for Contact</h1>

		<div class="nav">
			<div class="links">
				<a onclick="txt(this) " id="txt">Text</a>
				<a onclick="ph_no(this) " id="ph-no">Phone</a>
				<a onclick="sms(this) " id="s-m-s">SMS</a>
				<a onclick="e_mail(this) " id="e_mail">Email</a>
				<a onclick="business(this) " id="business">Business Card</a>
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

		<script src="js/contact.js"type="text/javascript"></script>
		<script src="js/regexp.js"type="text/javascript"></script>
		<script src="js/contact_validation.js"type="text/javascript"></script>
		
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
                   
                    if($value=="text")
                    { ?>
                    var x=document.getElementById("txt");	
                    txt(x);
                    <?php }

                    else if($value=="phone")
                    { ?>
                    var x=document.getElementById("ph-no");	
                    ph_no(x);
                    <?php }

                    else if($value=="sms")
                    { ?>
                    var x=document.getElementById("s-m-s");	
                    sms(x);
                    <?php }

                    else if($value=="email")
                    { ?>
                    var x=document.getElementById("e_mail");	
                    e_mail(x);
                    <?php }
                    
                    else if($value=="business")
                    { ?>
                    var x=document.getElementById("business");
                    business(x);
                    <?php }

                    else
                    { ?>
                    var x=document.getElementById("txt");	
                    txt(x);
                    <?php }        
                    
                    }
                else
                { ?>
                var x=document.getElementById("txt");	
                txt(x);
                <?php }
            ?>	
        }

		</script> 
	</body>
</html>