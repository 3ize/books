
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<p>ISBN����</p>
<script type="text/javascript">// <![CDATA[
$(function() {
  $('#btn150719').click(function() {
    var $this = $(this);
    $this.prop("disabled", true);

    var isbn = $('#txt150719').val();
    var url = "https://www.googleapis.com/books/v1/volumes?q=isbn:" + isbn.replace(/-/g, "");

    $('#title150719').text("");
    $('#author150719').text("");
    $('#publisher150719').text("");
    $('#releaseDate150719').text("");

    $.ajax({
      type: "get"
      , url: url
      , async: false
      , error: function(XMLHttpRequest, textStatus, errorThrown) {
        alert(errorThrown);
      }, success: function(data) {
        if (data.totalItems != 0) {
          var obj = data.items[0].volumeInfo;
          $('#title150719').text(obj.title);
          $('#author150719').text(obj.authors[0]);
          $('#publisher150719').text(obj.publisher);
          $('#releaseDate150719').text(obj.publishedDate);
        }
      }
    });

    setTimeout(function() {
      $this.prop("disabled", false);
    }, 5000);
  });
});
// ]]></script>
<p><input id="txt150719" size="" type="text" value="" /><input id="btn150719" type="button" value="����" /></p>
<div style="border: 1px solid #000;">
<img src="" id="imageLinks150719" />
<p>�^�C�g���F<span id="title150719" style="font-weight: bold;"> </span></p>
<p>���ҁF<span id="author150719" style="font-weight: bold;"> </span></p>
<p>�o�ŎЁF<span id="publisher150719" style="font-weight: bold;"> </span></p>
<p>�������F<span id="releaseDate150719" style="font-weight: bold;"> </span></p>
</div>
<p> </p>
<p></p>

<?php
/** searchBook.php
 * �y�V�u�b�N�XAPI���g���ď��Ђ���������(PHP4/5�Ή�)
 *
 * @copyright	(c)studio pahoo
 * @author		�p�p�ςӂ�
 * @�Q�lURL		http://www.pahoo.org/e-soul/webtech/php06/php06-27-01.shtm
 *
*/
// ���������� ================================================================
define('INTERNAL_ENCODING', 'UTF-8');
mb_internal_encoding(INTERNAL_ENCODING);
mb_regex_encoding(INTERNAL_ENCODING);
define('MYSELF', basename($_SERVER['SCRIPT_NAME']));
define('REFERENCE', 'http://www.pahoo.org/e-soul/webtech/php06/php06-27-01.shtm');

//�v���O�����E�^�C�g��
define('TITLE', '�y�V�u�b�N�XAPI���g�������Ќ���');

//�����[�X�E�t���O�i���J���ɂ�TRUE�ɂ��邱�Ɓj
define('FLAG_RELEASE', TRUE);

$applicationId = '1049326867407364125';		//�A�v��ID
$affiliateId   = '14c0e31e.8196c316.14c0e31f.08d300a1';	//�A�t�B���G�C�gID

/**
 * �y�V�u�b�N�XAPI�̏o�͗v�f��
 * @global	array $RakutenBooksItems
*/
$RakutenBooksItems = array(
'title',			//���Ѓ^�C�g��
'titleKana',		//���Ѓ^�C�g�� �J�i
'subTitle',		//���ЃT�u�^�C�g��
'subTitleKana',	//���ЃT�u�^�C�g�� �J�i
'seriesName',		//�p����
'seriesNameKana',	//�p�����J�i
'contents',		//���������^���e
'contentsKana',	//���������^���e�J�i
'author',			//���Җ�
'authorKana',		//���Җ��J�i
'publisherName',	//�o�ŎЖ�
'size',				//���Ђ̃T�C�Y
'isbn',				//ISBN�R�[�h(���ЃR�[�h)
'itemCaption',		//���i������
'salesDate',		//������
'itemPrice',		//�ō��ݔ̔����i
'listPrice',		//�艿
'discountRate',	//������
'discountPrice',	//�������i
'itemUrl',			//���iURL
'affiliateUrl',	//�A�t�B���G�C�gURL
'smallImageUrl',	//���i�摜 64x64URL
'mediumImageUrl',	//���i�摜 128x128URL
'largeImageUrl',	//���i�摜 200x200URL
'chirayomiUrl',	//�`�����URL
'availability',	//�݌ɏ�
'postageFlag',		//�����t���O
'limitedFlag',		//����t���O
'reviewCount',		//���r���[����
'reviewAverage',	//���r���[����
'booksGenreId'		//�y�V�u�b�N�X�W������ID
);

