<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8"/>
<title>サンプル</title>
</head>
<body>

<?php

$dbname = "sqlite:pdb.db";
$usrname = "";
$psword = "";

$db = new PDO($dbname, $usrname, $psword);

$qry = "SELECT * FROM product ORDER BY price";

if(isset($_POST["sort"]) && $_POST["sort"] == "desc")
$qry = $qry . "DESC";

$stmt = $db->prepare($qry);
$stmt->execute();

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>番号</th>
<th>商品名</th>
<th>単価</th>
</tr>

<?php

while($value = $data->fetch()){
 $id = $value["id"];
 $name = $value["name"];
 $price = $value["price"];
 print "<tr><td>{$id}</td><td>{$name}</td><td>{$price}</td></tr>\n";
}

$db = null;

?>

</table>

<form action="http://books.test.jp/php-kensyu/sample11.7.php" method="post">
<input type="radio" name="sort" value="asc">
<?php if(!isset($_POST["sort"]) || $_POST["sort"] != "desc")
print "checked"; ?>
/>昇順
<input type="radio" name="sort" value="desc">
<?php if(isset($_POST["sort"]) && $_POST["sort"] == "desc")
print "checked"; ?>
/>降順

<input type="submit" name="並べ替え"/>

</form>

</body>
</html>



