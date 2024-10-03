<?php
session_start();

// ユーザー名とパスワードの設定
$valid_username = "admin";
$valid_password = "password123";

// ログイン処理
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 入力された情報が正しいかチェック
    if ($username == $valid_username && $password == $valid_password) {
        // セッションにログイン状態を保存
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // ログイン成功メッセージへリダイレクト
        header("Location: welcome.php");
        exit();
    } else {
        // エラーメッセージ
        $error_message = "ユーザー名またはパスワードが違います。";
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログインシステム</title>
</head>
<body>
    <h1>ログインフォーム</h1>
    <?php if (!empty($error_message)): ?>
        <p style="color:red;"><?php echo $error_message; ?></p>
    <?php endif; ?>
    <form method="post">
        ユーザー名: <input type="text" name="username" required><br>
        パスワード: <input type="password" name="password" required><br>
        <input type="submit" value="ログイン">
    </form>
</body>