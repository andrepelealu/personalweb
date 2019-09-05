

<div class="services">
<h1>Blog Post</h1>
  <div class="cen">
    <div class="service">

    <h3 class="title"><?php echo $post['judul']; ?></h3>
    <p><?php echo $post['post']; ?></p>
    <?php 		if($this->UserModel->is_login())
    		{?>
    			<a href="<?php echo base_url('blog/').'update/'.$post['id'].'/'. $post['slug'] ?>" class="btn btn-info">Edit Post</a>
            <a href="<?php echo base_url('blog/').'delete/'.$post['id'].'/'. $post['slug'] ?>" class="btn btn-danger"  onclick="return confirm('Are you sure?');">Delete Post</a>
    		<?php } ?>

    <a href="<?php echo base_url('blog') ?>" class="btn btn-primary">Kembali ...</a>
</div>
</div>
