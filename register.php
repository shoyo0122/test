<?php
$name = $_POST['name'];
$pass = $_POST['password'];
$username="root";
$password="";
try {
    $dbh = new PDO('mysql:host=localhost; dbname=calorie; charset=utf8mb4', 
    $username, $password);
} catch (PDOException $e) {
    $msg = $e->getMessage();
}
$sql = "SELECT * FROM users WHERE name = :name";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':name', $name );
$stmt->execute();

$member = $stmt->fetch();
if ($member['name'] === $name) {
    $msg = '同じ名前が存在します。';
    $link = '<a href="signup.php">戻る</a>';
} else {
    $sql = "INSERT INTO users(name, password) VALUES (:name, :password)";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':password', $pass);
    $stmt->execute();
    $msg = '会員登録が完了しました。';
    $link = '<a href="login_form.php">ログイン</a>';
}
?>

<h1><?php echo $msg; ?></h1> 
<?php echo $link; ?>
