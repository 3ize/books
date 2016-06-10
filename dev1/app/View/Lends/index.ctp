<div class="lends index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('貸出状況'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">



		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th nowrap><?php echo $this->Paginator->sort('id'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('user_id'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('book_id'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('lend_period'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('return_flag'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('return_date'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('created'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('modified'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($lends as $lend): ?>
					<tr>
						<td nowrap><?php echo h($lend['Lend']['id']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($lend['User']['name'], array('controller' => 'users', 'action' => 'view', $lend['User']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($lend['Book']['title'], array('controller' => 'books', 'action' => 'view', $lend['Book']['id'])); ?>
		</td>
						<td nowrap><?php echo h($lend['Lend']['lend_period']); ?>&nbsp;</td>
						<td nowrap><?php echo h($lend['Lend']['return_flag']); ?>&nbsp;</td>
						<td nowrap><?php echo h($lend['Lend']['return_date']); ?>&nbsp;</td>
						<td nowrap><?php echo h($lend['Lend']['created']); ?>&nbsp;</td>
						<td nowrap><?php echo h($lend['Lend']['modified']); ?>&nbsp;</td>
						<td class="actions">
<!--							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $lend['Lend']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $lend['Lend']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $lend['Lend']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $lend['Lend']['id'])); ?> -->
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