<div class="books index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Books'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo __('Actions'); ?></div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('New Book'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List'.__('Lends'), array('controller' => 'lends', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New'.__('Lend'), array('controller' => 'lends', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th nowrap><?php echo $this->Paginator->sort('id'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('isbn'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('title'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('author'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('publisher'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('publication_date'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('image_url'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('detail_page_url'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('stock_num'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('lend_num'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('other_num'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('created'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('modified'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($books as $book): ?>
					<tr>
						<td nowrap><?php echo h($book['Book']['id']); ?>&nbsp;</td>
						<td nowrap><?php echo h($book['Book']['isbn']); ?>&nbsp;</td>
						<td nowrap><?php echo h($book['Book']['title']); ?>&nbsp;</td>
						<td nowrap><?php echo h($book['Book']['author']); ?>&nbsp;</td>
						<td nowrap><?php echo h($book['Book']['publisher']); ?>&nbsp;</td>
						<td nowrap><?php echo h($book['Book']['publication_date']); ?>&nbsp;</td>
						<td nowrap><?php echo h($book['Book']['image_url']); ?>&nbsp;</td>
						<td nowrap><?php echo h($book['Book']['detail_page_url']); ?>&nbsp;</td>
						<td nowrap><?php echo h($book['Book']['stock_num']); ?>&nbsp;</td>
						<td nowrap><?php echo h($book['Book']['lend_num']); ?>&nbsp;</td>
						<td nowrap><?php echo h($book['Book']['other_num']); ?>&nbsp;</td>
						<td nowrap><?php echo h($book['Book']['created']); ?>&nbsp;</td>
						<td nowrap><?php echo h($book['Book']['modified']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $book['Book']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $book['Book']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $book['Book']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $book['Book']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

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