
<?php

$product = array("鉛筆", "消しゴム", "ボールペン");

mb_language("ja");
mb_internal_encoding("UTF-8");

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>商品名</th>
<th>strlen</th>
<th>mb_strlen</th>
</tr>

<?php

foreach($product as $value){
 
 print "<tr><td>{$value}</td><td>";
 print strlen($value);
 print "</td><td>";
 print mb_strlen($value);

   print"</td></tr>\n";
}


                
?>
