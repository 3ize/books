<h2>商品のご選択</h2>

<form action="http://books.test.jp/php-kensyu/sample10.16.php"
method="post">
<textarea rows="5" cols="40" name="product"></textarea><br/>
<input type="submit" value="送信"/>
</form>

<?php

if(isset($_POST["product"])){
  $newproduct = htmlspecialchars($_POST["product"]);
  print "「{$newproduct}」をお買い上げ頂きました。<br/>\n";
}
?>


