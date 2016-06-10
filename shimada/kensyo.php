<?php
// 内部エンコーディングとして UTF-8を使用 (php.iniで設定してもよい)
ini_set("mbstring.internal_encoding", "UTF-8");
// APIのルートとなる URL
define("API_URL", "http://localhost:8080/myproj");

// URLパラメータを APIに渡すパラメータとして再構成
$params = Array();
if (isset($_GET["name"])) $params["name"] = $_GET["name"];

// curl(HTTPクライアントライブラリ)を使ってAPIを呼び出す
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL,
	    API_URL . "/greeting/hello?". http_build_query($params));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$res = curl_exec($curl);
$header = curl_getinfo($curl);
// APIのHTTPコードをチェック
$code = $header["http_code"];
if ($code >= 400) { // もしエラーなら
  header("HTTP", true, $code);
  echo $res;   // APIのエラー表示をそのままブラウザへ返す(開発作業中はそうしておくと便利)
  exit();
}
// else (エラーでなければ)
$data = json_decode($res, true); // APIの実行結果をJSONパーサでパースし $dataに格納
?><html>
  <body>
    <h1>ごあいさつ</h1>
    <p><?php echo htmlentities($data[0], ENT_QUOTES, mb_internal_encoding())?></p>
    <p>length = <?php echo $data[1]?></p>
  </body>
</html