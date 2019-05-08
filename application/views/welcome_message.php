


	<div class="row">

		<div class="col-md-12 col-xs-12">
			<center>
				<h1 class="">Hai !</h1>
				<h3 class="putih">Welcome to my website </h3>
				<p class="putih">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<br>
		</center>
		</div>

	</div>

		<div class="row">
			<div class="col-md-4">
				<a href="profile" class="btn btn-info btn-lg btn-block">See My Profile</a>
			</div>
			<div class="col-md-4">
				<a href="#" class="btn btn-warning btn-lg btn-block">Go to My Post</a>
			</div>
			<div class="col-md-4">
				<button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">Send me message</button>

			</div>
		</div>


	<br>

	<div class="row">
		<div class=""><br>
		</div>

		<div class="col-md-12">
			<a href="#" class="btn btn-danger btn-lg btn-block ">Clik Here to See Magic</a>
			<!-- <p id="target"></p> -->
		</div>

		<div class="">
			<img class="img-responsive" src="https://media.giphy.com/media/xThtaaGyhb0kZ052A8/giphy.gif" alt="">
		</div>

	</div>




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
								<h4 class="modal-title">Huh Hah !</h4>
							</div>
							<div class="modal-body">
								<form class="" action="" method="post">
									<div class="form-group">
										<label for="">Name</label>
										<input type="text" class="form-control" name="" value="">
										<label for="comment">Comment:</label>
										<textarea class="form-control" rows="5" id="comment"></textarea>
										<center><button type="submit" class="btn btn-warning"name="button">Huh hah</button></center>
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
