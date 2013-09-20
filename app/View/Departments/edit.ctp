<div class="departments form">
<?php echo $this->Form->create('Department'); ?>
	<fieldset>
		<legend><?php echo __('Edit Department'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('class_name');
		echo $this->Form->input('description');
		echo $this->Form->input('faculty_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Department.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Department.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Departments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Faculties'), array('controller' => 'faculties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Faculty'), array('controller' => 'faculties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Readers'), array('controller' => 'readers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reader'), array('controller' => 'readers', 'action' => 'add')); ?> </li>
	</ul>
</div>
