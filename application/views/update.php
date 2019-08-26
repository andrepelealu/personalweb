<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <section>
      <div class="container">
        <form class="" action="" method="post">
          <label for="">Judul</label><br>
          <input type="text" name="judul" value="<?php echo $post['judul'] ?>"><br>

          <label for="">Isi</label><br>
          <textarea name="post" rows="8" cols="80"><?php echo $post['post'] ?></textarea><br>
          <input type="submit" name="update" value="update">
        </form>
        <a href="<?php echo base_url('tampil/'.$post['id'].'/'.$post['slug'])?>">Kembali ke postingan</a>
      </div>
    </section>
    

  </body>
</html>
