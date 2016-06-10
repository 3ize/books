<html>
<head>
<title>Sample</title>
</head>
</html>
<body>



<h2>検索名</h2>
<form action="http://tri-library.main.jp/shimada/form.php"
method="post">
<input type="text" name="product"/>
<input type="submit" name="buttom" value="送信"/>
</form>


<?php

   //var_dump($_POST["product"]);

if($_POST["product"]){
	print("あなたの入力した文字は'" . $_POST["product"] . "'です" );
	
}else{
	//何もしない
	//print "AAAAAAA<BR>";
}



?>


</body>
</html>