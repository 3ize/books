<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<h2>ソースコードの表示</h2>

<form action="http://books.test.jp/php-kensyu/sample12.7.php" method="post">

<input type="submit" name="program" value="起動"/>
</form>


<?php

if(isset($_POST["program"]))
   exec("notepad.exe sample1.1php");

?>

</body>
</html>


