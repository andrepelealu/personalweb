
<form class="" action="createpost" method="post">
  <label for="">judul</label>
  <input type="text" name="judul" value="">
  <!-- <label for="">isi</label> -->
  <div class="form-group">
  <label for="exampleFormControlTextarea1">Isi Pesan</label>
  <textarea class="form-control rounded-0"  rows="10" name="isi"></textarea>
</div>
  <input type="submit" class="btn btn-primary" name="submit" value="Post">
</form>
<a class="btn btn-warning" href="<?php echo base_url('blog') ?>">Kembali ke Blog</a>