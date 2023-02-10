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

		<title> QR-setup | How to Create free QR code for email information and download QR image </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="QR-setup ,How to,Create, free , QR code, email information, download ,QR image"/>
		<meta name="description" content="QR setup generator is here to offer you to Generate static Qr code for email and download an image free of cast.This  downloaded QR code image is free for everyone and you can use it anywhere any time ."/>
		<meta name="copyright"content="qr-setup">
		<meta name="language" content="ES">
		<meta name="robots" content="index,follow"/>
		<meta name="googlebot" content="index">
		<meta name="author" content="Umer Shahzad,umer.shahzad.softwareengineer@gmail.com">
		<meta name="url" content="https://qr-setup.com/email.php">
		<meta name="owner" content="QR-Setup">
		<meta name="Classification" content="Business">
		<link rel="canonical" href="https://qr-setup.com/email.php">
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
				<a onclick="txt(this) " id="txt" >Text</a>
				<a onclick="ph_no(this) " id="ph-no" >Phone</a>
				<a onclick="sms(this) " id="s-m-s" >SMS</a>
				<a onclick="e_mail(this) " id="e_mail" class="active">Email</a>
				<a onclick="business(this)" id="business">Business Card</a>
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
             var codeBlock='<div class="head">'+
							'<i class="icon fa fa-envelope" aria-hidden="true"></i><b class="head-text">   Email</b>'+
							
					'</div>'+
					'<div class="outer">'+
						    '<label class=" email-label">Email:</label>'+
							'<input class="email-input" type="email" name="email" id="email" placeholder="Enter your Recipient Email Address"  autocomplete="off" required="required"> <br>'+
							'<div class="error-message-div">'+
					          '<span class="error-message" id="error-message-email"></span>'+
                            '</div>'+

							'<label class=" subject-label">Subject:</label>'+
							'<input class="subject-input" type="text" name="subject" id="subject" placeholder="Enter Subject of your Email"  autocomplete="off" required="required"> <br>'+
							'<div class="error-message-div">'+
					          '<span class="error-message" id="error-message-subject"></span>'+
                            '</div>'+

							'<label class=" message-label" >Message Box:</label>'+
							'<input class="message-input" type="text" name="message" id="message" placeholder="Enter your Message"  autocomplete="off">'+
					'</div>'+
					'<div class="generate-btn-div">'+
							'<input class="generate-btn" type="submit" value="Generate Qr Code" name="contact_email" onclick="email_validate()"/>'+
					'</div>';
				document.getElementById("form").innerHTML=codeBlock;
            }

		
		</script> 
	</body>
</html>