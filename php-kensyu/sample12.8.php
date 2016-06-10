<meta charset="Shift_JIS"/>
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
  print "\t{$num}<br/>\n";
  print "<br/>\n";
}

fclose($fp);

?>

</body>
</html>





