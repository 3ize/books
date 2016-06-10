<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<form action="http://books.test.jp/php-kensyu/sample12.5.php" method="post">


ファイル名:<input type="text" name="title"/><br/>
<textarea rows="10" cols="50" name="content">
</textarea><br/>

<?php

if(isset($_POST["title"]) && file_exists($_POST["title"])){
  $fp = fopen($_POST["title"], "w");
  fputs($fp, $_POST["content"]);
  fclose($fp);
}


?>

<input type="submit" name="書込"/>
</form>



</body>
</html>






