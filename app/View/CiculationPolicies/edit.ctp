<div class="ciculationPolicies form">
<?php echo $this->Form->create('CiculationPolicy'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ciculation Policy'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('amount');
		echo $this->Form->input('unit_of');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CiculationPolicy.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CiculationPolicy.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ciculation Policies'), array('action' => 'index')); ?></li>
	</ul>
</div>
