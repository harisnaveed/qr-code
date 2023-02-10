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

		<title> Quick Generate online qr code for all sort of tickets and download free QR image |  QR-setup </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="Quick, generate, online, qr code, tickets ,download, free, qr code image"/>
		<meta name="description" content="Qr setup provides you with the Best generator to create QR code for all sorts of tickets. You can Just enter your data and your QR code is ready to download a QR image  .you can use this QR code anywhere any time. The whole process is not required to sign up and sign in"/>
		<meta name="copyright"content="qr-setup">
		<meta name="language" content="ES">
		<meta name="robots" content="index,follow"/>
		<meta name="googlebot" content="index">
		<meta name="author" content="Umer Shahzad,umer.shahzad.softwareengineer@gmail.com">
		<meta name="url" content="https://qr-setup.com/tickets.php">
		<meta name="owner" content="QR-Setup">
		<meta name="Classification" content="Business">
		<link rel="canonical" href="https://qr-setup.com/tickets.php">
		<meta name="twitter:card" content="QR-Setup - Generate QR code For your business"/>
		<link rel="shortcut icon" href="img/icon.png"/>
	</head>
	<body onload="start()">
		
			<nav id="navbar"class="navbar navbar1 navbar-expand-lg bg-white my-3">
			<a href="index.php"><img class="logo" src="img/logo.png" alt="Logo" ></a>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="generate-qr-code.php" alt="Generated qr-image" class="nav-btn">Generate Qr</a>
				</li>
		    </ul>
		    </nav>
		
		
		<h1 class="heading text-center mt-3">QR for Business</h1>

		<div class="nav">
			<div class="links">
				<a onclick="product(this),qrNone()" id="product" >Product/Packaging</a>
				<a onclick="news(this)" id="news" >News</a>
				<a onclick="application(this),qrNone()" id="application" >Application Form</a>
				<a onclick="tickets(this)" id="tickets" class="active">Tickets</a>
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
						<img src="<?php echo $imgg; ?>" class="qr-img">
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
						'<i class="icon fa fa-ticket" aria-hidden="true"></i><b class="head-text">   Tickets</b>'+
						
					'</div>'+
					'<div class="packaging-div">'+
							
							'<label class=" ticket-companyname-label">Name of Company:</label>'+
							'<input class="ticket-companyname-input" type="text" name="ticket_companyname" id="ticket_companyname" placeholder="Enter Name of company"  autocomplete="off" required="required"> <br>'+
							'<div class="error-message-div">'+
					           '<span class="error-message" id="error-message-ticket-nameCompany"></span>'+
                            '</div>'+
							
							'<label class=" ticket-name-label">Name of Ticket:</label>'+
							'<input class="ticket-name-input" type="text" name="ticket_name" id="ticket_name" placeholder="Enter name of ticket"  autocomplete="off" required="required"> <br>'+
							'<div class="error-message-div">'+
					           '<span class="error-message" id="error-message-ticket-name"></span>'+
                            '</div>'+
							
							'<label class=" ticket-type-label">Type of Ticket:</label>'+
							'<input class="ticket-type-input" type="text" name="ticket_type" id="ticket_type" placeholder="like: Reserved seating,one day pass"  autocomplete="off"> <br>'+
							'<div class="error-message-div">'+
					           '<span class="error-message" id="error-message-ticket-type"></span>'+
                            '</div>'+
							
							'<label class=" ticket-price-label">Price of Ticket:</label>'+
							'<input class="ticket-price-input" type="text" name="ticket_price" id="ticket_price" placeholder="Format: 10 dollar or 10$"  autocomplete="off" required="required"> <br>'+
							'<div class="error-message-div">'+
					           '<span class="error-message" id="error-message-ticket-price"></span>'+
                            '</div>'+
							
							'<label class=" ticket-detail-label">Detail:</label>'+
							'<input class="ticket-detail-input" type="text" name="ticket_detail" id="ticket_detail" placeholder="Enter the detail of ticket"  autocomplete="off"> <br>'+
							'<div class="error-message-div">'+
					           '<span class="error-message" id="error-message-ticket-detail"></span>'+
                            '</div>'+
							
					'</div>'+
					'<div class="generate-btn-div">'+
						'<input class="generate-btn" type="submit" value="Generate Qr Code" name="business_ticket" onclick="ticket_validate()"/>'+
					'</div>';
					document.getElementById("form").innerHTML=codeBlock;
            	
         }

	
		
		</script>
	</body>
</html>