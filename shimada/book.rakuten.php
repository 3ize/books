
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<p>ISBN入力</p>
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
<p><input id="txt150719" size="" type="text" value="" /><input id="btn150719" type="button" value="検索" /></p>
<div style="border: 1px solid #000;">
<img src="" id="imageLinks150719" />
<p>タイトル：<span id="title150719" style="font-weight: bold;"> </span></p>
<p>著者：<span id="author150719" style="font-weight: bold;"> </span></p>
<p>出版社：<span id="publisher150719" style="font-weight: bold;"> </span></p>
<p>発売日：<span id="releaseDate150719" style="font-weight: bold;"> </span></p>
</div>
<p> </p>
<p></p>

<?php
/** searchBook.php
 * 楽天ブックスAPIを使って書籍を検索する(PHP4/5対応)
 *
 * @copyright	(c)studio pahoo
 * @author		パパぱふぅ
 * @参考URL		http://www.pahoo.org/e-soul/webtech/php06/php06-27-01.shtm
 *
*/
// 初期化処理 ================================================================
define('INTERNAL_ENCODING', 'UTF-8');
mb_internal_encoding(INTERNAL_ENCODING);
mb_regex_encoding(INTERNAL_ENCODING);
define('MYSELF', basename($_SERVER['SCRIPT_NAME']));
define('REFERENCE', 'http://www.pahoo.org/e-soul/webtech/php06/php06-27-01.shtm');

//プログラム・タイトル
define('TITLE', '楽天ブックスAPIを使った書籍検索');

//リリース・フラグ（公開時にはTRUEにすること）
define('FLAG_RELEASE', TRUE);

$applicationId = '1049326867407364125';		//アプリID
$affiliateId   = '14c0e31e.8196c316.14c0e31f.08d300a1';	//アフィリエイトID

/**
 * 楽天ブックスAPIの出力要素名
 * @global	array $RakutenBooksItems
*/
$RakutenBooksItems = array(
'title',			//書籍タイトル
'titleKana',		//書籍タイトル カナ
'subTitle',		//書籍サブタイトル
'subTitleKana',	//書籍サブタイトル カナ
'seriesName',		//叢書名
'seriesNameKana',	//叢書名カナ
'contents',		//多巻物収録内容
'contentsKana',	//多巻物収録内容カナ
'author',			//著者名
'authorKana',		//著者名カナ
'publisherName',	//出版社名
'size',				//書籍のサイズ
'isbn',				//ISBNコード(書籍コード)
'itemCaption',		//商品説明文
'salesDate',		//発売日
'itemPrice',		//税込み販売価格
'listPrice',		//定価
'discountRate',	//割引率
'discountPrice',	//割引価格
'itemUrl',			//商品URL
'affiliateUrl',	//アフィリエイトURL
'smallImageUrl',	//商品画像 64x64URL
'mediumImageUrl',	//商品画像 128x128URL
'largeImageUrl',	//商品画像 200x200URL
'chirayomiUrl',	//チラよみURL
'availability',	//在庫状況
'postageFlag',		//送料フラグ
'limitedFlag',		//限定フラグ
'reviewCount',		//レビュー件数
'reviewAverage',	//レビュー平均
'booksGenreId'		//楽天ブックスジャンルID
);

