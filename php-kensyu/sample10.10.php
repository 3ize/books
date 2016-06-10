<?php

$fm = array("hours", "minutes", "seconds", "year", "mon", "month", "mday", "wday", "weekday");

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>指定</th>
<th>値</th>
</tr>

<?php

$dt = getdate();

foreach($fm as $value){

 print "<tr><td>{$value}</td><td>";
 print $dt[$value];
 print "</td></tr>\n";

}

?>

</table>

