<div class="bookSerials index">
	<h2><?php echo __('Book Serials'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('book_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('user_creater'); ?></th>
			<th><?php echo $this->Paginator->sort('book_status'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bookSerials as $bookSerial): ?>
	<tr>
		<td><?php echo h($bookSerial['BookSerial']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bookSerial['Book']['title'], array('controller' => 'books', 'action' => 'view', $bookSerial['Book']['id'])); ?>
		</td>
		<td><?php echo h($bookSerial['BookSerial']['created']); ?>&nbsp;</td>
		<td><?php echo h($bookSerial['BookSerial']['user_creater']); ?>&nbsp;</td>
		<td><?php echo h($bookSerial['BookSerial']['book_status']); ?>&nbsp;</td>
		<td><?php echo h($bookSerial['BookSerial']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bookSerial['BookSerial']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bookSerial['BookSerial']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bookSerial['BookSerial']['id']), null, __('Are you sure you want to delete # %s?', $bookSerial['BookSerial']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Book Serial'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciculations'), array('controller' => 'ciculations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciculation'), array('controller' => 'ciculations', 'action' => 'add')); ?> </li>
	</ul>
</div>
