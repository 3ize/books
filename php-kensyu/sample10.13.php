<table border="2">
<tr bgcolor="#AAAAAA">
<th>クライアント情報</th>
<th>内容</th>
</tr>


<?php

print "<tr><td>REMOTE_ADDR</td><td>{$_SERVER["REMOTE_ADDR"]}</td></tr>\n";

print "<tr><td>HTTP_USER_AGENT</td><td>{$_SERVER["HTTP_USER_AGENT"]}</td></tr>\n";

print "<tr><td>SERVER_PROTOCOL</td><td>{$_SERVER["SERVER_PROTOCOL"]}</td></tr>\n";

print "<tr><td>REQUEST_METHOD</td><td>{$_SERVER["REQUEST_METHOD"]}</td></tr>\n";

print "<tr><td>REQUEST_URI</td><td>{$_SERVER["REQUEST_URI"]}</td></tr>\n";

if (isset($_SERVER["HTTP_REFERER"]))
  $r = $_SERVER["HTTP_REFERER"];
else
  $r = "";
print "<tr><td>HTTP_REFERER</td><td>$r</td></tr>\n";

?>

</table>



