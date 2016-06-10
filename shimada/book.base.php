<?php


define('DSN', 'mysql106.phy.lolipop.lan');
define('DB_USER', 'LAA0696374');
define('DB_PASSWORD', 'test1234');
define('DB_NAME', 'LAA0696374-trilibrary1');

$link = mysql_connect(DSN, DB_USER, DB_PASSWORD);
if (!$link) {
    die('接続失敗です。'.mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);


?>


INSERT INTO `books` 
(`id`, `isbn`, `title`, `author`, `publisher`, `publication_date`, `image_url`, `detail_page_url`, `stock_num`, `lend_num`, `created`, `modified`) 
VALUES
(1, '9789999', '書籍名', '著者名', '出版社', '2012-02-02', 'image.jpg',  'test.html', 1, 0, '2016-02-02 05:16:24', '2016-02-02 05:16:24');

　　　/*作業中
	//if()<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>アドレス登録</title>
</head>
<body>

<?php
$con = mysql_connect('127.0.0.1', 'root', '1234');
if (!$con) {
  exit('データベースに接続できませんでした。');
}

$result = mysql_select_db('phpdb', $con);
if (!$result) {
  exit('データベースを選択できませんでした。');
}

$result = mysql_query('SET NAMES utf8', $con);
if (!$result) {
  exit('文字コードを指定できませんでした。');
}

$no   = $_REQUEST['no'];
$name = $_REQUEST['name'];
$tel  = $_REQUEST['tel'];

$result = mysql_query("INSERT INTO address(no, name, tel) VALUES('$no', '$name', '$tel')", $con);
if (!$result) {
  exit('データを登録できませんでした。');
}

$con = mysql_close($con);
if (!$con) {
  exit('データベースとの接続を閉じられませんでした。');
}

?>
<p>登録が完了しました。<br /><a href="index.html">戻る</a></p>
</body>
</html>
*/	