<style type="text/css">
th{
height:10px;
width:70px;
background-color:#AAAAAA;
}
td{
font-family:Verdana;
font-size:15px;
height:50px;
width:70px;
}
td.today{
font-size:25px;
font-weight:bold;
background-color:#AAAAAA;
}
</style>



<?php

$tm = time();  //現在時刻
$dt = getdate($tm);  //現在時刻
$fm = mktime(0,0,0,$dt["mon"],1,$dt["year"]);  //月初
$fw = date("w", $fm);  //月初曜日
$ld = date("t", $tm);  //月終日

$wd = array("日","月","火","水","木","金","土");

print "<h2>". $dt["month"]. "," . $dt["year"] ."<h2>";

print "<table border =\"2\">";

print "<tr>";
foreach($wd as $value){
 print "<th>{$value}</th>";
}

print "</tr>";

print "<tr>";

for($i=0; $i<$fw; $i++){
 print "<td></td>";
}

for($j=1; $j<=$ld; $j++){
 if($j == $dt["mday"])
  print "<td class=\"today\">{$j}</td>";
  else
  print "<td>{$j}</td>";

 if(($j+$i)%7 == 0){
   print "</tr><tr>";
 }
}

print "</tr>";
print "</table>";

?>

