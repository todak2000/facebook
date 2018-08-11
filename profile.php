

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>PROFILE LANGING PAGE</title>
	 <link href="bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
	  <link href="css/face.css" rel="stylesheet">
	  <link rel="stylesheet" type="text/css" href="Linearicons-Free-v1.0.0/icon-font.min.css">
</head>
<body>
	<div class="containing-body">
		<!-- header section -->
		<section class=" row profile_header"> 
			<div class="header-empty col-2"></div>
				<div class="header-writeup col-8">
					<div class="row" style="margin-top: -10px;">
						<div align="left" class="face col-6 prof">
							<span style="background-color: #fff; color: #3b5998; padding: 0 5px 0 5px; font=font-weight: 10000;">f</span>&nbsp;&nbsp;&nbsp;&nbsp;<span><input type="text" class="input-search" placeholder="   search" /></span>
						</div>
						<div align="left" class="face col-2 email">
							<i class="lnr lnr-user"></i><span> <?php echo $_GET['firstName']; ?>&nbsp;</span>
						</div>
						<div align="left" class="face col-2 pass">
							<i class="lnr lnr-home"></i><span> Home &nbsp;</span>
						</div>
						<div align="left" class="face col-2 sign">
							<i class="lnr lnr-gift"></i><span> Notification &nbsp;</span>
						</div>
					</div>
				</div>
			<div class="header-empty col-2">
				<div align="left" class="face sign" style="margin-top: 10px;">
							<a href="index.html" style="color: #fff; text-decoration: none;"><i class="lnr lnr-power-switch"></i><span> Log out &nbsp;</span></a>
						</div>
			</div>
		</section>
		<!-- main body section -->
		<section class="profile-body row">
			<div class="left-empty col-2"></div>
				<div class="body-writeup col-8">
					<div class="container">
					    <div class="fb-profile">
					        <img align="left" class="fb-image-lg" src="images/prof.jpg" alt="Profile image example"/>
					        <img align="left" class="fb-image-profile thumbnail" src="images/small.jpg" alt="Profile image example"/>
					        <div class="fb-profile-text">
					            <h1>Welcome</h1>
					            <h3 id="p-name"><span>
					            	<?php echo $_GET['firstName']; ?></span>
					            		<span>
					            	<?php echo $_GET['lastName']; ?></span>
					            	</h3>
					           <!--  <input type="text" class="form-control" name="form_email" value= "" id="form_email" readonly/> -->
					        </div>
					    </div>
					</div>
				</div>
					
			<div class="right-empty col-2"></div>
		</section>
		<section class="footer_profile row">
			<div class="left-empty col-2"></div>
			<div class="right-empty col-8">
				
				<p>Facebook © 2018</p>
			</div>
			<div class="right-empty col-2"></div>
		</section>
	</div>
<script src="js/jquery-3.2.1.min.js"></script>
</body>
</html>