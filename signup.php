<?php ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録画面</title>
    <link rel="stylesheet" href="stylesheet1.css">
</head>
<body>
<div class="form-wrapper">
  <h1>Sign Up</h1>
  <form action="register.php" method="POST">
  <div class="form-item">
      <label for="name"></label>
      <input type="text" name="name" required="required" placeholder="name"></input>
    </div>
    <div class="form-item">
      <label for="password"></label>
      <input type="password" name="password" required="required" placeholder="Password"></input>
    </div>
    <div class="button-panel">
      <input type="submit" class="button" title="Sign Up" value="Sign Up"></input>
    </div>
  </form>
  <div class="form-footer">
  <p><a href="login_form.php">ログインはこちら</a></p>
  </div>
</body>
</html>