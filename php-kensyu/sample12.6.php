<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>


<table border="2">

<?php

$fp = fopen("sample12.6.csv", "r");
 while(!feof($fp)){
  $str = fgetcsv($fp);
  if(is_array($str)){
    print "<tr>";
    foreach($str as $value){
      print "<td>{$value}</td>";
  }
 }
 print "</tr>\n";
}

fclose($fp);

?>

</table>

</body>
</html>








