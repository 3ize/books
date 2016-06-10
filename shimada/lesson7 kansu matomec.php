<?php

$num1 = 60;
$num2 = 50;
$num3 = 70;

print "1番目の数値は{$num1}です。<br/>\n";
print "2番目の数値は{$num2}です。<br/>\n";
print "3番目の数値は{$num3}です。<br/>\n";

print "<br/>\n";

$ans = mini($num1, $num2, $num3);

print "最小値は{$ans}です。<br/>\n";

function mini($x, $y, $z)
{
  if($x < $y) {
	  $mini = $x;
  } else {
	  $mini = $y;
  }
  
  if ($mini < $z) {
	  return $mini;
  } else {
	  return $z;
  }
}

?>

<?php

$num = 5;

$ans = square($num);

print "{$num}の2乗は{$ans}です。<br/>\n";

function square($x)
{
  return $x * $x;
}

?>