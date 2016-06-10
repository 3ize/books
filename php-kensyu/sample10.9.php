<?php

$fm = array("c", "y/m/d", "D", "F", "h:i:s");

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>指定</th>
<th>日時</th>
</tr>

<?php

foreach($fm as $value){

 print "<tr><td>{$value}</td><td>";
 print date($value);
 print "</td></tr>\n";

}

?>

</table>

