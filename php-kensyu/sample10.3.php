
<h2>商品のご選択</h2>

<form action="http://books.test.jp/php-kensyu/sample10.3.php"
method="post">
<input type="text" name="product"/>
<input type="submit" value="送信"/>
</form>

<?php 

if(isset($_POST["product"]))
  print "「{$_POST["product"]}」をお買い上げ頂きました。<br/>\n"

?>


