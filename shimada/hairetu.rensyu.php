
<?php

$data [0][0] = 0;
$data [0][1] = 80;
$data [0][2] = 89;
$data [1][0] = 1;
$data [1][1] = 60;
$data [1][2] = 87;
$data [2][0] = 2;
$data [2][1] = 22;
$data [2][2] = 73;
$data [3][0] = 3;
$data [3][1] = 51;
$data [3][2] = 81;
$data [4][0] = 4;
$data [4][1] = 75;
$data [4][2] = 87;
$data [5][0] = 5;
$data [5][1] = 62;
$data [5][2] = 89;
$data [6][0] = 6;
$data [6][1] = 81;
$data [6][2] = 34;
$data [7][0] = 7;
$data [7][1] = 43;
$data [7][2] = 35;
$data [8][0] = 8;
$data [8][1] = 72;
$data [8][2] = 55;
$data [9][0] = 9;
$data [9][1] = 29;
$data [9][2] = 65;
$data [10][0] = 10;
$data [10][1] = 36;
$data [10][2] = 77;
$data [11][0] = 11;
$data [11][1] = 49;
$data [11][2] = 33;
$data [12][0] = 12;
$data [12][1] = 69;
$data [12][2] = 74;
$data [13][0] = 13;
$data [13][1] = 76;
$data [13][2] = 61;

?>

<table border="2">
<tr bgcolor"#AAAAAA">
<th>番号</th>
<th>英語</th>
<th>国語</th>
<th>理科</th>
<th>社会</th>

</tr>


<?php

echo "---------------------------------- <br>";

echo count($data);
echo "---------------------------------- <br>";

echo count($data[0]);

echo "---------------------------------- <br>";

for($i=0; $i<count($data); $i++){
	print "<tr>";
	for($j=0; $j<count($data[0]); $j++){
		if ($j == 0){ $data[$i][$j]++; }
		if ($j == 1){ $data[$i][$j] = $data[$i][$j]*3; }
		
		
	   print "<td>{$data[$i][$j]}</td>";	
	}
	print "<td>70</td>";
	print "<td>80</td>\n";
	
	print "</tr>\n";
}


?>

</table>


<?php
$data= array(240,180,66,150,225,186,243,129,216,87,108,147,207,228);

rsort($data);

?>

<h3>降順</h3>
<table border="2">
<tr bgcolor"#AAAAAA">
<th>番号</th>
<th>英語</th>
</tr>

<?php
foreach($data as $id => $value){
	print "<tr><td>{$id}</td><td>{$value}</td></tr>\n";
}

?>

</table>
555












