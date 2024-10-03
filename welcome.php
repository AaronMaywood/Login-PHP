<?php
session_start();

// ログインしているか確認
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // ログインしていなければログイン画面へリダイレクト
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ようこそ</title>
</head>
<body>
    <h1>ようこそ、<?php echo htmlspecialchars($_SESSION['username']); ?>さん！</h1>
    <p>現在ログイン中です。</p>
    <form method="post" action="logout.php">
        <input type="submit" value="ログアウト">
    </form>
</body>
</html>