/**
 * ����HTML�w�b�_
 * @global string $HtmlHeader
*/
$encode = INTERNAL_ENCODING;
$title = TITLE;
$HtmlHeader =<<< EOD
<!DOCTYPE html>
<html>
<head>
<meta charset="{$encode}">
<title>{$title}</title>
<meta name="author" content="studio pahoo" />
<meta name="copyright" content="studio pahoo" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW" />
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('table.stripe_table_1').css('border-color', '#FFFFFF');
    $('table.stripe_table_1 th').css('background-color', '#FFBB00');
    $('table.stripe_table_1 th').css('text-align', 'center');
    $('table.stripe_table_1 th').css('padding', '4px');
    $('table.stripe_table_1 tr:even').css('background-color', '#FFDD88');
    $('table.stripe_table_1 tr:odd' ).css('background-color', '#FFFFFF');
    $('table.stripe_table_1 td').css('padding', '4px');
});
</script>
</head>

EOD;

/**
 * ����HTML�t�b�^
 * @global string $HtmlFooter
*/
$footer = '';
if (! FLAG_RELEASE) {
	$footer = "<p><b>���f�o�b�N���[�h�œ��쒆...</b><br />\n";
	$phpver = phpversion();
	if (! isphp5()) {
		$enable = 'DOM XML : ';
		$enable .= function_exists('domxml_open_mem') ? 'enabled' : 'disable';
	} else {
		$enable = 'SimpleXML : ';
		$enable .= function_exists('simplexml_load_file') ? 'enabled' : 'disable';
	}
	$footer =<<< EOD
<br/>
PHPver : $phpver<br />
$enable<br />

EOD;
}
$HtmlFooter =<<< EOD
{$footer}
</body>
</html>

EOD;

// �T�u���[�`�� ==============================================================
/**
 * �G���[�����n���h��
*/
function myErrorHandler ($errno, $errmsg, $filename, $linenum, $vars) {
	echo "Sory, system error occured !";
	exit(1);
}
error_reporting(E_ALL);
if (FLAG_RELEASE)	$old_error_handler = set_error_handler('myErrorHandler');

/**
 * PHP5���ǂ�����������
 * @return	bool TRUE:PHP5�ł���^FALSE:����ȊO�̃o�[�W����
*/
function isphp5() {
	return preg_match('/^5/', phpversion()) == 0 ? FALSE : TRUE;
}

/**
 * �w�肵���p�����[�^�����o��
 * @param	string $key  �p�����[�^���i�ȗ��s�j
 * @param	bool   $auto TRUE�������R�[�h�ϊ�����^FALSE���Ȃ��i�ȗ����FTRUE�j
 * @param	mixed  $def  �����l�i�ȗ����F�󕶎��j
 * @return	string �p�����[�^�^NULL���p�����[�^����
*/
function getParam($key, $auto=TRUE, $def='') {
	if (isset($_GET[$key]))			$param = $_GET[$key];
	else if (isset($_POST[$key]))	$param = $_POST[$key];
	else							$param = $def;
	if ($auto)	$param = mb_convert_encoding($param, INTERNAL_ENCODING, 'auto');
	return $param;
}

