<div class="ciculations index">
	<h2><?php echo __('Ciculations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('date_return'); ?></th>
			<th><?php echo $this->Paginator->sort('librarian_name'); ?></th>
			<th><?php echo $this->Paginator->sort('extensions'); ?></th>
			<th><?php echo $this->Paginator->sort('reader'); ?></th>
			<th><?php echo $this->Paginator->sort('book_serial_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ciculations as $ciculation): ?>
	<tr>
		<td><?php echo h($ciculation['Ciculation']['id']); ?>&nbsp;</td>
		<td><?php echo h($ciculation['Ciculation']['created']); ?>&nbsp;</td>
		<td><?php echo h($ciculation['Ciculation']['date_return']); ?>&nbsp;</td>
		<td><?php echo h($ciculation['Ciculation']['librarian_name']); ?>&nbsp;</td>
		<td><?php echo h($ciculation['Ciculation']['extensions']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ciculation['Borrow']['id'], array('controller' => 'users', 'action' => 'view', $ciculation['Borrow']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ciculation['BookSerial']['id'], array('controller' => 'book_serials', 'action' => 'view', $ciculation['BookSerial']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ciculation['Ciculation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ciculation['Ciculation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ciculation['Ciculation']['id']), null, __('Are you sure you want to delete # %s?', $ciculation['Ciculation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ciculation'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Book Serials'), array('controller' => 'book_serials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Serial'), array('controller' => 'book_serials', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Borrow'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