/**
 * 共通HTMLヘッダ
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
 * 共通HTMLフッタ
 * @global string $HtmlFooter
*/
$footer = '';
if (! FLAG_RELEASE) {
	$footer = "<p><b>★デバックモードで動作中...</b><br />\n";
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

// サブルーチン ==============================================================
/**
 * エラー処理ハンドラ
*/
function myErrorHandler ($errno, $errmsg, $filename, $linenum, $vars) {
	echo "Sory, system error occured !";
	exit(1);
}
error_reporting(E_ALL);
if (FLAG_RELEASE)	$old_error_handler = set_error_handler('myErrorHandler');

/**
 * PHP5かどうか検査する
 * @return	bool TRUE:PHP5である／FALSE:それ以外のバージョン
*/
function isphp5() {
	return preg_match('/^5/', phpversion()) == 0 ? FALSE : TRUE;
}

/**
 * 指定したパラメータを取り出す
 * @param	string $key  パラメータ名（省略不可）
 * @param	bool   $auto TRUE＝自動コード変換あり／FALSE＝なし（省略時：TRUE）
 * @param	mixed  $def  初期値（省略時：空文字）
 * @return	string パラメータ／NULL＝パラメータ無し
*/
function getParam($key, $auto=TRUE, $def='') {
	if (isset($_GET[$key]))			$param = $_GET[$key];
	else if (isset($_POST[$key]))	$param = $_POST[$key];
	else							$param = $def;
	if ($auto)	$param = mb_convert_encoding($param, INTERNAL_ENCODING, 'auto');
	return $param;
}

/**
 * チェックデジットの計算（モジュラス11 ウェイト10-2）
 * @param	string $code 計算するコード（最下位桁がチェックデジット）
 * @return	int チェックデジット
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
 * チェックデジットの計算（モジュラス10 ウェイト3）
 * @param	string $code 計算するコード（最下位桁がチェックデジット）
 * @return	int チェックデジット
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
 * ISBNコードをASINコードに変換する
 * @param	string $isbn ISBNコード（10進数10桁 or 13桁）
 * @return	string ASINコード（10進数10桁）／FALSE：変換に失敗
*/
function isbn2asin($isbn) {
	//旧ISBNコードの場合はそのまま返す
	if (preg_match('/^[0-9]{10}$/', $isbn) == 1) {
		if (cd11($isbn) != substr($isbn, 9, 1))		return FALSE;
		return $isbn;
	}

	//入力値チェック
	if (preg_match('/^[0-9]{13}$/', $isbn) != 1)	return FALSE;
	if (cd10($isbn) != substr($isbn, 12, 1))		return FALSE;
	if (preg_match('/^978/', $isbn) == 0)			return FALSE;

	$code = substr($isbn, 3, 10);		//10-1桁目を取り出す
	$cd = cd11($code);

	return substr($isbn, 3, 9) . $cd;
}

/**
 * 楽天ブックスAPIのURLを取得する
 * @param	string $query ISBN番号または書名
 * @param	string $author 著者名
 * @return	string URL
*/
function getBookURL($query, $author) {
	global $applicationId, $affiliateId;

	if (preg_match('/^[0-9]+$/', $query) > 0) {		//ISBN番号
		$query = '&isbn=' . $query;
	} else if ($query != '') {						//書名
		$query = preg_replace("/ー/ui", '-', $query);
		$query = '&title=' . urlencode($query);
	} else {
		$query = '';
	}
	if ($author != '')	$author = '&author=' . urlencode($author);

	$res = "https://app.rakuten.co.jp/services/api/BooksBook/Search/20130522?applicationId={$applicationId}&affiliateId={$affiliateId}&format=xml&{$query}{$author}";

	return $res;
}

/**
 * 楽天ブックスAPIから書籍情報を取り出す（XML形式）
 * @param	string $url リスクエストURL
 * @return	string 書籍情報／FALSE=失敗
*/
function getBookInfo($url) {
	$ch = curl_init($url);
//	curl_setopt($ch, CURLOPT_SSLVERSION, 3);		//SSLv3脆弱性対応
	curl_setopt($ch, CURLOPT_HEADER, FALSE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); //サーバ証明書検証をスキップ
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); //　　〃
	$result = curl_exec($ch);
	curl_close($ch);

	return $result;
}

/**
 * 楽天ブックスAPIから必要な情報を配列に格納する
 * @param	string $query ISBN番号または書名
 * @param	string $author 著者名
 * @param	array $items 情報を格納する配列
 * @return	ヒットした件数／FALSE：検索に失敗
*/
function getBook($query, $author, &$items) {
	global $RakutenBooksItems;

	$url = getBookURL($query, $author);
	if (($res = getBookInfo($url)) == FALSE)	return FALSE;

//PHP4用; DOM XML利用
	if (isphp5() == FALSE) {
		if (($dom = domxml_open_mem($res)) == NULL)	return FALSE;
		$root = $dom->get_elements_by_tagname('root');

		//レスポンス・チェック
		$count = $root[0]->get_elements_by_tagname('count');
		$cnt = $count[0]->get_content();
		if ($cnt <= 0)		return FALSE;		//ヒットせず
		//書籍情報取りだし
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
			$items[$cnt]['title'] = preg_replace("/([あ-ん|ア-ン])-/ui", "$1ー", $items[$cnt]['title']);
			$items[$cnt]['titleKana'] = preg_replace("/([あ-ん|ア-ン])-/ui", "$1ー", $items[$cnt]['titleKana']);
			$cnt++;
		}

//PHP5用; SimpleXML利用
	} else {
		$xml = simplexml_load_string($res);
		//レスポンス・チェック
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
			$items[$cnt]['title'] = preg_replace("/([あ-ん|ア-ン])-/ui", "$1ー", $items[$cnt]['title']);
			$items[$cnt]['titleKana'] = preg_replace("/([あ-ん|ア-ン])-/ui", "$1ー", $items[$cnt]['titleKana']);
			$cnt++;
		}
	}
	return $cnt - 1;
}

