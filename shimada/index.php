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
  <title>�z�[�����</title>
</head>
<body>
<h1>�z�[�����</h1>
<p><a href="redirect.php">Google�A�J�E���g�Ń��O�C������</a></p>
</body>
</html>

