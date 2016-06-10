
<table border="2">
<tr bgcolor="#AAAAAA">
<th>サーバー情報</th>
<th>内容</th>
</tr>

<?php

print "<tr><td>SERVER_NAME</td><td>{$_SERVER["SERVER_NAME"]}</td></tr>\n";

print "<tr><td>SERVER_ADDR</td><td>{$_SERVER["SERVER_ADDR"]}</td></tr>\n";

print "<tr><td>SERVER_SOFTWARE</td><td>{$_SERVER["SERVER_SOFTWARE"]}</td></tr>\n";

print "<tr><td>SERVER_PORT</td><td>{$_SERVER["SERVER_PORT"]}</td></tr>\n";

print "<tr><td>DOCUMENT_ROOT</td><td>{$_SERVER["DOCUMENT_ROOT"]}</td></tr>\n";

print "<tr><td>PHP_SELF</td><td>{$_SERVER["PHP_SELF"]}</td></tr>\n";

?>

</table>


