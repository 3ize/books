<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>




<table border="2">
<tr bgcolor="#AAAAAA">
<th>名前</th>
<th>最終アクセス時刻</th>
<th>最終修正時刻</th>
<th>作成時刻</th>
<th>サイズ</th>
</tr>


<?php

$curdir = opendir(".");

while($name = readdir($curdir)){
 $status = stat($name);
 print "<tr><td>";
 print $name;
 print "</td><td>";
 print date("y/m/d h:i:s", $status["atime"]);
 print "</td><td>";
 print date("y/m/d h:i:s", $status["mtime"]);
 print "</td><td>";
 print date("y/m/d h:i:s", $status["ctime"]);
 print "</td><td>";
 print $status["size"];
 print "</td></tr>\n";
}

$closedir($curdir);

?>

</table>

</body>
</html>





