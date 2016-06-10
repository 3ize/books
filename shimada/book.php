
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<p>書籍登録画面</p>
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

<p><input id="txt150719" size="" type="text" placeholder="ISBNコードを入力して下さい" value="" /><input id="btn150719" type="button" value="送信" /></p>
<div style="border: 1px solid #000;">
<img src="" id="imageLinks150719" />
<p>タイトル：<span id="title150719" style="font-weight: bold;"> </span></p>
<p>著者：<span id="author150719" style="font-weight: bold;"> </span></p>
<p>出版社：<span id="publisher150719" style="font-weight: bold;"> </span></p>
<p>発売日：<span id="releaseDate150719" style="font-weight: bold;"> </span></p>
</div>
<p> </p>
<p></p>

<p><input id="btn150719" type="button" value="登録する" /></p>
<input type="submit" value="登録する">

<script type="text/javascript">
if(){
print "登録完了しました。\n";
}
else{
	// <![CDATA[
function yesno(){
if(window.confirm("既に登録されています。数を追加します。宜しいですか？"))
	location.href = ".html";
print "既に登録されています。数を+1します。\n";

// ]]>
}}
</script>
<a onclick="yesno(); return false;">確認</a>
<p>登録が完了しました。<br /><a href="index.html">戻る</a></p>
 //
 
 //
 
