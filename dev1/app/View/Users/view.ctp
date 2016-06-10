<div class="users view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('User'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Account'); ?></th>
		<td>
			<?php echo h($user['User']['account']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Access Token'); ?></th>
		<td>
			<?php echo h($user['User']['access_token']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Role'); ?></th>
		<td>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($user['User']['modified']); ?>
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
	<?php if (!empty($user['Lend'])): ?>
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

	</tr>
	<thead>
	<tbody>
	<?php foreach ($user['Lend'] as $lend): ?>
		<tr>
			<td><?php echo $lend['id']; ?></td>
			<td><?php echo $lend['user_id']; ?></td>
			<td><?php echo $lend['book_id']; ?></td>
			<td><?php echo $lend['lend_period']; ?></td>
			<td><?php echo $lend['return_flag']; ?></td>
			<td><?php echo $lend['return_date']; ?></td>
			<td><?php echo $lend['created']; ?></td>
			<td><?php echo $lend['modified']; ?></td>

		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	</div><!-- end col md 12 -->
</div>
