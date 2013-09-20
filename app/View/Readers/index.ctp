<div class="readers index">
	<h2><?php echo __('Readers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('cardBarcode'); ?></th>
			<th><?php echo $this->Paginator->sort('dateCreated'); ?></th>
			<th><?php echo $this->Paginator->sort('dateExpiry'); ?></th>
			<th><?php echo $this->Paginator->sort('yearLearn'); ?></th>
			<th><?php echo $this->Paginator->sort('isActive'); ?></th>
			<th><?php echo $this->Paginator->sort('totalBorrow'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('department_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($readers as $reader): ?>
	<tr>
		<td><?php echo h($reader['Reader']['cardBarcode']); ?>&nbsp;</td>
		<td><?php echo h($reader['Reader']['dateCreated']); ?>&nbsp;</td>
		<td><?php echo h($reader['Reader']['dateExpiry']); ?>&nbsp;</td>
		<td><?php echo h($reader['Reader']['yearLearn']); ?>&nbsp;</td>
		<td><?php echo h($reader['Reader']['isActive']); ?>&nbsp;</td>
		<td><?php echo h($reader['Reader']['totalBorrow']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($reader['User']['id'], array('controller' => 'users', 'action' => 'view', $reader['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($reader['Department']['id'], array('controller' => 'departments', 'action' => 'view', $reader['Department']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $reader['Reader']['cardBarcode'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $reader['Reader']['cardBarcode'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $reader['Reader']['cardBarcode']), null, __('Are you sure you want to delete # %s?', $reader['Reader']['cardBarcode'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Reader'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
	</ul>
</div>
