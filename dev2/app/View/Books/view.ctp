<div class="books view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('書籍貸出情報'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('ID'); ?></th>
		<td>
			<?php echo h($book['Book']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('ISBN'); ?></th>
		<td>
			<?php echo h($book['Book']['isbn']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('書籍名'); ?></th>
		<td>
			<?php echo h($book['Book']['title']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('著者名'); ?></th>
		<td>
			<?php echo h($book['Book']['author']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('出版社'); ?></th>
		<td>
			<?php echo h($book['Book']['publisher']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('発売日'); ?></th>
		<td>
			<?php echo h($book['Book']['publication_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('在庫数'); ?></th>
		<td>
			<?php echo h($book['Book']['stock_num']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('貸出数'); ?></th>
		<td>
			<?php echo h($book['Book']['lend_num']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('登録日時'); ?></th>
		<td>
			<?php echo h($book['Book']['created']); ?>
			&nbsp;
		</td>
</tr>

				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('貸出状況'); ?></h3>
	<?php if (!empty($book['Lend'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
<!--		<th><?php echo __('Book Id'); ?></th> -->
		<th><?php echo __('返却期限'); ?></th>
		<th><?php echo __('返却状況'); ?></th>
		<th><?php echo __('返却日'); ?></th>
		<th><?php echo __('貸出日時'); ?></th>

	</tr>
	<thead>
	<tbody>
	<?php foreach ($book['Lend'] as $lend): ?>
		<tr>
			<td><?php echo $lend['id']; ?></td>
			<td><?php echo $lend['user_id']; ?></td>
<!--			<td><?php echo $lend['book_id']; ?></td> -->
			<td><?php echo $lend['lend_period']; ?></td>
			<td><?php echo $lend['return_flag']; ?></td>
			<td><?php echo $lend['return_date']; ?></td>
			<td><?php echo $lend['created']; ?></td>

		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	</div><!-- end col md 12 -->
</div>
