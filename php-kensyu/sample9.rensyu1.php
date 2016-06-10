<?php

$ptr = array("[012]{3}");
$str = array("113", "010");

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

$ptr = array("x[0-9A-Fa-f]{2,4}");
$str = array("xA", "xX1");

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

$ptr = array("^[a-zA-Z_][a-zA-Z0-9_]*");
$str = array("product", "12A_");

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

$ptr = array("[0-9]{3}-[0-9]{4}");
$str = array("3330000", "106-0001");

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

