<div class="ciculations form">
<?php echo $this->Form->create('Ciculation'); ?>
	<fieldset>
		<legend><?php echo __('Add Ciculation'); ?></legend>
	<?php
		echo $this->Form->input('date_return');
		echo $this->Form->input('librarian_name');
		echo $this->Form->input('extensions');
		echo $this->Form->input('reader');
		echo $this->Form->input('book_serial_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ciculations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Book Serials'), array('controller' => 'book_serials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Serial'), array('controller' => 'book_serials', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Borrow'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
