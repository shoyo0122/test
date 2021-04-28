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
$sql = "SELECT * FROM users WHERE password = :password";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':password', $pass);
$stmt->execute();
$member = $stmt->fetch();

if ($member) {
    $link ='<a href="index.php">ホームページはこちら</a>';
}else {
    echo '名前もしくはパスワードが間違っています。';
    $link = '<a href="login_form.php">戻る</a>';    
}
?>
<?php echo $link; ?>

