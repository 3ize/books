<?php


if(!isset($_SERVER["PHP_AUTH_USER"])){
 header("WWW-Authenticate: Basic realm=\"realm\"");
 header("HTTP/1.0 401 Unauthorizd");
 exit("401 Unauthorizd");
}
else{
 if($_SERVER["PHP_AUTH_USER"]!= "admin"){
  header("WWW-Authenticate: Basic realm=\"realm\"");
  header("HTTP/1.0 401 Unauthorizd");
  exit("401 Unauthorizd");
 }
}

?>

<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$city = array("東京", "名古屋", "京都", "大阪", "福岡");

?>

<h2>出発地のご案内</h2>

<form>
<select name="city">

<?php

 foreach($city as $name => $value){

 print "<option value={$value}>{$value}</option>";

 }
?>

</select>
</form>

</body>
</html>








