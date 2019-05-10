
<div class="">
  <div class="">
    <div class="jumbotron bg">
      <h2 class="center">Blog Post</h2>
    </div>
    <!--post-->


      <div class="row">
        <?php foreach ($post as $p) {?>
        <div class="col-md-4">
          <div class="post">
            <h3 class="title"><?php echo $p->judul ?></h3>
            <p><?php echo $p->konten?></p>
          </div>
        </div>
    <?php } ?>


      </div>

      <?php
      $this->uri->segment('3') + 1;
      echo $this->pagination->create_links();?>
  </div>
</div>
</body>
