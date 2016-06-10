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

$qry = "SELECT * FROM product ORDER BY price DESC";
$data = $db->query($qry);

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



</body>
</html>



