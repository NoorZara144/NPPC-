<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contacts-NPPCL</title>
		<link rel="icon" href="images/logo.jpg" type="image/png">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>



		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="stylesheet" href="src/CSS/stylingsheet.css">
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/TMForm.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<style>

         *{
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    text-decoration: none;
    text-transform: capitalize;
    -webkit-transition: all .2s linear;
    transition: all .2s linear;
   }	
		html{
    
    scroll-behavior: smooth;
    scroll-padding-top: 9rem;
       }
	   html::-webkit-scrollbar{
    width: 0rem;
       }

	   .navbar{
              background-color: rgb(25, 25, 68) !important;
              box-shadow: 5px 5px 10px rgba(52, 52, 68, 0.75) !important;
    }
	   .nav-item{
		       font-size: 16px !important;

	}
     .form-control{
    background-color: lightgray !important;
     }

	 textarea{
		text-align: left !important;
		font-size: 16px;
	 }

	 #btn-submit{
		border-radius: 5px !important;
		border: 2px solid darkblue !important;
		/* background-color: rgb(25, 25, 68) !important; */
		color: black !important;
	 }
	 #btn-submit:hover{
		background-color: rgb(25, 25, 68) !important;
		color: white !important;
	 }
			/* nav {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    padding: 10px 115px;
    box-shadow: 2px 5px 15px rgba(100, 80, 130, 0.35);
        }
     nav img {
    width: 150px;
    cursor: pointer;
        }

     nav .navigation ul{
    display: flex;
	justify-content: flex-end;
    align-items: center;
   
        } */

     /* nav .navigation ul li {
    list-style: none;
    margin-left: 60px;
        }

	 nav .navigation ul li a {
	text-decoration: none;
	color: white;
	font-size: 18px;
	font-weight: 500;
	transition: 0.3s ease;
		} */

		.list-group-item{
         background-color: rgb( 72, 63, 57) !important;
      }
		.footer {
            background-color: rgb( 72, 63, 57);
            color: #fff;
            padding: 20px;
        }

		.text{
			text-align: center;
		}

        .footer-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
			box-shadow: 10px 2px 10px 10px rgba(80, 80, 104, 0.35);
        }

        .footer-column {
            flex: 1;
            padding: 10px;
        }

        /* Media queries for responsiveness */
        @media (max-width: 768px) {
            .footer-column {
                flex: 0 0 100%;
            }
        }

        /* Style for links in the footer */
        .footer a {
            color: #fff;
            text-decoration: none;
        }
		</style>
	</head>

	<body>
<!--==============================header=================================-->
		<!-- NAVIGATION -->
		<nav class="navbar sticky-top navbar-expand-lg">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<img src="src/imgs/logo.png" alt="Nishat" width="150" height="90">
				  </a>
			  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon bg-light"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">
				  <li class="nav-item ms-4">
					<a class="nav-link text-light" aria-current="page" href="index.php">HOME</a>
				  </li>
				  <li class="nav-item ms-4">
					<a class="nav-link text-light" href="About_NPPCL.php">ABOUT</a>
				  </li>
				  <li class="nav-item ms-4">
					<a class="nav-link text-light" href="#">PRODUCTS</a>
				  </li>
				  <li class="nav-item ms-4">
					<a class="nav-link text-light" href="contact.php">CONTACT</a>
				  </li>
				  <li class="nav-item ms-4">
					<a class="nav-link text-light" href="#">FACILITY</a>
				  </li>
				</ul>
			
			  </div>
			</div>
		  </nav>
		

						<div class="clear"></div>
					</div>
				</div>


				<div class="grid_12">
					<h1>
						
					</h1>
				</div>
			</div>
<!--==============================Content=================================-->
		<div class="content">
			<div class="container_12 justify-lg-content-center">
				<div class="grid_5" data-aos="fade-up" data-aos-delay="200">
					<h3>CONTACT INFO</h3>
					<div class="map">
						<p><span class="blog">We're excited to assist you with any questions, inquiries, or Product-related needs you might have. Feel free to get in touch with us</span></p>
						<div class="clear"></div>
						<figure class="">
							<iframe src=""></iframe>
						</figure>
						<address>
							<dl data-aos="fade-up" data-aos-delay="200">
								<dt>NISHAT PAPER MILL <br>
								DG KHAN CEMENT CO LTD Khairpur, 
								near Kallar Kahar district Chakwal. <br>
								</dt>
								<dd><span>Freephone:</span>+1 800 559 6580</dd>
								<dd><span>Telephone:</span>+1 800 603 6035</dd>
								<dd><span>FAX:</span>+1 800 889 9898</dd>
								<dd>E-mail: <a href="#" class="col1">mail@demolink.org</a></dd>
							</dl>
						</address>
					</div>
				</div>
				<div class="grid_6" data-aos="fade-up" data-aos-delay="200">
				    <?php  include('message.php') ?>
					<h3>GET IN TOUCH</h3>
					<form method="POST" action="code.php"> 
                    <div class="form-group mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Type your Name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Add your email" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Country</label>
                        <input type="text" name="country" class="form-control" placeholder="Country" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Add Message</label>
                        <textarea type="text" name="message" class="form-control" placeholder="Message" required>
						</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <input type="submit" value="save_Record" id="btn-submit" class="btn" name="save_Record">
                    </div>
							
                </form>
				</div>
			</div>
		</div>
		<br>
		<br>

<!--==============================footer=================================-->
<section>
	<div class="footer">
		<div class="container-fluid text-center">
			<div class="row align-items-center d-lg-flex d-sm-block">
			  <div class="col" data-aos="fade-in" data-aos-delay="200">
			   <h3 class="text-warning">About US</h3>
			   <p>Nishat Paper Production Co Ltd.</p>
			   <br>
			   <p>DG Khan Cement Co Ltd Khairpur,<br>
				  near Kallar Kahar District Chakwal.</p>
			  </div>
			  <br>
			  <div class="col" data-aos="fade-up" data-aos-delay="200">
				<h3 class="text-warning">Quick Links</h3>
				<ul class="list-group list-group-flush">
					<li class="list-group-item"><a href="">Home</a></li>
					<li class="list-group-item"><a href="">Products</a></li>
					<li class="list-group-item"><a href="">About</a></li>
					<li class="list-group-item"><a href="">Contact</a></li>
				   
				  </ul>
			  </div>
			  <br>
			  <div class="col" data-aos="fade-up" data-aos-delay="200">
				<h3 class="text-warning">Contact Information</h3>
				<br>
				<p>Email: contact@example.com</p>
				<p>Phone: +1-123-456-7890</p>
			  </div>
			</div>
		  </div>
		</div>
	</section>

	<script>
        AOS.init();
    </script>

	</body>
</html>