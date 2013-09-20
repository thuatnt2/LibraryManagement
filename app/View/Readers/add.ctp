<div class="readers form">
<?php echo $this->Form->create('Reader'); ?>
	<fieldset>
		<legend><?php echo __('Add Reader'); ?></legend>
	<?php
		echo $this->Form->input('dateCreated');
		echo $this->Form->input('dateExpiry');
		echo $this->Form->input('yearLearn');
		echo $this->Form->input('isActive');
		echo $this->Form->input('totalBorrow');
		echo $this->Form->input('user_id');
		echo $this->Form->input('department_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Readers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
	</ul>
</div>
