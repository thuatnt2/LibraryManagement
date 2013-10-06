<div class="ciculationPolicies view">
<h2><?php echo __('Ciculation Policy'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ciculationPolicy['CiculationPolicy']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($ciculationPolicy['CiculationPolicy']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($ciculationPolicy['CiculationPolicy']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit Of'); ?></dt>
		<dd>
			<?php echo h($ciculationPolicy['CiculationPolicy']['unit_of']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($ciculationPolicy['CiculationPolicy']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($ciculationPolicy['CiculationPolicy']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ciculation Policy'), array('action' => 'edit', $ciculationPolicy['CiculationPolicy']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ciculation Policy'), array('action' => 'delete', $ciculationPolicy['CiculationPolicy']['id']), null, __('Are you sure you want to delete # %s?', $ciculationPolicy['CiculationPolicy']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciculation Policies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciculation Policy'), array('action' => 'add')); ?> </li>
	</ul>
</div>
