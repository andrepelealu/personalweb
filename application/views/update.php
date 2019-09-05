<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Post</title>
    <script src="https://cdn.tiny.cloud/1/i4dh9lnxd250xmmwiq4fh9gv9y8dxjazhc90h5q773k5zu4v/tinymce/5/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
  </head>
  <body>
    <section>
      <div class="container">
        <form class="" action="" method="post">
          <label for="">Judul</label><br>
          <input type="text" name="judul" value="<?php echo $post['judul'] ?>"><br>

          <label for="">Isi</label><br>
          <textarea name="post" ><?php echo $post['post'] ?></textarea><br>
          <input type="submit" name="update" value="update">
        </form>
        <a href="<?php echo base_url('tampil/'.$post['id'].'/'.$post['slug'])?>">Kembali ke postingan</a>
      </div>
    </section>
    

  </body>
</html>
