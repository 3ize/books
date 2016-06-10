

/*

	$title = $_POST['title'];
	$imgURL = $_POST['imgURL'];
	echo "<br><br>";
	echo $title;
	echo "<br><br>";
    echo $imgURL;

	$title = $_POST['books'];
	$imgURL = $_POST['http://tri-library.main.jp/shimada/amazon_api.php'];
	echo "<br><br>";
	echo $title;
	echo "<br><br>";
    echo $imgURL;

*/





$link = mysql_connect(DSN, DB_USER, DB_PASSWORD);
if (!$link) {
    die('接続失敗です。'.mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

/*
//MSQL
$link = mysql_connect('mysql106.phy.lolipop.lan', 'LAA0696374', 'test1234');
if (!$link) {
    die('接続失敗です。'.mysql_error());
}

print('<p>接続に成功しました。</p>');

$db_selected = mysql_select_db('LAA0696374-trilibrary1', $link);
if (!$db_selected){
    die('データベース選択失敗です。'.mysql_error());
}

print('<p>LAA0696374-trilibrary1データベースを選択しました。</p>');
*/

mysql_set_charset('utf8');
/*
$result = mysql_query('SELECT `id`, `isbn`, `title`, `author`, `publisher`, `publication_date`, `image_url`, `detail_page_url`, `stock_num`, `lend_num`, `created`, `modified` FROM books');
if (!$result) {
    die('SELECTクエリーが失敗しました。'.mysql_error());
}

while ($row = mysql_fetch_assoc($result)) {
    print('<p>');
    print('id='.$row['id']);
    print(',name='.$row['name']);
    print('</p>');
}

print('<p>データを追加します。</p>');
*/


/* ここで今の件数を確認するSQLをながす、完成後、コメントアウト。*/
$sql = "select stock_num from books where  isbn = '". $_POST['isbn']. "'";
mysql_query($sql);
while ($row = mysql_fetch_assoc($result)) {
    print('<p>');
    print('stock_num='.$row['stock_num']);
    print('</p>');
}
exit;

//
////処理が流れてくる。
////ここにカウントが0かどうかの条件文を作成する。
//$sql = `stock_num`;
//if ($sql == 0){
//
//// もし今の件数が0なら下のインサートを流す(新規登録)
//$sql = "INSERT INTO books (`id`, `isbn`, `title`, `author`, `publisher`, `publication_date`, `image_url`, `detail_page_url`, `stock_num`, `lend_num`,  `other_num`, `created`, `modified`) VALUES ('', '\" . $_POST['isbn'] . \"', '\" . $_POST['title'] . \"', '\". $_POST['authors'] . \"', '\". $_POST['publisher'] . \"', '\". $_POST['publication_date'] . \"', '\". $_POST['image_url'] . \"', '\". $_POST['detail_page_url'] . \"', 1, 0, 0, '\". date('Y-m-d H:i:s') .\"', '\". date('Y-m-d H:i:s') .\"')\";";
//
//}
//// もし今の件数が1件以上なら回数をひとつあげるUPDATEのSQLを流す (更新)
//else {
//$sql = "UPDATE books SET stock_num = stock_num + 1 where isbn = '". $_POST['isbn']. "'";
//
//}
$sql = "INSERT INTO books (`id`, `isbn`, `title`, `author`, `publisher`, `publication_date`, `image_url`, `detail_page_url`, `stock_num`, `lend_num`,  `other_num`, `created`, `modified`) VALUES ('', '\" . $_POST['isbn'] . \"', '\" . $_POST['title'] . \"', '\". $_POST['authors'] . \"', '\". $_POST['publisher'] . \"', '\". $_POST['publication_date'] . \"', '\". $_POST['image_url'] . \"', '\". $_POST['detail_page_url'] . \"', 1, 0, 0, '\". date('Y-m-d H:i:s') .\"', '\". date('Y-m-d H:i:s') .\"')\";";




$result_flag = mysql_query($sql);

/*
print('<p>追加後のデータを取得します。</p>');

$result = mysql_query('SELECT `id`, `isbn`, `title`, `author`, `publisher`, `publication_date`, `image_url`, `detail_page_url`, `stock_num`, `lend_num`, `other_num`, `created`, `modified` FROM books');
if (!$result) {
    die('SELECTクエリーが失敗しました。'.mysql_error());
}

while ($row = mysql_fetch_assoc($result)) {
    print('<p>');
    print('id='.$row['id']);
    print(',name='.$row['name']);
    print('</p>');
}
*/


if (!$result_flag) {
    die('INSERTクエリーが失敗しました。'.mysql_error());
}

$close_flag = mysql_close($link);


/* ヒアドキュメントでスクリプト生成 */
$script = <<< SCRIPT
<script language='javascript' type='text/javascript'>

/* アラートで確認 */
window.alert('登録が完了しました');

/* 現在のウィンドウを閉じる */
window.opner=window;
window.close();
</script>
SCRIPT;

print $script;

/*
if ($close_flag){
    print('<p>切断に成功しました。</p>');
}

*/



/*
if ($sql =　"select `isbn` from books where　isbn");
登録ポップアップ
	$script = <<< SCRIPT
<script language='javascript' type='text/javascript'>

 アラートで確認 
window.alert('登録します');
</script>
SCRIPT;
*/






<script type="text/javascript"> 
<!-- 
function check(){
	var flag = 0;
// 設定開始（必須にする項目を設定してください）
	if(document.ISBN.field1.value == ""){ // 「ISBNコード」の入力をチェック
		flag = 1;
	}
// 設定終了
	if(flag){
		window.alert('必須項目に未入力がありました'); // 入力漏れがあれば警告ダイアログを表示
		return false; // 送信を中止
	}
	else{
		return true; // 送信を実行
	}
}
// -->
</script>
<form method="GET" action="" name="ISBN" onSubmit="return check()">
<p>ISBNコード：<br><input type="text" name="field1" size="40　"maxlength="13"> （必須）</p>
<p><input type="submit" value="送信"></p>
</form>