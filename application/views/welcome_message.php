
<header class="bg">
	<div class="container-fluid ">
		<div class="row">
			<div class="container">
				<div class="col-md-12 col-xs-12">
					<center>
						<h1 class=""><?php echo $header->title_header ?></h1>
						<h3 class="putih">
							<?php echo $header->subtitle_header ?>

						</h3>
						<p class="putih" id=""><?php echo $header->desc_header ?></p>
						<br>
					</center>
				</div>
			</div>


		</div>

		<div class="row">

			<div class="col-md-4">
				<a href="#profile" class="btn btn-info btn-lg btn-block">Cek Profil Saya</a>
			</div>

			<div class="col-md-4">
				<a href="blog" class="btn btn-warning btn-lg btn-block putih">Blog Post</a>
			</div>

			<div class="col-md-4">
				<button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">Kontak Saya</button>
			</div>

		</div>

		<br>

		<div class="row">
			<div class="col-md-6">
				<img class="img-responsive" src="https://i.giphy.com/media/xThtaaGyhb0kZ052A8/giphy.webp" alt="">

			</div>
			<div class="col-md-6">
				<br><br><br><br>

				<i><p class="putih"><?php echo $header->teks_header ?></p></i>
			</div>
		</div>
		<!-- Modal content-->
		<div class="row">
			<div class="">
				<div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">

						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Kirim Pesan Sekarang</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>

							</div>
							<div class="modal-body">
								<form class="" action="pesan" method="post">
									<div class="form-group">
										<label for="" style="color:black">Nama</label>
										<input type="text" class="form-control" name="nama" value="" required>
										<label for="comment" style="color:black">Pesan:</label>
										<textarea name="isi" class="form-control" rows="5" id="comment" required></textarea>
										<center><button type="submit" class="btn btn-warning"name="button" data-toggle="modal" data-target="#exampleModal">Send Message</button></center>
									</div>
								</form>

							</div>
							<div class="modal-footer">
								<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
							</div>
						</div>

					</div>
				</div>


			</div>
		</div>
		<!-- MODAL END -->
		<!-- MODAL CONFIRM -->

	</div>
</header>


	<!-- The Modal -->
	<!-- Perkenalan -->
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-xs-12">
				<center>
					<br><br>
				<img src="<?php echo base_url('assets/img/profile.png')?>" alt="">
				<center>
			</div>
			<div class="col-md-6 col-xs-12">
				<br><br>
				<div class="center" id="profile">
					<h5><?php echo $header->sec_title ?></h5>
					<h2><?php echo $header->title_perkenalan ?></h2>
					<p>	<?php echo $header->content_perkenalan ?></p>
				</div>
			</div>
			<!-- END Perkenalan -->
			<!-- Quotes -->
		</div>
		<div class="row">
			<div class="col-md-6 col-xs-12">
				<div class="jumbotron">
					<p><i>"<?php echo $header->content_quotes ?>"</i></p>
				</div>
			</div>
			<div class="col-md-6 col-xs-12">
				<div class="center">
					<img src="<?php echo base_url('assets/img/pict2.png')?>" alt="">
				</div>
			</div>
		</div>
		<!-- END Quotes -->
		<!-- Gallery -->
		<div class="col-md-12 col-xs-12">
			<div class="center">
				<h1>Foto</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-xs-12">
				<h1>1</h1>
			</div>
			<div class="col-md-4 col-xs-12">
				<h1>2</h1>
			</div>
			<div class="col-md-4 col-xs-12">
				<h1>3</h1>
			</div>
		</div>
		<!-- END Gallery -->
	</div>

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
