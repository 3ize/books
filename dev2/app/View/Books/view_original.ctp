<div class="books view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Book'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo __('Actions'); ?></div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Book'), array('action' => 'edit', $book['Book']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Book'), array('action' => 'delete', $book['Book']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $book['Book']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Books'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Book'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Lends'), array('controller' => 'lends', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Lend'), array('controller' => 'lends', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($book['Book']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Isbn'); ?></th>
		<td>
			<?php echo h($book['Book']['isbn']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Title'); ?></th>
		<td>
			<?php echo h($book['Book']['title']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Author'); ?></th>
		<td>
			<?php echo h($book['Book']['author']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Publisher'); ?></th>
		<td>
			<?php echo h($book['Book']['publisher']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Publication Date'); ?></th>
		<td>
			<?php echo h($book['Book']['publication_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Image Url'); ?></th>
		<td>
			<?php echo h($book['Book']['image_url']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Detail Page Url'); ?></th>
		<td>
			<?php echo h($book['Book']['detail_page_url']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Stock Num'); ?></th>
		<td>
			<?php echo h($book['Book']['stock_num']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Lend Num'); ?></th>
		<td>
			<?php echo h($book['Book']['lend_num']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Other Num'); ?></th>
		<td>
			<?php echo h($book['Book']['other_num']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($book['Book']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($book['Book']['modified']); ?>
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
	<h3><?php echo __('Related Lends'); ?></h3>
	<?php if (!empty($book['Lend'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Book Id'); ?></th>
		<th><?php echo __('Lend Period'); ?></th>
		<th><?php echo __('Return Flag'); ?></th>
		<th><?php echo __('Return Date'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($book['Lend'] as $lend): ?>
		<tr>
			<td><?php echo $lend['id']; ?></td>
			<td><?php echo $lend['user_id']; ?></td>
			<td><?php echo $lend['book_id']; ?></td>
			<td><?php echo $lend['lend_period']; ?></td>
			<td><?php echo $lend['return_flag']; ?></td>
			<td><?php echo $lend['return_date']; ?></td>
			<td><?php echo $lend['created']; ?></td>
			<td><?php echo $lend['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'lends', 'action' => 'view', $lend['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'lends', 'action' => 'edit', $lend['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'lends', 'action' => 'delete', $lend['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $lend['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Lend'), array('controller' => 'lends', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
