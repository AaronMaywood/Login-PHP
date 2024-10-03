<?php
session_start();

// セッションを破棄してログアウト
unset($_SESSION['loggedin']);
unset($_SESSION['username']);

// なお、セッションを破棄する別の簡易な方法に以下があります
// session_unset();     // すべての値を unset する

// ログインページにリダイレクト
header("Location: login.php");
exit();