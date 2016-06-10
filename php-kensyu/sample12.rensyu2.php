
<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>


<?php

$fp = fopen("data.txt", "r");

while(!feof($fp)){

  $num = fgets($fp);
  for($i=0; $i<$num; $i++){
    print "<img src=\"g.jpg\"/>";
}
 print "\t<em>{$num}</em><br/>\n";
 print "<br/>\n";
}

fclose($fp);

?>

</body>
</html>




