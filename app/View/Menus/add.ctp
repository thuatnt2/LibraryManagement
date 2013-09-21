<div class="menus form">
<?php echo $this->Form->create('Menu'); ?>
	<fieldset>
		<legend><?php echo __('Add Menu'); ?></legend>
	<?php
		echo $this->Form->input('alias');
		echo $this->Form->input('title');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('link');
		echo $this->Form->input('ordering');
		echo $this->Form->input('actived');
		echo $this->Form->input('published');
		echo $this->Form->input('controller');
		echo $this->Form->input('action');
		echo $this->Form->input('ext');
		echo $this->Form->input('module');
		echo $this->Form->input('view');
		echo $this->Form->input('position');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Menus'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
	</ul>
</div>
