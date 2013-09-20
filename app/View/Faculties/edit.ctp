<div class="faculties form">
<?php echo $this->Form->create('Faculty'); ?>
	<fieldset>
		<legend><?php echo __('Edit Faculty'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('faculty_name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Faculty.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Faculty.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Faculties'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
	</ul>
</div>
