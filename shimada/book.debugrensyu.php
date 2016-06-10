
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
<p></p>
<p></p>



<br>
--------------------------------------
<br>

<?php


define('DSN', 'mysql108.phy.lolipop.lan');
define('DB_USER', 'LAA0696374');
define('DB_PASSWORD', 'dotinstall');

$link = mysql_connect(DSN, DB_USER, DB_PASSWORD);
if (!$link) {
    die('接続失敗です。'.mysql_error());
}

$db_selected = mysql_select_db('LAA0696374-dotinstall', $link);
if (!$db_selected){
    die('データベース選択失敗です。'.mysql_error());
}

// MySQLに対するクエリの発行など

mysql_close($link);





?>