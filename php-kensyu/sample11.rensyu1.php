<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$dbname = "sqlite:pdb.db";
$usrname = "";
$psword = "";

$db = new PDO("$dbname", "$usrname", "$psword");
$db->exec("DROP TABLE IF EXISTS product");
$db->exec("CREATE TABLE product(id INTEGER PRIMARY KEY, nameTEXT, num INTEGER)");
$qry = array(
"INSERT INTO product (name, num) VALUES('みかん', 80)",
"INSERT INTO product (name, num) VALUES('いちご', 60)",
"INSERT INTO product (name, num) VALUES('りんご', 22)",
"INSERT INTO product (name, num) VALUES('もも', 50)",
"INSERT INTO product (name, num) VALUES('くり', 75)"
);

foreach($qry as $value){
  $db->exec($value);
}

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>番号</th>
<th>商品名</th>
<th>在庫状況</th>
</tr>

<?php

while($value = $data->fetch()){
 $id = $value["id"];
 $name = $value["name"];
 $num = $value["num"];
 print "<tr><td>{$id}</td><td>{$name}</td><td>{$num}</td></tr>\n";
}

$db = null;

?>

</table>

</body>
</html>

