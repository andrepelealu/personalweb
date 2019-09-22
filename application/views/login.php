<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>




    <section>

      <div class="container">
        <h2>Login Page</h2>
        <?= form_open('login') ?>
        <div class="form-group">
          <label>Username</label>
          <input type="text" class="form-control" placeholder="Username" name="username" value="<?= set_value('username')?>">
          <?= form_error('username') ?>
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Password" name="password1" value="">
          <?= form_error('password1') ?>
        </div>

        <input type="submit" name="submit" value="Login" class="btn btn-default">
        <?= form_close() ?>
      </div>
      </div>


    </section>

  </body>
</html>
