<?php session_start(); ?>

<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8"/>
<title>サンプル</title>
</head>
<body>


<h2>店内のご案内</h2>
<hr>


<?php

if(!isset($_SESSION["date"])){
 $_SESSION["date"] = date("h:i:s");
  print "初めてのお越しですね。<br/>\n";
  }
 else{
  print "{$_SESSION["date"]}に入店されました。<br/>\n";
 }

print "<hr/>\n";
print "<a href=\"Sample10.7b.php\">2Fへどうぞ。</a>\n";

?>

</body>
</html>

