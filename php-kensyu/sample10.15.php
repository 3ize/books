
<form action="http://books.test.jp/php-kensyu/sample10.15.php"
method="post">
タイトル:<input type="text" name="sbj"/><br/>
宛先:<input type="text" name="to"/><br/>
<textarea rows="10" cols="50" name="msg"></textarea><br/>
<input type="submit" value="送信"/>
</form>

<?php

if(isset($_POST["to"]))
  $to = $_POST["to"];
if(isset($_POST["sbj"]))
  $to = $_POST["sbj"];
else
  $sbj = null;
if(isset($_POST["msg"]))
  $msg = $_POST["msg"];
else
  $msg = null;

$hdr = "Content-Type: text/plain;charset=ISO-2022-JP";

mb_language("ja");

$sbj = mb_convert_encoding($sbj, "JIS", "UTF-8");
$msg = mb_convert_encoding($msg, "JIS", "UTF-8");

if(isset($_POST["to"]))
 {
  if(mb_send_mail($to, $sbj, $msg, $hdr))
  print "送信しました。\n";
else
 print "送信に失敗しました。\n";
 }

?>




