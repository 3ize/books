<?php

$num1 = 5;
$num2 = 10;

print "1番目の数値は{$num1}です。<br/>\n";
print "2番目の数値は{$num2}です。<br/>\n";

print "<br/>\n";

$ans = mini($num1, $num2);

print "最小値は{$ans}です。<br/>\n";

function mini($x, $y)
{
  if($x < $y)
     return $x;
  else
     return $y;
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