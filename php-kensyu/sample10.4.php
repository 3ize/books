<?php

$product = array("鉛筆", "消しゴム", "定規", "コンパス", "ボールペン");

?>

<h2>商品のご選択</h2>

<form action="http://books.test.jp/php-kensyu/sample10.4.php"
method="post">
<select size="5" name="product">

<?php 

foreach($product as $value){
print "<option value=\"{$value}\">{$value}</option>";
}

?>


</select>
<input type="submit" value="送信"/>
</form>

<?php

if(isset($_POST["product"]))
  print "「{$_POST["product"]}」をお買い上げ頂きました。<br/>\n"

?>


