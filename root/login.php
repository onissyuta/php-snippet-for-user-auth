<?php
session_start();

$error = null;

if(isset($_POST['email']) && isset($_POST['password'])){
    if($_POST['email'] == 'mail@example.com' && $_POST['password'] == 'password'){
        $_SESSION['email'] = $_POST['email'];
        header('Location: ./admin/index.php');
        exit();
    } else {
        $error = 'invalidEmailOrPassword';
    }
}


$errorMessage = [
    'EmailOrPasswordIsNull' => 'メールアドレスとパスワードを入力してください',
    'invalidEmailOrPassword' => 'メールアドレスまたはパスワードが違います'
]
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
</head>
<body>
    <form method="post">
        <label>メールアドレス<input type="email" name="email" required></label>
        <label>パスワード<input type="password" name="password" required></label>
        <button type="submit">ログイン</button>
    </form>
    <?php if($error): ?>
        <div style="color:red"><?= $errorMessage[$error] ?></div>
    <?php endif; ?>
</body>
</html>