/**
 * �`�F�b�N�f�W�b�g�̌v�Z�i���W�����X11 �E�F�C�g10-2�j
 * @param	string $code �v�Z����R�[�h�i�ŉ��ʌ����`�F�b�N�f�W�b�g�j
 * @return	int �`�F�b�N�f�W�b�g
*/
function cd11($code) {
	$cd = 0;
	for ($pos = 10; $pos >= 2; $pos--) {
		$n = substr($code, (10 - $pos), 1);
		$cd += $n * $pos;
	}
	$cd = $cd % 11;
	$cd = 11 - $cd;

	return $cd;
}

/**
 * �`�F�b�N�f�W�b�g�̌v�Z�i���W�����X10 �E�F�C�g3�j
 * @param	string $code �v�Z����R�[�h�i�ŉ��ʌ����`�F�b�N�f�W�b�g�j
 * @return	int �`�F�b�N�f�W�b�g
*/
function cd10($code) {
	$cd = 0;
	for ($pos = 13; $pos >= 2; $pos--) {
		$n = substr($code, (13 - $pos), 1);
		$cd += $n * (($pos % 2) == 0 ? 3 : 1);
	}
	$cd = $cd % 10;
	return ($cd == 0) ? 0 : 10 - $cd;
}

/**
 * ISBN�R�[�h��ASIN�R�[�h�ɕϊ�����
 * @param	string $isbn ISBN�R�[�h�i10�i��10�� or 13���j
 * @return	string ASIN�R�[�h�i10�i��10���j�^FALSE�F�ϊ��Ɏ��s
*/
function isbn2asin($isbn) {
	//��ISBN�R�[�h�̏ꍇ�͂��̂܂ܕԂ�
	if (preg_match('/^[0-9]{10}$/', $isbn) == 1) {
		if (cd11($isbn) != substr($isbn, 9, 1))		return FALSE;
		return $isbn;
	}

	//���͒l�`�F�b�N
	if (preg_match('/^[0-9]{13}$/', $isbn) != 1)	return FALSE;
	if (cd10($isbn) != substr($isbn, 12, 1))		return FALSE;
	if (preg_match('/^978/', $isbn) == 0)			return FALSE;

	$code = substr($isbn, 3, 10);		//10-1���ڂ����o��
	$cd = cd11($code);

	return substr($isbn, 3, 9) . $cd;
}

/**
 * �y�V�u�b�N�XAPI��URL���擾����
 * @param	string $query ISBN�ԍ��܂��͏���
 * @param	string $author ���Җ�
 * @return	string URL
*/
function getBookURL($query, $author) {
	global $applicationId, $affiliateId;

	if (preg_match('/^[0-9]+$/', $query) > 0) {		//ISBN�ԍ�
		$query = '&isbn=' . $query;
	} else if ($query != '') {						//����
		$query = preg_replace("/�[/ui", '-', $query);
		$query = '&title=' . urlencode($query);
	} else {
		$query = '';
	}
	if ($author != '')	$author = '&author=' . urlencode($author);

	$res = "https://app.rakuten.co.jp/services/api/BooksBook/Search/20130522?applicationId={$applicationId}&affiliateId={$affiliateId}&format=xml&{$query}{$author}";

	return $res;
}

/**
 * �y�V�u�b�N�XAPI���珑�Џ������o���iXML�`���j
 * @param	string $url ���X�N�G�X�gURL
 * @return	string ���Џ��^FALSE=���s
*/
function getBookInfo($url) {
	$ch = curl_init($url);
//	curl_setopt($ch, CURLOPT_SSLVERSION, 3);		//SSLv3�Ǝ㐫�Ή�
	curl_setopt($ch, CURLOPT_HEADER, FALSE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); //�T�[�o�ؖ������؂��X�L�b�v
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); //�@�@�V
	$result = curl_exec($ch);
	curl_close($ch);

	return $result;
}

