<div class="jumbotron bg" id="home">
	<div class="container">
		<div class="text-center">
			<img src="<?php echo base_url('assets/img/profile.png')?>" class="rounded-circle img-thumbnail">
			<h1 class="display-4 putih">Andre Aditya Pelealu</h1>
			<p class="putih"><?= $header->desc_header ?></p>
			<!-- Button -->
			<div class="row">

				<div class="col-md-4">
					<a href="#profile" class="btn btn-info btn-lg btn-block">Tentang Saya</a>
				</div>
				<div class="col-md-4">
					<a href="blog" class="btn btn-warning btn-lg btn-block putih">Blog Post</a>
				</div>
				<div class="col-md-4">
					<button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">Kontak Saya</button>
				</div>

			</div>

			<!-- <h3 class="lead putih"><?= $header->teks_header ?></h3> -->
		</div>
	</div>
</div>





	<!-- The Modal -->
	<!-- Perkenalan -->
	<section class="about" id="profile">
		<div class="container">
			<div class="row mb-4">
				<div class="col text-center">
					<h2><?php echo $header->sec_title ?></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<p><?php echo $header->content_perkenalan ?></p>

				</div>

			</div>
			<div class="row mb-4">
				<div class="col text-center">
					<h2><?php echo $header->title_sec2 ?></h2>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-md-12">
					

					<p><?php echo $header->content_quotes ?></p>
				</div>

			</div>
		</div>
	</section>


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
									<label for="" style="color:black">Email/No Kontak</label>
									<input type="text" class="form-control" name="pengirim" value="" required>
									<label for="comment" style="color:black">Pesan:</label>
									<textarea name="isi" class="form-control" rows="5" id="comment" required></textarea>
									<center><button type="submit" class="btn btn-warning"name="button" data-toggle="modal" data-target="#exampleModal">Send Message</button></center>
								</div>
							</form>

						</div>
						<div class="modal-footer">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- MODAL END -->
