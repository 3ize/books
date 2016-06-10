

<table border="2">
<tr bgcolor="#AAAAAA">
<th>番号</th>
<th>内容</th>
</tr>


<?php


$status = stat("sample12.1.php");

foreach($status as $name => $value){
 print "<tr><td>{$name}</td><td>{$value}</td></tr>\n";
}

?>

</table>


