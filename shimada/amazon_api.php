<?php

//ini_set( 'display_errors', 1 );
// amazon設定
define("ACCESS_KEY_ID" , 'AKIAIWZMNE3G5OKW2YIA');
define("SECRET_ACCESS_KEY" , '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');

main();
function main()
{
  $transBtn = false;

  // https://images-na.ssl-images-amazon.com/images/G/09/associates/paapi/dg/index.html?CommonRequestParameters.html
  
  $isbn = $_GET['isbn'];
  
  $params = array(
                  'AssociateTag'        => 'associate',
                  'Operation'           => 'ItemLookup',
                  'IdType'              => 'ISBN',
                  'ItemId'              => $isbn, //'9784774153247', //ISBN
                  'SearchIndex'         => 'Books',
            //      'ResponseGroup'       => 'OfferSummary', //'OfferFull,ItemAttributes',
                  'ResponseGroup'       => 'ItemAttributes, Images ', //'OfferFull,ItemAttributes',                  
                  );
  $amazon = new Amazon($params);
  $url = $amazon->getAPIURL();
  //  この URL にアクセスすれば、API リクエストができます
 // echo $url . PHP_EOL;
  //echo file_get_contents($url);
  $amazon_xml=simplexml_load_string(@file_get_contents($url));
//  $json = json_encode($amazon_xml);
//  print_r($amazon_xml->Items);
 // print_r($json);
//  echo json_encode($amazon_xml, JSON_UNESCAPED_UNICODE);
/*
  var_dump(
  //  json_encode($amazon_xml),  
    json_encode($amazon_xml,JSON_UNESCAPED_UNICODE)
);
*/  
    // Amazonへのレスポンスが正常に行われていたら
    if ($url && 
        isset($amazon_xml) && 
        !$amazon_xml->faultstring &&
        !$amazon_xml->Items->Request->Errors) {
    
        foreach ($amazon_xml->Items->Item as $current) {
            // 2で設定したResponseGroupから呼び出したい情報を取得
            $title          = $current->ItemAttributes->Title; // タイトル
            $author         = $current->ItemAttributes->Author; // 著者
            $publisher   = $current->ItemAttributes->Publisher; // 出版社
            $publicationDate   = $current->ItemAttributes->PublicationDate; // 出版日
            $imgURL         = $current->MediumImage->URL; // 本の表紙の中サイズのURL(サイズは小中大から選べる)  
            $bookURL        = $current->DetailPageURL; // Amazonの本のページのURL
    
            // 管理しやすいように文字コードの宣言やスペースの削除等を行う
            $title = mb_convert_kana($title, "as", "UTF-8");
    
            $authors = $author[0];
            // 著者が複数いる場合
            if (count($author) > 1) {
                for ($i = 1; $i < count($author); $i++) {
                    $authors = $authors. ",". $author[$i];
                }
            }
            
            $publisher = mb_convert_kana($publisher, "as", "UTF-8");
            $publicationDate = mb_convert_kana($publicationDate, "as", "UTF-8");
            $publicationDate = str_replace("-","/",$publicationDate);

            $imgURL = mb_convert_kana($imgURL, "as", "UTF-8");
     //       $bookURL = mb_convert_kana($bookURL, "as", "UTF-8");
            
            // amazonへのURLを短縮(詳しくは下で)
            $URL = substr($bookURL, 0, 24). "dp/". substr($bookURL, -10);
        }
    }


print<<<EOF


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
<p>
<input type="text" placeholder="ISBNコードを入力して下さい" name="isbn" value="$isbn" size="40　"maxlength="13">
<input type="submit" value="送信" >
</p>
</form>


<div>
<a href="$URL"><img src="$imgURL"></a>
<p>書籍名：<span id="title150719" style="font-weight: bold;">$title</span></p>
<p>著者名：<span id="author150719" style="font-weight: bold;">$authors</span></p>
<p>出版社：<span id="publisher150719" style="font-weight: bold;">$publisher</span></p>
<p>発売日：<span id="releaseDate150719" style="font-weight: bold;">$publicationDate</span></p>
</div>
<p> </p>
<p></p>

EOF;
    if(!empty($_GET)) {
	if(!empty($title)) {
print<<<EOF
<form action="regist.php" method="post">
  <input type="hidden" name="isbn" value="$isbn">
  <input type="hidden" name="title" value="$title">
  <input type="hidden" name="authors" value="$authors">
  <input type="hidden" name="publisher" value="$publisher">
  <input type="hidden" name="publication_date" value="$publicationDate">
  <input type="hidden" name="image_url" value="$imgURL">
  <input type="hidden" name="detail_page_url" value="$URL">
  <input type="submit" value="登録" style="position: relative; left:20%; top: 0px; 
   width:100px;">
</form>
EOF;
         } else {
print<<<EOF
<script>	   
	   alert("ISBNに誤りがあるか一時的にデータが取得できませんでした。");
</script>
EOF;
         }
     }
}

class Amazon
{
  private $params = array(
                  'Service'             => 'AWSECommerceService',
                  'Version'             => '2013-08-01',
  );
  function __construct($params)
  {
    $this->params = array_merge($this->params,$params);
  }
  function getAPIURL()
  {
    $params = $this->params;
 // $params['AWSAccessKeyId'] = $_ENV["ACCESS_KEY"];
 // $secret_access_key = $_ENV["SECRET_KEY"];
  $params['AWSAccessKeyId'] = ACCESS_KEY_ID;
  $secret_access_key = SECRET_ACCESS_KEY;

  /*
    $params['Operation']      = 'ItemSearch'; // ← ItemSearch オペレーションの例
    $params['Keywords']       = 'もやし';     // ← 文字コードは UTF-8
  */
  // Timestamp パラメータを追加します
  // - 時間の表記は ISO8601 形式、タイムゾーンは UTC(GMT)
  $params['Timestamp'] = gmdate('Y-m-d\TH:i:s\Z');
  // パラメータの順序を昇順に並び替えます
  ksort($params);
  // canonical string を作成します
  $canonical_string = '';
  foreach ($params as $k => $v) {
    $canonical_string .= '&'.urlencode_rfc3986($k).'='.urlencode_rfc3986($v);
  }
  $canonical_string = substr($canonical_string, 1);
  // 署名を作成します
  // - 規定の文字列フォーマットを作成
  // - HMAC-SHA256 を計算
  // - BASE64 エンコード
  $baseurl = 'http://ecs.amazonaws.jp/onca/xml';
  $parsed_url = parse_url($baseurl);
  $string_to_sign = "GET\n{$parsed_url['host']}\n{$parsed_url['path']}\n{$canonical_string}";
  $signature = base64_encode(hash_hmac('sha256', $string_to_sign, $secret_access_key, true));
  // URL を作成します
  // - リクエストの末尾に署名を追加
  $url = $baseurl.'?'.$canonical_string.'&Signature='.urlencode_rfc3986($signature);
  return $url;
}
}
// RFC3986 形式で URL エンコードする関数
function urlencode_rfc3986($str)
{
  return str_replace('%7E', '~', rawurlencode($str));
}

function click() 
{
	die(var_dump($transBtn));
	$transBtn = true;
}

?>

