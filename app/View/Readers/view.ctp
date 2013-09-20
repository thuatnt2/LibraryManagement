<div class="readers view">
<h2><?php echo __('Reader'); ?></h2>
	<dl>
		<dt><?php echo __('CardBarcode'); ?></dt>
		<dd>
			<?php echo h($reader['Reader']['cardBarcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DateCreated'); ?></dt>
		<dd>
			<?php echo h($reader['Reader']['dateCreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DateExpiry'); ?></dt>
		<dd>
			<?php echo h($reader['Reader']['dateExpiry']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('YearLearn'); ?></dt>
		<dd>
			<?php echo h($reader['Reader']['yearLearn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsActive'); ?></dt>
		<dd>
			<?php echo h($reader['Reader']['isActive']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TotalBorrow'); ?></dt>
		<dd>
			<?php echo h($reader['Reader']['totalBorrow']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reader['User']['id'], array('controller' => 'users', 'action' => 'view', $reader['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Department'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reader['Department']['id'], array('controller' => 'departments', 'action' => 'view', $reader['Department']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reader'), array('action' => 'edit', $reader['Reader']['cardBarcode'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reader'), array('action' => 'delete', $reader['Reader']['cardBarcode']), null, __('Are you sure you want to delete # %s?', $reader['Reader']['cardBarcode'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Readers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reader'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
	</ul>
</div>
