<div class="bookSerials view">
<h2><?php echo __('Book Serial'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bookSerial['BookSerial']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bookSerial['Book']['title'], array('controller' => 'books', 'action' => 'view', $bookSerial['Book']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($bookSerial['BookSerial']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Creater'); ?></dt>
		<dd>
			<?php echo h($bookSerial['BookSerial']['user_creater']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book Status'); ?></dt>
		<dd>
			<?php echo h($bookSerial['BookSerial']['book_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($bookSerial['BookSerial']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Book Serial'), array('action' => 'edit', $bookSerial['BookSerial']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Book Serial'), array('action' => 'delete', $bookSerial['BookSerial']['id']), null, __('Are you sure you want to delete # %s?', $bookSerial['BookSerial']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Book Serials'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Serial'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciculations'), array('controller' => 'ciculations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciculation'), array('controller' => 'ciculations', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Ciculations'); ?></h3>
	<?php if (!empty($bookSerial['Ciculation'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $bookSerial['Ciculation']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Date Borrow'); ?></dt>
		<dd>
	<?php echo $bookSerial['Ciculation']['date_borrow']; ?>
&nbsp;</dd>
		<dt><?php echo __('Date Return'); ?></dt>
		<dd>
	<?php echo $bookSerial['Ciculation']['date_return']; ?>
&nbsp;</dd>
		<dt><?php echo __('Librarian Name'); ?></dt>
		<dd>
	<?php echo $bookSerial['Ciculation']['librarian_name']; ?>
&nbsp;</dd>
		<dt><?php echo __('Add Time'); ?></dt>
		<dd>
	<?php echo $bookSerial['Ciculation']['add_time']; ?>
&nbsp;</dd>
		<dt><?php echo __('Reader Id'); ?></dt>
		<dd>
	<?php echo $bookSerial['Ciculation']['reader_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Book Serial Id'); ?></dt>
		<dd>
	<?php echo $bookSerial['Ciculation']['book_serial_id']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Ciculation'), array('controller' => 'ciculations', 'action' => 'edit', $bookSerial['Ciculation']['id'])); ?></li>
			</ul>
		</div>
	</div>
	