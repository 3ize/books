<?php

require_once('config.php');
require_once('functions.php');

session_start();

if(empty($_SESSION['me'])) {
	header('Locatiom: '.SITE_URL.'login.php);
	exit;
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ホーム画面</title>
</head>
<body>
<h1>ホーム画面</h1>
<p><a href="redirect.php">Googleアカウントでログインする</a></p>
</body>
</html>

