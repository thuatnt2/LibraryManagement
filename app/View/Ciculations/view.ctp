<div class="ciculations view">
<h2><?php echo __('Ciculation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ciculation['Ciculation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($ciculation['Ciculation']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Return'); ?></dt>
		<dd>
			<?php echo h($ciculation['Ciculation']['date_return']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Librarian Name'); ?></dt>
		<dd>
			<?php echo h($ciculation['Ciculation']['librarian_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Extensions'); ?></dt>
		<dd>
			<?php echo h($ciculation['Ciculation']['extensions']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Borrow'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ciculation['Borrow']['id'], array('controller' => 'users', 'action' => 'view', $ciculation['Borrow']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book Serial'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ciculation['BookSerial']['id'], array('controller' => 'book_serials', 'action' => 'view', $ciculation['BookSerial']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ciculation'), array('action' => 'edit', $ciculation['Ciculation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ciculation'), array('action' => 'delete', $ciculation['Ciculation']['id']), null, __('Are you sure you want to delete # %s?', $ciculation['Ciculation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciculations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciculation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Book Serials'), array('controller' => 'book_serials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Serial'), array('controller' => 'book_serials', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Borrow'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
