

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
    die('�ڑ����s�ł��B'.mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

/*
//MSQL
$link = mysql_connect('mysql106.phy.lolipop.lan', 'LAA0696374', 'test1234');
if (!$link) {
    die('�ڑ����s�ł��B'.mysql_error());
}

print('<p>�ڑ��ɐ������܂����B</p>');

$db_selected = mysql_select_db('LAA0696374-trilibrary1', $link);
if (!$db_selected){
    die('�f�[�^�x�[�X�I�����s�ł��B'.mysql_error());
}

print('<p>LAA0696374-trilibrary1�f�[�^�x�[�X��I�����܂����B</p>');
*/

mysql_set_charset('utf8');
/*
$result = mysql_query('SELECT `id`, `isbn`, `title`, `author`, `publisher`, `publication_date`, `image_url`, `detail_page_url`, `stock_num`, `lend_num`, `created`, `modified` FROM books');
if (!$result) {
    die('SELECT�N�G���[�����s���܂����B'.mysql_error());
}

while ($row = mysql_fetch_assoc($result)) {
    print('<p>');
    print('id='.$row['id']);
    print(',name='.$row['name']);
    print('</p>');
}

print('<p>�f�[�^��ǉ����܂��B</p>');
*/


/* �����ō��̌������m�F����SQL���Ȃ����A������A�R�����g�A�E�g�B*/
$sql = "select stock_num from books where  isbn = '". $_POST['isbn']. "'";
mysql_query($sql);
while ($row = mysql_fetch_assoc($result)) {
    print('<p>');
    print('stock_num='.$row['stock_num']);
    print('</p>');
}
exit;

//
////����������Ă���B
////�����ɃJ�E���g��0���ǂ����̏��������쐬����B
//$sql = `stock_num`;
//if ($sql == 0){
//
//// �������̌�����0�Ȃ牺�̃C���T�[�g�𗬂�(�V�K�o�^)
//$sql = "INSERT INTO books (`id`, `isbn`, `title`, `author`, `publisher`, `publication_date`, `image_url`, `detail_page_url`, `stock_num`, `lend_num`,  `other_num`, `created`, `modified`) VALUES ('', '\" . $_POST['isbn'] . \"', '\" . $_POST['title'] . \"', '\". $_POST['authors'] . \"', '\". $_POST['publisher'] . \"', '\". $_POST['publication_date'] . \"', '\". $_POST['image_url'] . \"', '\". $_POST['detail_page_url'] . \"', 1, 0, 0, '\". date('Y-m-d H:i:s') .\"', '\". date('Y-m-d H:i:s') .\"')\";";
//
//}
//// �������̌�����1���ȏ�Ȃ�񐔂��ЂƂ�����UPDATE��SQL�𗬂� (�X�V)
//else {
//$sql = "UPDATE books SET stock_num = stock_num + 1 where isbn = '". $_POST['isbn']. "'";
//
//}
$sql = "INSERT INTO books (`id`, `isbn`, `title`, `author`, `publisher`, `publication_date`, `image_url`, `detail_page_url`, `stock_num`, `lend_num`,  `other_num`, `created`, `modified`) VALUES ('', '\" . $_POST['isbn'] . \"', '\" . $_POST['title'] . \"', '\". $_POST['authors'] . \"', '\". $_POST['publisher'] . \"', '\". $_POST['publication_date'] . \"', '\". $_POST['image_url'] . \"', '\". $_POST['detail_page_url'] . \"', 1, 0, 0, '\". date('Y-m-d H:i:s') .\"', '\". date('Y-m-d H:i:s') .\"')\";";




$result_flag = mysql_query($sql);

/*
print('<p>�ǉ���̃f�[�^���擾���܂��B</p>');

$result = mysql_query('SELECT `id`, `isbn`, `title`, `author`, `publisher`, `publication_date`, `image_url`, `detail_page_url`, `stock_num`, `lend_num`, `other_num`, `created`, `modified` FROM books');
if (!$result) {
    die('SELECT�N�G���[�����s���܂����B'.mysql_error());
}

while ($row = mysql_fetch_assoc($result)) {
    print('<p>');
    print('id='.$row['id']);
    print(',name='.$row['name']);
    print('</p>');
}
*/


if (!$result_flag) {
    die('INSERT�N�G���[�����s���܂����B'.mysql_error());
}

$close_flag = mysql_close($link);


/* �q�A�h�L�������g�ŃX�N���v�g���� */
$script = <<< SCRIPT
<script language='javascript' type='text/javascript'>

/* �A���[�g�Ŋm�F */
window.alert('�o�^���������܂���');

/* ���݂̃E�B���h�E����� */
window.opner=window;
window.close();
</script>
SCRIPT;

print $script;

/*
if ($close_flag){
    print('<p>�ؒf�ɐ������܂����B</p>');
}

*/



/*
if ($sql =�@"select `isbn` from books where�@isbn");
�o�^�|�b�v�A�b�v
	$script = <<< SCRIPT
<script language='javascript' type='text/javascript'>

 �A���[�g�Ŋm�F 
window.alert('�o�^���܂�');
</script>
SCRIPT;
*/






<script type="text/javascript"> 
<!-- 
function check(){
	var flag = 0;
// �ݒ�J�n�i�K�{�ɂ��鍀�ڂ�ݒ肵�Ă��������j
	if(document.ISBN.field1.value == ""){ // �uISBN�R�[�h�v�̓��͂��`�F�b�N
		flag = 1;
	}
// �ݒ�I��
	if(flag){
		window.alert('�K�{���ڂɖ����͂�����܂���'); // ���͘R�ꂪ����Όx���_�C�A���O��\��
		return false; // ���M�𒆎~
	}
	else{
		return true; // ���M�����s
	}
}
// -->
</script>
<form method="GET" action="" name="ISBN" onSubmit="return check()">
<p>ISBN�R�[�h�F<br><input type="text" name="field1" size="40�@"maxlength="13"> �i�K�{�j</p>
<p><input type="submit" value="���M"></p>
</form>