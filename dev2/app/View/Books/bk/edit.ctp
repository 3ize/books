<div class="books form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Book'); ?></h1>
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

																<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;'.__('Delete'), array('action' => 'delete', $this->Form->value('Book.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Book.id'))); ?></li>
																<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;'.__('List Books'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;'.__('List Lends'), array('controller' => 'lends', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('New Lend'), array('controller' => 'lends', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Book', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('isbn', array('class' => 'form-control', 'placeholder' => 'Isbn'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('title', array('class' => 'form-control', 'placeholder' => 'Title'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('author', array('class' => 'form-control', 'placeholder' => 'Author'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('publisher', array('class' => 'form-control', 'placeholder' => 'Publisher'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('publication_date', array('class' => 'form-control', 'placeholder' => 'Publication Date'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('image_url', array('class' => 'form-control', 'placeholder' => 'Image Url'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('detail_page_url', array('class' => 'form-control', 'placeholder' => 'Detail Page Url'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('stock_num', array('class' => 'form-control', 'placeholder' => 'Stock Num'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('lend_num', array('class' => 'form-control', 'placeholder' => 'Lend Num'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('other_num', array('class' => 'form-control', 'placeholder' => 'Other Num'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
