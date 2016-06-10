<?php

$ptr = array("(PHP)+", "PHP|HPH");
$str = array("PH", "PHP", "HPH", "PHPHP");

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>パターン</th>
<th>文字列</th>
<th>マッチ</th>
</tr>

<?php

foreach($ptr as $valueptr){
 foreach($str as $valuestr){
 
 print "<tr><td>{$valueptr}</td><td>{$valuestr}</td>";
 
 $mt = preg_match("/". $valueptr . "/", $valuestr)
                  ? "〇": "×";
                  
 print "<td>{$mt}</td></tr>\n";
  }
 }

?>
