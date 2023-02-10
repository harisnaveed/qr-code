<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/footer_style.css">

		<title> How to design unlimited qr code for vcard & me cards and download free qr image |  QR-setup </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="How to, design, unlimited,qr code,vcard ,mecard ,download, free qr image, qr setup"/>
		<meta name="description" content="QR setup is here to offer QR code services. you can create unlimited non-expiry static qr code for Vcards & Mecard .This generated QR code can be downloaded free in the format of an image. This free QR code can be used everywhere."/>
		<meta name="copyright"content="qr-setup">
		<meta name="language" content="ES">
		<meta name="robots" content="index,follow"/>
		<meta name="googlebot" content="index">
		<meta name="author" content="Umer Shahzad,umer.shahzad.softwareengineer@gmail.com">
		<meta name="url" content="https://qr-setup.com/vcard.php">
		<meta name="owner" content="QR-Setup">
		<meta name="Classification" content="Business">
		<link rel="canonical" href="https://qr-setup.com/vcard.php">
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
		
		<h1 class="heading text-center mt-3">QR for Cards</h1>

		<div class="nav">
			<div class="links">
				<a onclick="hotel(this)" id="hotel" >Hotel Room Card</a>
				<a onclick="employee(this)" id="employee">Employee Card</a>
				<a onclick="business(this)" id="business">Business Card</a>
				<a onclick="student(this)" id="student" >Student Card</a>
				<a onclick="entry(this)" id="entry" >Entry Card</a>
				<a onclick="vcard(this)" id="vcard" class="active">V Card/Me Card</a>
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

		<script src="js/card.js"type="text/javascript"></script>
		<script src="js/regexp.js"type="text/javascript"></script>
		<script src="js/card_validation.js"type="text/javascript"></script>
		
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
						'<i class="icon fa fa-address-card-o" aria-hidden="true"></i><b class="head-text">   V Card/ Me Card</b>'+
						
					'</div>'+
					'<div class="packaging-div">'+
							'<label class=" business-name-label">Name:</label>'+
							'<input class="business-name-input" type="text" name="business_name" id="business_name" placeholder="Enter your Name"  autocomplete="off" required="required"> <br>'+
							'<div class="error-message-div">'+
					          '<span class="error-message" id="error-message-business-name"></span>'+
                            '</div>'+
							
							'<label class=" business-pos-label">Position:</label>'+
							'<input class="business-pos-input" type="text" name="business_pos" id="business_pos" placeholder="Enter your position"  autocomplete="off" required="required"> <br>'+
							'<div class="error-message-div">'+
					          '<span class="error-message" id="error-message-business-position"></span>'+
                            '</div>'+
							
							'<label class=" business-ph_no-label">Phone number:</label>'+
							'<input class="business-ph_no-input" type="text" name="business_phone" id="business_phone" placeholder="Format: +923001212121"  autocomplete="off" required="required"> <br>'+
							'<div class="error-message-div">'+
					          '<span class="error-message" id="error-message-business-phone"></span>'+
                            '</div>'+
							
							'<label class=" business-address-label">Address:</label>'+
							'<input class="business-address-input" type="text" name="business_address" id="business_address" placeholder="Like: Street-No,City,State"  autocomplete="off" required="required"> <br>'+
							'<div class="error-message-div">'+
					          '<span class="error-message" id="error-message-business-address"></span>'+
                            '</div>'+
							
					'</div>'+
					'<div class="generate-btn-div">'+
						'<input class="generate-btn" type="submit" value="Generate Qr Code" name="card_vcard" onclick="businessCard_validate()"/>'+
					'</div>';
					document.getElementById("form").innerHTML=codeBlock;
            }
           
           

         
		</script> 
	</body>
</html>