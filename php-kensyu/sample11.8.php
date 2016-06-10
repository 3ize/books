<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
<style type="text/css">
table{font-size:12px;}
</style>
</head>
<body>


<?php 

$db = new PDO("sqlite:pdb.db", "","");

if(isset($_POST["insert"])){
  $ipd = $_POST["insproduct"];
  $ipc = $_POST["insprice"];
  $qry = "INSERT INTO product(name, price) VALUES (:ipd, :ipc)";

 $stmt = $db->prepare($qry);
 $stmt->bindParam(":ipd", $ipd);
 $stmt->bindParam(":ipc", $ipc);
 $stmt->execute();
}
elseif(isset($_POST["delete"])){
  $did = $_POST["delid"];
  $qry = "DELETE FROM product WHERE id = :did";
  $stmt = $db->prepare($qry);
  $stmt->bindParam(":did", $did);
  $stmt->execute();
}

$qry = "SELECT * FROM product";
$data = $db->query($qry)

?>

<h2>商品登録</h2>


<form action="http://books.test.jp/php-kensyu/sample11.8.php" method="post">
商品名:<input type="text" name="insproduct"/><br/>
単価:<input type="text" name="insprice"/><br/>
<input type="submit" name="insert" value="追加"/>

</hr>

<h2>商品一覧</h2>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>削除</th>
<th>番号</th>
<th>商品名</th>
<th>単価</th>
</tr>

<?php

while($value = $data->fetch()){
 $id = $value["id"];
 $name = $value["name"];
 $price = $value["price"];
print "<tr><td><input type=\"radio\" name=\"delid\" value=\"{$id}\"/></td><td>{$id}</td><td>{$name}</td><td>{$price}</td></tr>\n";
}

$db = null;

?>

</table>

<input type="submit" name="delete" value="削除"/>
</form>

</body>
</html>











