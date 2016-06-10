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

if(!isset($_SESSION["count"])){
 $_SESSION["count"] = 1;
  print "初めてのお越しですね。<br/>\n";
  }
 else{
  $_SESSION["count"] ++;
  print "{$_SESSION["count"]}回目のお越しですね。<br/>\n";
 }
?>


</body>
</html>

