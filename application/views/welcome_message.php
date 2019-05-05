
		<div class="container-fluid bg">
			<div class="">
				<a href="<?php base_url()?>" class="logo">AndrePelealu</a>
			</div>
	<center>	<h1 class="">Hai !</h1>
		<h3 class="putih">Welcome to my website </h3>
		<p class="putih">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<br>
			<a href="profile" class="btn btn-info btn-lg">See My Profile</a>
			<a href="#" class="btn btn-warning btn-lg">Go to My Post</a>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Send me message</button>
</center><br>
<div class="col-md-4 "><br><br><br>

</div>
<div class="col-md-4">
	<a href="#" class="btn btn-danger btn-lg btn-block ">Clik Here to See Magic</a>
	<p id="target"></p>
</div>
<div class="col-md-4">
<img src="https://media.giphy.com/media/xThtaaGyhb0kZ052A8/giphy.gif" alt="">
</div>

</div>
<div class="container-fluid sec2">
	<h1>test</h1>
</div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
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
