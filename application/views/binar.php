
<!DOCTYPE html>
<html>
<head>
    		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Lexend+Peta&display=swap" rel="stylesheet"></head>
<body>

<div class="container fluid" id="atas">
<h1 id="title"></h1>
<div class="hide a">
  <img src="https://binar.co.id/_nuxt/img/754ddaf.png" alt="" id="logo" class="">

</div>

<div class="row">
  <div class="col-sm-6 xs-6 hide" ><img id="col1"><img src="<?php echo base_url('assets/img/profile.png')?>"></div>
  <div class="col-sm-6  " id="col2"><h4 id="title2"></h4><span id="text"><span>
    
  </div>
</div>

</body>
</html>

<style media="screen">
  .hide{
    display: none;
  }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  var title = document.getElementById('title');
  var title2 = document.getElementById('title2');
  var text = document.getElementById('text');
  text.innerHTML = "if you read the message on this webpage, that means you have received and read my essay for submitting the Ministry of Communication and Information x Binar Academy Scholarship program. Reintroducing, my name Andre Aditya Pelealu. I am a person who has an interest with web programming. With this message I hope you see a little hidden talent in me, and give me an opportunity to learn with Binar Academy. btw I am a big fan of Nadiem Makariem, and of course also Alamanda Shantika. thank you Binar Academy for read this message, I hope we can meet ASAP on the Scholarship program <br><br>Contact:<br> Email: andre02.9d@gmail.com<br>Instagram: andrepelealu<br>Twitter: andrepelealu<br>";
  title2.innerHTML = "#ImReadyToLearn";
  title.style.fontFamily = "'Lexend Peta', sans-serif";
  var animtit = $("#title");
  title.innerHTML = 'Im Ready to Learn';
  animtit.animate({center: 'auto'},0.1);
  animtit.animate({fontSize: '3em'},'slow');
  //style
  var atas =  document.getElementById('atas');
  title.style.fontSize = '199px';
  atas.style.textAlign = 'center';
  var col2 =  document.getElementById('col2');
  col2.style.backgroundColor = '#752e8f';
  text.style.color = 'white';
  var title2 =  document.getElementById('title2');
  title2.style.backgroundColor = '#752e8f';
  title2.style.color = 'white';
  //logo
  var logo = document.getElementById("logo");
//   logo.setAttribute("src", "andrepelealu.com/assets/img/binar.png");
  var log = $('#logo');
  $("#profile").fadeIn(10);
//col 1
var col1 = document.getElementById("col1");
$('col1').fadeOut(1);
$('div').removeClass('hidden');
$('div').fadeIn(1000);


});

</script>
