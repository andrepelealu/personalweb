

<div class="container">


  <div class="services">
<h1>Blog Post</h1>
    <div class="cen">
      <?php foreach ($post as $p) {?>
      <div class="service">
        <img src="" alt="">
        <a href="<?php echo base_url('tampil/'.$p['id'].'/'.$p['slug']); ?>">
        <h2 class="title"><?php echo $p['judul']; ?></h2>
        <p><?php echo substr($p['post'], 0, 255); ?></p></a>
        <p><a href="<?php echo base_url('tampil/'.$p['id'].'/'.$p['slug']); ?>">Read More</a></p>

      </div>
      <?php } ?>
    </div>
  </div>

    <!-- <?php
    $this->uri->segment('3') + 1;
    echo $this->pagination->create_links();?> -->

</div>

</body>
