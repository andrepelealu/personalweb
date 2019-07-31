


    <div class="jumbotron bg">
      <h2 class="center">Blog Post</h2>
    </div>
    <!--post-->

<div class="container">
      <div class="row">
        <?php foreach ($post as $p) {?>
        <div class="col-md-4">
          <div class="post">
            <h3 class="title"><?php echo $p['judul']; ?></h3>
            <p><?php echo substr($p['post'], 0, 550); ?></p>
            <p><a href="<?php echo base_url('tampil/'.$p['slug']); ?>">Read More</a></p>
          </div>
        </div>
    <?php } ?>


      </div>
</div>
      <?php
      $this->uri->segment('3') + 1;
      echo $this->pagination->create_links();?>


</body>
