<?php setcookie("count", true); ?>

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

if(!isset($_COOKIE["count"])){
  print "初めてのお越しですね。<br/>\n";
  }
 else{
  print "毎度ありがとうございます。<br/>\n";
 }
?>


</body>
</html>


