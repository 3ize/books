<?php

$str = array("Hello", "Goodbye", "Thankyou");

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>文字列</th>
<th>大文字</th>
<th>小文字</th>
<th>逆順</th>
<th>略称</th>
</tr>

<?php

 foreach($str as $value)
   {
 print "<tr><td>{$value}</td><td>";
 print strtoupper($value);
 print "</td><td>";
 print strtolower($value);
 print "</td><td>";
 print strrev($value);
 print "</td><td>";
 print substr($value, 0, 3);
 print "</td></tr>\n";

}

?>
 

