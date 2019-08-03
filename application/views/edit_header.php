
<header class="bg">
  <div class="container">
    <h2>Edit Website</h2>
  </div>

</header>
<div class="container">
  <form class="" action="edit" method="post">
    <h3>Header Section</h3>
    <label for="">Header Title</label><br>
    <input type="text" name="title_utama" value="<?php echo $content->title_header ?>"><br>

    <label for="">Header Sub-Title</label><br>
    <input type="text" name="sub_title" value="<?php echo $content->subtitle_header ?>"><br>

    <label for="">Desc Header</label>
    <textarea class="form-control rounded-0"  rows="10" name="desc_title" value=""><?php echo $content->desc_header ?></textarea>

    <label for="">Teks Header</label>
    <textarea class="form-control rounded-0"  rows="10" name="teks" value=""><?php echo $content->teks_header ?></textarea>
    <!--- Content Section -->
    <h3>Content Section</h3>
    <label for="">Section Title</label><br>
    <input type="text" name="sec_title" value="<?php echo $content->sec_title ?>"><br>

    <label for="">Introduction Title</label><br>
    <input type="text" name="title_perkenalan" value="<?php echo $content->title_perkenalan ?>"><br>

    <label for="">Introduction Content</label>
    <textarea class="form-control rounded-0"  rows="10" name="content_perkenalan" value=""><?php echo $content->content_perkenalan ?></textarea>
    <label for="">Title Section 2</label><br>
    <input type="text" name="title_sec2" value="<?php echo $content->title_sec2 ?>"><br>
    <label for="">Quotes</label>
    <textarea class="form-control rounded-0"  rows="10" name="content_quotes" value=""><?php echo $content->content_quotes ?></textarea>
    <h3>Section 3</h3>
    <label for="">Section Title</label><br>
    <input type="text" name="title_sec3" value="<?php echo $content->title_sec3 ?>"><br>
    <label for="">Content</label>
    <textarea class="form-control rounded-0"  rows="10" name="content_sec3" value=""><?php echo $content->content_sec3 ?></textarea>
  <input type="submit" name="submit" value="Update" class="btn btn-primary btn-block">
  <a href="<?php base_url() ?>" class="btn btn-warning btn-block">Kembali</a>
  </form>
</div>
