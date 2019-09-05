<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css")?>">
		<link rel="stylesheet" href="<?php echo base_url("assets/js/jquery.js")?>">
		<link rel="stylesheet" href="<?php echo base_url("assets/js/bootstrap.min.js")?>">
		<link rel="stylesheet" href="<?php echo base_url("assets/css/scrolling-nav.css")?>">

		<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css")?>">
		<link rel="stylesheet" href="<?php echo base_url("assets/css/navbar.css")?>">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins|Ubuntu" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
		<link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>

    <!-- END FONT -->
		<title>Andre Aditya Pelealu</title>
	</head>
	<body>
		<nav>
			<div class="header">
	<div class="container">



		<a class="logo" href="<?php echo base_url()?>">AndrePelealu</a>
		<!-- Navbar -->
		<input type="checkbox" id="cek">
		<label for="cek" class="show-menu">
			<i class="fas fa-bars"></i>
		</label>
		<!-- navbar -->


			<ul class="menu">

					<a href="<?php echo base_url() ?>" >Home</a>

				<?php 		if(!$this->UserModel->is_login())
						{
							echo '
												<a href="#profile">Tentang Saya</a>


												<a href="#">Portofolio</a>


												<a href="#contact" data-toggle="modal" data-target="#myModal">Kontak</a>
												<a href="'.base_url('blog').'" >Blog</a>
												<a href="'.base_url('login').'" >Login</a>
											';
						}?>




				<?php 		if($this->UserModel->is_login())
						{
							echo '
								<a href="'.base_url('blog/createpost').'" >Buat Post</a>
								<a href="'. base_url('edit').'" >Edit Web</a>
								<a href="'. base_url('logout').'" >Logout</a>
								';
						}?>

						<label for="cek" class="hide-menu">
				      <i class="fas fa-times"></i>
				    </label>
			</ul>

		</div>
</div>
	</nav>
