

<table border="2">
<tr bgcolor="#AAAAAA">
<th>内容</th>
<th>内容</th>
<th>内容</th>
<th>内容</th>
</tr>


<?php

$curdir = opendir(".");

while($name = readdir($curdir)){
 $isd = is_dir($name) ? "Directory": "File";
 $isw = is_writeable($name) ? "○": "×";
 $isr = is_readable($name) ? "○": "×";

print "<tr><td>{$name}</td><td>{$isd}</td><td>{$isw}</td><td>{$isw}</td></tr>\n";
}

$closedir($curdir);

?>

</table>



