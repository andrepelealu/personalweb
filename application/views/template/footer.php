

<footer class="bg-dark text-white mt-5">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <p>Copyright &copy; 2018.</p>
      </div>
    </div>
  </div>
</footer>




	</body>
</html>
<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url("assets/js/jquery.js") ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.bundle.min.js") ?>"></script>

<!-- Plugin JavaScript -->
<script src="<?php echo base_url("assets/js/jquery.easing.min.js") ?>"></script>

<!-- Custom JavaScript for this theme -->
<script src="<?php echo base_url("assets/js/scrolling-nav.js") ?>"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
