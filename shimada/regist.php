<?php
print_r("登録が完了しました");
//echo date('Y-m-d H:i:s');

// 接続定義
define('DSN', 'host=localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'mysql:dbname=LAA0696374-trilibrary1;');

//DBに接続
try{
   $db = new PDO(DB_NAME.DSN,DB_USER,DB_PASSWORD);
} catch(PDOException $e) {
   echo 'Connection failed: '. $e->getMessage();
}




$link = mysql_connect(DSN, DB_USER, DB_PASSWORD);
if (!$link) {
    die('接続失敗です。'.mysql_error());
}
$db_selected = mysql_select_db(DB_NAME, $link);
mysql_set_charset('utf8');

//インサートを判別するフラグを作成。
$insert_flg = true;


/* ここで今の件数を確認するSQLをながす。*/
$sql = "select stock_num from books where  isbn = '". $_POST['isbn']. "'";
$result = mysql_query($sql);
while ($row = mysql_fetch_assoc($result)) {
    $insert_flg = false;
}


$isbn = $_POST['isbn'];
$title  =  $_POST['title'];
$authors = $_POST['authors'];
$publisher = $_POST['publisher'];
$publication_date = $_POST['publication_date'];
$image_url = $_POST['image_url'];
$detail_page_url = $_POST['detail_page_url'];
$nowTime = date('Y-m-d H:i:s');

if($publication_date == ""){
  $publication_date = '2016/1/1';
}

if ($insert_flg){
    $sql = <<< SQLINSERT
    INSERT INTO books(`id`, `isbn`, `title`, `author`, `publisher`, `publication_date`, `image_url`, `detail_page_url`, `stock_num`, `lend_num`,  `other_num`, `created`, `modified`)
    VALUES (null, '$isbn', '$title', '$authors', '$publisher', '$publication_date', '$image_url', '$detail_page_url', 1, 0, 0, '$nowTime', '$nowTime');
SQLINSERT;

    //$sql = "INSERT INTO books (`id`, `isbn`, `title`, `author`, `publisher`, `publication_date`, `image_url`, `detail_page_url`, `stock_num`, `lend_num`,  `other_num`, `created`, `modified`)
    // VALUES ('', '\" . $_POST['isbn'] . \"', '\" . $_POST['title'] . \"', '\". $_POST['authors'] . \"', '\". $_POST['publisher'] . \"', '\". $_POST['publication_date'] . \"', '\". $_POST['image_url'] . \"', '\". $_POST['detail_page_url'] . \"', 1, 0, 0, '\". date('Y-m-d H:i:s') .\"', '\". date('Y-m-d H:i:s') .\"')\";";

print $sql;

}
else{
    $sql = <<< SQLUPDATE
  UPDATE books set stock_num = stock_num+1 where isbn = $isbn;
SQLUPDATE;

$script = <<< SCRIPT
<script language='javascript' type='text/javascript'>

/* アラートで確認 */
window.alert('重複している為、更新します。');
window.opner=window;
</script>
SCRIPT;
print $script;

}

$result_flag = mysql_query($sql);
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

?>
