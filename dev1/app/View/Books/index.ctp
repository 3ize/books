<div class="books index">


	<div class="row">
	
		<div class="col-lg-4">
			<p><a class="btn btn-primary" href="javascript:void(0);" onclick="window.open('http://books.test.jp/shimada/amazon_api.php', '', 'width=640,height=640,top=100,left=300');">新規登録</a>　　　　<a class="btn btn-primary" href="javascript:void(0)"  onclick="scanJAN()">バーコードスキャン</a></p>
			<div id='status'> </div>
		</div>

		
		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th nowrap><?php echo $this->Paginator->sort(''); ?></th>
<!--						<th nowrap><?php echo $this->Paginator->sort('id'); ?></th> -->
	<!--					<th nowrap><?php echo $this->Paginator->sort('isbn','ISBNコード'); ?></th> -->
						<th nowrap><?php echo $this->Paginator->sort('title','書籍名'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('author','著者名'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('publisher','出版社'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('publication_date','発売日'); ?></th>
				<!--		<th nowrap><?php echo $this->Paginator->sort('detail_page_url'); ?></th> -->
						<th nowrap><?php echo $this->Paginator->sort('stock_num','在庫数'); ?></th>
			<!--			<th nowrap><?php echo $this->Paginator->sort('lend_num'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('other_num'); ?></th> -->
						<th nowrap><?php echo $this->Paginator->sort('created','登録日時'); ?></th>
		<!--				<th nowrap><?php echo $this->Paginator->sort('modified'); ?></th> -->
						<th class="actions">　　　　</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($books as $book) {
				      if (!empty($book['Book']['id']) &&
					!empty($book['Book']['isbn']) &&
					!empty($book['Book']['title']) &&
					!empty($book['Book']['author']) &&
					!empty($book['Book']['publisher']) &&
					!empty($book['Book']['publication_date']) &&
					!empty($book['Book']['image_url']) &&
					!empty($book['Book']['detail_page_url'])) { 
				?>
					
					<tr>
						<td nowrap>
<?php echo $this->Html->image($book['Book']['image_url'],array('url'=>$book['Book']['detail_page_url'],'width'=>'23','height'=>'30'));?>
&nbsp;</td>
	<!--					<td nowrap><?php echo h($book['Book']['id']); ?>&nbsp;</td> -->
	<!--					<td nowrap><?php echo h($book['Book']['isbn']); ?>&nbsp;</td> -->
						<td nowrap><?php echo h($book['Book']['title']); ?>&nbsp;</td>
						<td nowrap><?php echo h($book['Book']['author']); ?>&nbsp;</td>
						<td nowrap><?php echo h($book['Book']['publisher']); ?>&nbsp;</td>
						<td nowrap><?php echo h($book['Book']['publication_date']); ?>&nbsp;</td>
<!--						<td nowrap><?php echo h($book['Book']['image_url']); ?>&nbsp;</td>
						<td nowrap><?php echo h($book['Book']['detail_page_url']); ?>&nbsp;</td> -->
						<td nowrap><?php echo h($book['Book']['stock_num']); ?>&nbsp;</td>
	<!--					<td nowrap><?php echo h($book['Book']['lend_num']); ?>&nbsp;</td>
						<td nowrap><?php echo h($book['Book']['other_num']); ?>&nbsp;</td> -->
						<td nowrap><?php echo $this->Time->format($book['Book']['created'], '%Y/%m/%d %H:%M'); ?>&nbsp;</td>
	<!--					<td nowrap><?php echo h($book['Book']['modified']); ?>&nbsp;</td> -->
						<td class="actions">
							<?php echo $this->Html->link('[貸出中]', array('action' => 'view', $book['Book']['id']), array('escape' => false)); ?>
						</td>
					</tr>
				<?php
				  }
				} ?>
				</tbody>
			</table>
			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('ページ {:page} / {:pages}, 全 {:count} 件')));?></small>
			</p>
<!--
			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>
-->
			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->


<script>

function scanJAN(){
    var s='pic2shop://scan?callback='+encodeURIComponent("http://books.test.jp/shimada/amazon_api.php"+'?isbn=EAN')
    if(navigator.userAgent.indexOf('Android') > 0){
        //couldn't use location.origin
        s='http://zxing.appspot.com/scan?ret='
        s+=encodeURIComponent('http://books.test.jp/shimada/amazon_api.php?isbn={CODE}')
        s+='&SCAN_FORMATS=QRCODE,UPC_A,EAN_13,EAN_8'
    }else if(navigator.userAgent.indexOf('iPad') > 0||navigator.userAgent.indexOf('iPhone') > 0){

    }else{
        $('#status').text('バーコードスキャンはスマホのみ対応します')
    }

    document.location=s
}

</script>
