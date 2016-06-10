<?php

$str = array("Sample.xml", "Sample.exe", "test.php", "index.html");

?>

<table border="2">
<tr bgcolor="#AAAAAA">
<th>変換前</th>
<th>変換後</th>
</tr>

<?php

 foreach($str as $value){
 
 $rpvalue = preg_replace("/\.(xml|html|php)$/", ".txt", $value);

 print "<tr><td>{$value}</td><td>{$rpvalue}</td></tr>\n";
                  
 }

?>
