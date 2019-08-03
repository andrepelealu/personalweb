<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <section>
      <div class="container">
        <h2>Login</h2>
        <?= form_open('login') ?>

        <label for="">Username</label>
        <input type="text" name="username" value="<?= set_value('username')?>"><br>
        <?= form_error('username') ?>

        <label for="">Password</label>
        <input type="password" name="password1" value=""><br>
        <?= form_error('password1') ?>

        <input type="submit" name="submit" value="Login">
        <?= form_close() ?>
      </div>

    </section>

  </body>
</html>
