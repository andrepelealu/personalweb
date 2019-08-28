<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <section>
      <div class="container border">

        <h2>Login Page</h2>
        <?= form_open('login') ?>
        <div class="form-group">
        <label for="">Username</label>
        <input type="text" name="username" value="<?= set_value('username')?>"><br>
        <?= form_error('username') ?>
        </div>
        <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password1" value=""><br>
        <?= form_error('password1') ?>
        </div>
        <input type="submit" name="submit" value="Login">
        <?= form_close() ?>
      </div>

    </section>

  </body>
</html>