/**
 * 発売年月からyyyy-mm-ddに文字列変換する
 * @param	string $str 発売年月
 * @return	string yyyy-mm-dd
*/
function salesdate2date($str) {
	if (preg_match('/([0-9]+)年([0-9]+)月([0-9]+)日/iu', $str, $arr) > 0) {
		$res = $arr[1] . '-' . $arr[2] . '-' . $arr[3];
	} else if (preg_match('/([0-9]+)年([0-9]+)月/iu', $str, $arr) > 0) {
		$res = $arr[1] . '-' . $arr[2] . '-01';
	} else {
		$res = '????-??-??';
	}
	return $res;
}

/**
 * 検索結果一覧を作成する
 * @param	string $isbn ISBNコードまたは書名
 * @param	string $author 著者名
 * @param	string $ndc NDC
 * @param	string $res 処理結果
 * @return	string HTML BODY
*/
function makeList($query, $author, $res) {
	$myself  = MYSELF;
	$refere  = REFERENCE;
	$title   = TITLE;
	$version = '<span style="font-size:small;">' . date('Y/m/d版', filemtime(__FILE__)) . '</span>';

	$body =<<< EOD
<body>
<h2>{$title} {$version}</h2>
<p>
<form name="MyForm" method="GET" action="{$myself}" enctype="multipart/form-data">
<table border="0" cellspacing="4">
<tr>
<td>書名またはISDNコード</td>
<td><input type="text" name="query" size="40" value="{$query}" /></td>
</tr>
<tr>
<td>著者名</td>
<td><input type="text" name="author" size="40" value="{$author}" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="exec" value="検索" /></td>
</tr>
</table>
</form>
</p>

<div style="border-style:solid; border-width:1px; margin:20px 0px 0px 0px; padding:5px; width:400px; font-size:small;">
<h3>使い方</h3>
<ol>
<li>［<span style="font-weight:bold;">書名またはISDNコード</span>］に探したい本の書名またはISDNコード入力してください。</li>
<li>または、［<span style="font-weight:bold;">著者名</span>］に探したい著者を入力してください。</li>
<li>［<span style="font-weight:bold;">検索</span>］ ボタンを押してください。</li>
<li>検索結果が以下に表示されます。</li>
</ol>
※参考サイト：<a href="{$refere}">{$refere}</a>
</div>

{$res}
</body>

EOD;
	return $body;
}

// メイン・プログラム ======================================================
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

//一覧作成
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
		$HtmlBody = "エラー >> 書籍が見当たらないか，楽天ブックス検索サービスが停止しています．";
	} else {
		//検索結果リスト
		$msg =<<< EOD
<table class="stripe_table_1" style="width:660px;">
<tr>
<th style="width: 70px;">&nbsp;</th>
<th style="width:130px;">書名</th>
<th style="width:100px;">著者</th>
<th style="width:100px;">出版社</th>
<th style="width:120px;">発行日</th>
<th style="width: 60px;">価格<br />（税込）</th>
<th style="width: 80px;">ISBNコード</th>
</tr>

EOD;
		foreach ($items as $val) {
			$price = number_format($val['itemPrice']) .'円';
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

// 表示処理
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
** バージョンアップ履歴 ===================================================
 *
 * @version  2.02 2015/07/05  SSLv3脆弱性対応
 * @version  2.01 2014/03/29  変数名変更
 * @version  2.0  2013/10/14  楽天ブックス書籍検索API (version:2013-05-22)対応
 * @version  1.0  2010/05/14
*/
?>
