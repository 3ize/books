<?php
// �����G���R�[�f�B���O�Ƃ��� UTF-8���g�p (php.ini�Őݒ肵�Ă��悢)
ini_set("mbstring.internal_encoding", "UTF-8");
// API�̃��[�g�ƂȂ� URL
define("API_URL", "http://localhost:8080/myproj");

// URL�p�����[�^�� API�ɓn���p�����[�^�Ƃ��čč\��
$params = Array();
if (isset($_GET["name"])) $params["name"] = $_GET["name"];

// curl(HTTP�N���C�A���g���C�u����)���g����API���Ăяo��
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL,
	    API_URL . "/greeting/hello?". http_build_query($params));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$res = curl_exec($curl);
$header = curl_getinfo($curl);
// API��HTTP�R�[�h���`�F�b�N
$code = $header["http_code"];
if ($code >= 400) { // �����G���[�Ȃ�
  header("HTTP", true, $code);
  echo $res;   // API�̃G���[�\�������̂܂܃u���E�U�֕Ԃ�(�J����ƒ��͂������Ă����ƕ֗�)
  exit();
}
// else (�G���[�łȂ����)
$data = json_decode($res, true); // API�̎��s���ʂ�JSON�p�[�T�Ńp�[�X�� $data�Ɋi�[
?><html>
  <body>
    <h1>����������</h1>
    <p><?php echo htmlentities($data[0], ENT_QUOTES, mb_internal_encoding())?></p>
    <p>length = <?php echo $data[1]?></p>
  </body>
</html