/**
 * �y�V�u�b�N�XAPI����K�v�ȏ���z��Ɋi�[����
 * @param	string $query ISBN�ԍ��܂��͏���
 * @param	string $author ���Җ�
 * @param	array $items �����i�[����z��
 * @return	�q�b�g���������^FALSE�F�����Ɏ��s
*/
function getBook($query, $author, &$items) {
	global $RakutenBooksItems;

	$url = getBookURL($query, $author);
	if (($res = getBookInfo($url)) == FALSE)	return FALSE;

//PHP4�p; DOM XML���p
	if (isphp5() == FALSE) {
		if (($dom = domxml_open_mem($res)) == NULL)	return FALSE;
		$root = $dom->get_elements_by_tagname('root');

		//���X�|���X�E�`�F�b�N
		$count = $root[0]->get_elements_by_tagname('count');
		$cnt = $count[0]->get_content();
		if ($cnt <= 0)		return FALSE;		//�q�b�g����
		//���Џ���肾��
		$obj = $root[0]->get_elements_by_tagname('Items');
		$obj = $obj[0]->get_elements_by_tagname('Item');
		$cnt = 1;
		foreach ($obj as $val) {
			foreach ($RakutenBooksItems as $name) {
				$node = $val->get_elements_by_tagname($name);
				if ($node != NULL) {
					$items[$cnt][$name] = $node[0]->get_content();
				}
			}
			$items[$cnt]['title'] = preg_replace("/([��-��|�A-��])-/ui", "$1�[", $items[$cnt]['title']);
			$items[$cnt]['titleKana'] = preg_replace("/([��-��|�A-��])-/ui", "$1�[", $items[$cnt]['titleKana']);
			$cnt++;
		}

//PHP5�p; SimpleXML���p
	} else {
		$xml = simplexml_load_string($res);
		//���X�|���X�E�`�F�b�N
		$count = (int)$xml->count;
		if ($count <= 0)	return FALSE;
		$obj = $xml->Items->Item;
		$cnt = 1;
		foreach ($obj as $node) {
			foreach ($RakutenBooksItems as $name) {
				if (isset($node->$name)) {
					$items[$cnt][$name] = (string)$node->$name;
				}
			}
			$items[$cnt]['asin'] = isbn2asin($items[$cnt]['isbn']);
			$items[$cnt]['title'] = preg_replace("/([��-��|�A-��])-/ui", "$1�[", $items[$cnt]['title']);
			$items[$cnt]['titleKana'] = preg_replace("/([��-��|�A-��])-/ui", "$1�[", $items[$cnt]['titleKana']);
			$cnt++;
		}
	}
	return $cnt - 1;
}

/**
 * �����N������yyyy-mm-dd�ɕ�����ϊ�����
 * @param	string $str �����N��
 * @return	string yyyy-mm-dd
*/
function salesdate2date($str) {
	if (preg_match('/([0-9]+)�N([0-9]+)��([0-9]+)��/iu', $str, $arr) > 0) {
		$res = $arr[1] . '-' . $arr[2] . '-' . $arr[3];
	} else if (preg_match('/([0-9]+)�N([0-9]+)��/iu', $str, $arr) > 0) {
		$res = $arr[1] . '-' . $arr[2] . '-01';
	} else {
		$res = '????-??-??';
	}
	return $res;
}

