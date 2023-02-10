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

		<title> Quick Online qr code generate for event booking and download free QR image |  QR-setup </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="Quick,online,qr code,generate,event booking, download ,free qr image"/>
		<meta name="description" content="Qr setup provides you the Best generator to create QR code for event booking. You can Just enter your data and your QR code is ready to download a QR image  .you can use this QR code anywhere any time. The whole process is not required to sign up and sign in"/>
		<meta name="copyright"content="qr-setup">
		<meta name="language" content="ES">
		<meta name="robots" content="index,follow"/>
		<meta name="googlebot" content="index">
		<meta name="author" content="Umer Shahzad,umer.shahzad.softwareengineer@gmail.com">
		<meta name="url" content="https://qr-setup.com/events.php">
		<meta name="owner" content="QR-Setup">
		<meta name="Classification" content="Business">
		<link rel="canonical" href="https://qr-setup.com/events.php">
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
				<a onclick="application(this),qrNone()" id="application" >Application Form</a>
				<a onclick="tickets(this)" id="tickets" >Tickets</a>
				<a onclick="events(this)" id="events" class="active">Events</a>
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
						'<i class="icon fa fa-calendar" aria-hidden="true"></i><b class="head-text">   Events</b>'+
						
					'</div>'+
					'<div class="packaging-div">'+
							
							'<label class=" event-name-label">Name of Event:</label>'+
							'<input class="event-name-input" type="text" name="event_name" id="event_name" placeholder="Enter Name of event"  autocomplete="off" required="required"> <br>'+
							'<div class="error-message-div">'+
					           '<span class="error-message" id="error-message-event-name"></span>'+
                            '</div>'+
							
							'<label class=" event-loc-label">Location of Event:</label>'+
							'<input class="event-loc-input" type="text" name="event_loc" id="event_loc" placeholder="like: Street-No,City,State"  autocomplete="off" required="required"> <br>'+
							'<div class="error-message-div">'+
					           '<span class="error-message" id="error-message-event-location"></span>'+
                            '</div>'+
							
							'<label class=" event-type-label">Type of Event:</label>'+
							'<input class="event-type-input" type="text" name="event_type" id="event_type" placeholder="like: VIP,Farewell,Birthday"  autocomplete="off" required="required"> <br>'+
							'<div class="error-message-div">'+
					           '<span class="error-message" id="error-message-event-type"></span>'+
                            '</div>'+
							
							'<label class=" event-contact-label">Contact Detail:</label>'+
							'<input class="event-contact-input" type="text" name="event_contact" id="event_contact" placeholder="+923001212121/simple@example.com"  autocomplete="off" required="required"> <br>'+
							'<div class="error-message-div">'+
					           '<span class="error-message" id="error-message-event-contact"></span>'+
                            '</div>'+
							
							'<label class=" event-detail-label">Event Detail:</label>'+
							'<input class="event-detail-input" type="text" name="event_detail" id="event_detail" placeholder="Enter the small detail of the Event"  autocomplete="off" required="required"> <br>'+
							'<div class="error-message-div">'+
					           '<span class="error-message" id="error-message-event-detail"></span>'+
                            '</div>'+
							
					'</div>'+
					'<div class="generate-btn-div">'+
						'<input class="generate-btn" type="submit" value="Generate Qr Code" name="business_event" onclick="event_validate()"/>'+
					'</div>';
					document.getElementById("form").innerHTML=codeBlock;
            	
         }

		</script>
	</body>
</html>