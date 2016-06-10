<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<form action="http://books.test.jp/php-kensyu/sample12.4.php" method="post">

ファイル名:<input type="text" name="title"/><br/>
<textarea rows="10" cols="50" name="content">


<?php

if(isset($_POST["title"]) && file_exists($_POST["title"])){
  $fp = fopen($_POST["title"], "r");


while(!feof($fp)){
  print fgets($fp);
  }
 fclose($fp);
}


?>

</textarea><br/>
<input type="submit" name="読込"/>
</form>



</body>
</html>

