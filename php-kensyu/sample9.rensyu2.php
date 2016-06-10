<?php

$ptr = array("^[0-7]{3}$");
$str = array("346", "789");

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




<?php

$ptr = array("^[0-9]{3}-[0-9]{4}-[0-9]{4}$");
$str = array("09012345678", "1234567890");

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

