<div class="bookSerials form">
<?php echo $this->Form->create('BookSerial'); ?>
	<fieldset>
		<legend><?php echo __('Edit Book Serial'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('book_id');
		echo $this->Form->input('user_creater');
		echo $this->Form->input('book_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BookSerial.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('BookSerial.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Book Serials'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciculations'), array('controller' => 'ciculations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciculation'), array('controller' => 'ciculations', 'action' => 'add')); ?> </li>
	</ul>
</div>
