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

		<title> How to Create unlimited  free qr code for employment form and download free QR Image| QR-setup </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="Unlimited, create,how to,free qr code,download, qr image,employment form"/>
		<meta name="description" content="Qr setup offers you the Best generator to create QR code for employment form. You can Just enter your data and your QR code is ready to download a QR image .you can use this QR code anywhere any time. The whole process is not required to sign up and sign in."/>
		<meta name="copyright"content="qr-setup">
		<meta name="language" content="ES">
		<meta name="robots" content="index,follow"/>
		<meta name="googlebot" content="index">
		<meta name="author" content="Umer Shahzad,umer.shahzad.softwareengineer@gmail.com">
		<meta name="url" content="https://qr-setup.com/employment-form.php">
		<meta name="owner" content="QR-Setup">
		<meta name="Classification" content="Business">
		<link rel="canonical" href="https://qr-setup.com/employment-form.php">
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
		
		
		<h1 class="heading text-center mt-3">QR for Business</h1>

		<div class="nav">
			<div class="links">
				<a onclick="product(this),qrNone()" id="product" >Product/Packaging</a>
				<a onclick="news(this)" id="news" >News</a>
				<a onclick="application(this),qrNone()" id="application" class="active">Application Form</a>
				<a onclick="tickets(this)" id="tickets">Tickets</a>
				<a onclick="events(this)" id="events">Events</a>
				<a onclick="marketing(this),qrNone()" id="marketing">Marketing Items</a>
				<a onclick="cards(this),qrNone()" id="cards">Cards</a>
			</div>
		</div>
		
		            <!--  Cards display or subcategories -->
                    <div id="demo"></div>

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

		<script src="js/business.js"type="text/javascript"></script>
		<script src="js/regexp.js"type="text/javascript"></script>
		<script src="js/business_validation.js"type="text/javascript"></script>
		
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

			function qrNone()
			{
				document.getElementsByClassName("desktopo")[0].style.display = "none";
			}
			function qrBlock()
			{
				document.getElementsByClassName("desktopo")[0].style.display = "block";
			}

        function start(){
                  document.getElementById("demo").style.display = "none";
                   document.getElementById("form").style.display = "block";
                    var codeBlock='<div class="head">'+
						'<i class="icon fa fa-address-card-o" aria-hidden="true"></i><b class="head-text">   Employement Application Form</b>'+
						
					'</div>'+
					'<div class="packaging-div">'+
							'<label class=" employment-name-label">Name of Person:</label>'+
							'<input class="employment-name-input" type="text" name="employment_name" id="employment_name" placeholder="Enter Name of Person"  autocomplete="off" required="required"> <br>'+
							'<div class="error-message-div">'+
					           '<span class="error-message" id="error-message-employment-name"></span>'+
                            '</div>'+
							
							'<label class=" employment-dob-label">Date of birth:</label>'+
							'<input class="employment-dob-input" type="text" name="employment_dob" id="employment_dob" placeholder="Format: 17-11-2020/1-1-2020"  autocomplete="off"> <br>'+
							'<div class="error-message-div">'+
					           '<span class="error-message" id="error-message-employment-dob"></span>'+
                            '</div>'+
							
							'<label class=" employment-ph_no-label">Phone Number:</label>'+
							'<input class="employment-ph_no-input" type="text" name="employment_phone" id="employment_phone" placeholder="Format: +923001212121"  autocomplete="off" required="required"> <br>'+
							'<div class="error-message-div">'+
					           '<span class="error-message" id="error-message-employment-phone"></span>'+
                            '</div>'+
							
							'<label class=" employment-address-label">Address:</label>'+
							'<input class="employment-address-input" type="text" name="employment_address" id="employment_address" placeholder="like: Street-No,City,State"  autocomplete="off" required="required"> <br>'+
							'<div class="error-message-div">'+
					           '<span class="error-message" id="error-message-employment-address"></span>'+
                            '</div>'+
							
							'<label class=" employment-pos-label">Position:</label>'+
							'<input class="employment-pos-input" type="text" name="employment_pos" id="employment_pos" placeholder="like: Manager,Accountant"  autocomplete="off" required="required"> <br>'+
							'<div class="error-message-div">'+
					           '<span class="error-message" id="error-message-employment-position"></span>'+
                            '</div>'+
							
							'<label class=" employment-sal-label">Salary:</label>'+
							'<input class="employment-sal-input" type="text" name="employment_sal" id="employment_sal" placeholder="Format: 10 dollar or 10$"  autocomplete="off"> <br>'+
							'<div class="error-message-div">'+
					           '<span class="error-message" id="error-message-employment-salary"></span>'+
                            '</div>'+

					'</div>'+
					'<div class="generate-btn-div">'+
						'<input class="generate-btn" type="submit" value="Generate Qr Code" name="business_employment" onclick="employment_validate()"/>'+
					'</div>';
					document.getElementById("form").innerHTML=codeBlock;
            	
         }

		
		
		</script>
	</body>
</html>