/**
 * �������ʈꗗ���쐬����
 * @param	string $isbn ISBN�R�[�h�܂��͏���
 * @param	string $author ���Җ�
 * @param	string $ndc NDC
 * @param	string $res ��������
 * @return	string HTML BODY
*/
function makeList($query, $author, $res) {
	$myself  = MYSELF;
	$refere  = REFERENCE;
	$title   = TITLE;
	$version = '<span style="font-size:small;">' . date('Y/m/d��', filemtime(__FILE__)) . '</span>';

	$body =<<< EOD
<body>
<h2>{$title} {$version}</h2>
<p>
<form name="MyForm" method="GET" action="{$myself}" enctype="multipart/form-data">
<table border="0" cellspacing="4">
<tr>
<td>�����܂���ISDN�R�[�h</td>
<td><input type="text" name="query" size="40" value="{$query}" /></td>
</tr>
<tr>
<td>���Җ�</td>
<td><input type="text" name="author" size="40" value="{$author}" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="exec" value="����" /></td>
</tr>
</table>
</form>
</p>

<div style="border-style:solid; border-width:1px; margin:20px 0px 0px 0px; padding:5px; width:400px; font-size:small;">
<h3>�g����</h3>
<ol>
<li>�m<span style="font-weight:bold;">�����܂���ISDN�R�[�h</span>�n�ɒT�������{�̏����܂���ISDN�R�[�h���͂��Ă��������B</li>
<li>�܂��́A�m<span style="font-weight:bold;">���Җ�</span>�n�ɒT���������҂���͂��Ă��������B</li>
<li>�m<span style="font-weight:bold;">����</span>�n �{�^���������Ă��������B</li>
<li>�������ʂ��ȉ��ɕ\������܂��B</li>
</ol>
���Q�l�T�C�g�F<a href="{$refere}">{$refere}</a>
</div>

{$res}
</body>

EOD;
	return $body;
}

// ���C���E�v���O���� ======================================================
$query  = '';
$author = '';
$msg = '';
$items = array();
$myself = MYSELF;

$date      = getParam('date', TRUE, '');
$title     = getParam('title', TRUE, '');
$linetext1 = getParam('linetext1', TRUE, '');
$linetext2 = getParam('linetext2', TRUE, '');
$xml       = getParam('xml', TRUE, '');

//�ꗗ�쐬
if (isset($_GET['exec'])) {
	$query = (isset($_GET['query'])) ? $_GET['query'] : '';
	$query = trim($query);
	$query = mb_convert_encoding($query, INTERNAL_ENCODING, 'auto');
	$query = htmlspecialchars($query);
	$author = (isset($_GET['author'])) ? $_GET['author'] : '';
	$author = trim($author);
	$author = mb_convert_encoding($author, INTERNAL_ENCODING, 'auto');
	$author = htmlspecialchars($author);

	if (getBook($query, $author, $items) == FALSE) {
		$HtmlBody = "�G���[ >> ���Ђ���������Ȃ����C�y�V�u�b�N�X�����T�[�r�X����~���Ă��܂��D";
	} else {
		//�������ʃ��X�g
		$msg =<<< EOD
<table class="stripe_table_1" style="width:660px;">
<tr>
<th style="width: 70px;">&nbsp;</th>
<th style="width:130px;">����</th>
<th style="width:100px;">����</th>
<th style="width:100px;">�o�Ŏ�</th>
<th style="width:120px;">���s��</th>
<th style="width: 60px;">���i<br />�i�ō��j</th>
<th style="width: 80px;">ISBN�R�[�h</th>
</tr>

EOD;
		foreach ($items as $val) {
			$price = number_format($val['itemPrice']) .'�~';
			$msg .=<<< EOD
<tr>
<td><img src="{$val['smallImageUrl']}" /></td>
<td>{$val['title']}</td>
<td>{$val['author']}</td>
<td>{$val['publisherName']}</td>
<td>{$val['salesDate']}</td>
<td style="text-align:right;">{$price}</td>
<td style="text-align:center;">{$val['isbn']}</td>
</tr>
<tr>
<td>&nbsp;</td>
<td colspan="6">{$val['itemCaption']}</td>
</tr>

EOD;
		}
		$msg .= "</table>\n";
		$HtmlBody = makeList($query, $author, $msg);
	}
} else {
	$HtmlBody = makeList($query, $author, $msg);
}

// �\������
echo $HtmlHeader;
echo $HtmlBody;
if (! FLAG_RELEASE) {
	$url = getBookURL($query, $author);
	echo <<< EOT
<br />
<a href="{$url}">{$url}</a>
EOT;
}
echo $HtmlFooter;

/*
** �o�[�W�����A�b�v���� ===================================================
 *
 * @version  2.02 2015/07/05  SSLv3�Ǝ㐫�Ή�
 * @version  2.01 2014/03/29  �ϐ����ύX
 * @version  2.0  2013/10/14  �y�V�u�b�N�X���Ќ���API (version:2013-05-22)�Ή�
 * @version  1.0  2010/05/14
*/
?>
