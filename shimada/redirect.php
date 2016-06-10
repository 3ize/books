<?php

require_once('config.php');
require_once('functions.php');

session_start();

if (empty($_GET['code'])){
	// 認証前の処理
	
	// 認証ダイアログの作成
	// CSRF対策
	$_SESSION['state'] = sha1(uniqid(mt_rand(), true));
	
	$params = array(
	    'client_id' => CLIENT_ID,
	    'redirect_uri' => SITE_URL.'redirect.php',
		'state' => $_SESSION['state'],
		'approval_prompt' => 'force',
		'scope' => 'https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email',
		'respons_type' => 'code',
	);
	// Googleへ飛ばす
	$url = 'https://accounts.google.com/o/oauth2/auth?'.http_build_query($params);
	header('Location: '.$url);
	exit;
	
}else{
	
	// code
	
	// 認証後の処理
	// CSRF対策でstateのチェック
	if ($_SESSION['state'] != $_GET['state']){
		echo "不正な処理でした！";
		exit;
	}
	
	// access_tokenを取得
	$params = array(
	    'client_id' => CLIENT_ID,
		'client_secret' => CLIENT_SECRET,
	    'code' => $_GET['code'],
		'redirect_uri' => SITE_URL.'redirect.php',
		'grant_type' => 'authorization_code'
	);
	$url = 'https://accounts.google.com/o/oauth2/token';
	
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($params));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	
	$rs = curl_exec($curl);
	curl_close($curl);
	$json = json_decode($rs);
	
	var_dump($json);exit;
	
	// ユーザー情報
	
	// DBを格納
	
	// ログイン処理

	// ホーム画面へ飛ばす
}