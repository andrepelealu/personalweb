
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

				<i><p class="putih">"<?php echo $header->teks_header ?>"</p></i>
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
										<center><button type="submit" class="btn btn-warning"name="button" data-toggle="modal" data-target="#exampleModal" onclick="sukses();">Send Message</button></center>
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
		<section id="profile">
			<div class="row">
				<div class="col-md-6 col-xs-12">
					<center>
						<br><br>
					<img src="<?php echo base_url('assets/img/profile.png')?>" alt="">
					<center>
				</div>
				<div class="col-md-6 col-xs-12">
					<br><br>
					<div class="center" >
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
					    <h3><?php echo $header->title_sec2 ?></h3>
						<p><?php echo $header->content_quotes ?></p>
					</div>
				</div>
				<div class="col-md-6 col-xs-12">
					<div class="center">
						<img src="<?php echo base_url('assets/img/pict2.png')?>" alt="">
					</div>
				</div>
			</div>
			<!-- END Quotes -->
		</section>

		<!-- Gallery -->
		   <section id="organisasi">
			<div class="col-md-12 col-xs-12" id="">
				<div class="center">
					<h4><?php echo $header->title_sec3 ?></h4>
					<p><?php echo $header->content_sec3 ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-xs-12">
					<center><img src="<?php echo base_url('assets/img/osis.jpg')?>" style="width:340px;height:245px;" alt=""></center>
					<p class="center">OSIS SMA N 6 <br>Semarang</p>
				</div>
				<div class="col-md-4 col-xs-12">
					<center><img src="<?php echo base_url('assets/img/pecintaalam.jpg')?>" style="width:340px;height:245px;"alt=""></center>
					<p class="center">Pecinta Alam SMA N 6 <br>Semarang</p>

				</div>
				<div class="col-md-4 col-xs-12">
					<center><img src="<?php echo base_url('assets/img/bem.jpg')?>" style="width:340px;height:245px;" alt=""></center>
					<p class="center">BEM-KM Universitas Dian Nuswantoro Semarang</p>

				</div>
			</div>
			</section>
			<!-- END Gallery -->

	</div>
