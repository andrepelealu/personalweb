<body>
<div class="container-fluid bg">
<div class="container">
		<a href="<?php base_url()?>" class="logo">AndrePelealu</a>
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<center>
				<h1 class="">Hai !</h1>
				<h3 class="putih">Selamat Datang di Website Saya</h3>
				<p class="putih">Terimakasih sudah mengunjungi website ini, sampai saat ini website ini sedang dalam tahap pengembangan :)</p>
				<br>
		</center>
		</div>

	</div>

		<div class="row">

			<div class="col-md-4">
				<a href="profile" class="btn btn-info btn-lg btn-block">Cek Profil Saya</a>
			</div>

			<div class="col-md-4">
				<a href="blog" class="btn btn-warning btn-lg btn-block">Blog Post</a>
			</div>

			<div class="col-md-4">
				<button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">Kontak Saya</button>
			</div>

		</div>


	<br>

	<div class="row">
		<div class=""><br>
		</div>

		<!-- <div class="col-md-12">
			<a href="#" class="btn btn-danger btn-lg btn-block ">Clik Here to See Magic</a>
		</div> -->

		<div class="">
			<img class="img-responsive" src="https://media.giphy.com/media/xThtaaGyhb0kZ052A8/giphy.gif" alt="">
		</div>
	</div>









		<!-- Modal content-->
		<div class="row">
			<div class="">
				<div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">

						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Send me some text !</h4>
							</div>
							<div class="modal-body">
								<form class="" action="pesan" method="post">
									<div class="form-group">
										<label for="" style="color:black">Name</label>
										<input type="text" class="form-control" name="nama" value="" required>
										<label for="comment" style="color:black">Your Message:</label>
										<textarea name="isi" class="form-control" rows="5" id="comment" required></textarea>
										<center><button type="submit" class="btn btn-warning"name="button" >Send Message</button></center>
									</div>
								</form>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>

			</div>
		</div>


	</div>
</div>
</div>
</div>
<!-- The Modal -->

<script type="text/javascript">
var kata = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."; //Kata yang akan muncul
var inkata = 0; // Index kata
var kecepatanKataMuncul = 80; //Kecepatan huruf yang akan kita munculkan

setInterval(function(){
	var target = $("#target"); //Inisialisasi div id target
	target.append(kata[inkata]); //Memasukkan kata satu persatu ke html
	inkata++; //index kata selalu bertambah
}, kecepatanKataMuncul); //Timing 200 ms perhuruf yang d
</script>
