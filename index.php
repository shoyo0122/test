<?php ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カロリー計算</title>
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <header>
        <h1>
           <a href="/">カロリー計算</a>
        </h1>
     </header>
     <div class="form-wrapper">
     <form action="petinfo.php" method="POST">
          <h2>ペットの情報を入力してね</h2>
          <div class="inputs">
            <label class="label">お名前</label>
            <input class="input_form" type="text" name="name">
          </div>
          <div>
          </div>
          <div class="inputs">
            <label class="label">年齢</label>
            <input class="input_form" type="number" name="age">
          </div>
          <div class="inputs">
            <label class="label">体重</label>
            <input class="input_form" type="number" name="weight">
          </div>
          <div class="inputs">
            <label class="label">好物</label>
            <input class="input_form" type="text" name="food">
          </div>
          <div>
            <input type="reset" value="リセット">
            <a href="petinfo.php" class="button">登録</a>
          </div>
        </form>      
     </div>
</body>
</html>
