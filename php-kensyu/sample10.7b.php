<?php session_start(); ?>

<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8"/>
<title>サンプル</title>
</head>
<body>


<h2>2Fのご案内</h2>
<hr>


<?php

if(!isset($_SESSION["date"])){
  print "<hr/>\n";
  print "<a href=\"sample10.7a.php\">1Fからご覧ください。</a>\n";
  }
 else{
  print "{$_SESSION["date"]}入店されました。<br/>\n";
 }
?>


</body>
</html>

