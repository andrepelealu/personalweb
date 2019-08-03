<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <section>
      <div class="container">
        <h2>Register</h2>
        <?= form_open('register') ?>

        <label for="">Username</label>
        <input type="text" name="username" value="<?= set_value('username')?>"><br>
        <?= form_error('username') ?>
        <label for="">Email</label>
        <input type="text" name="email" value="<?= set_value('email')?>"><br>
        <?= form_error('email') ?>

        <label for="">Password</label>
        <input type="password" name="password1" value=""><br>
        <?= form_error('password1') ?>

        <label for="">Ulangi Password</label>
        <input type="password" name="password2" value=""><br>
        <?= form_error('password2') ?>

        <input type="submit" name="submit" value="Daftar">
        <?= form_close() ?>
      </div>

    </section>

  </body>
</html>
