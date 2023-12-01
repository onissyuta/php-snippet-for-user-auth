<?php
session_start();

if(!isLogin()){
    header('Location: ../login.php');
    exit();
}

function isLogin(){
    return isset($_SESSION['email']);
}

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マイページ</title>
</head>
<body>
    <h1>マイページ</h1>
    <p>ようこそ、<?= $_SESSION['email'] ?>さん</p>
    <a href="logout.php">ログアウト</a>
</body>
</html>