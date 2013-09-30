<div class="departments view">
<h2><?php echo __('Department'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($department['Department']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Class Name'); ?></dt>
		<dd>
			<?php echo h($department['Department']['department_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($department['Department']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Faculty'); ?></dt>
		<dd>
			<?php echo $this->Html->link($department['Faculty']['id'], array('controller' => 'faculties', 'action' => 'view', $department['Faculty']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Department'), array('action' => 'edit', $department['Department']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Department'), array('action' => 'delete', $department['Department']['id']), null, __('Are you sure you want to delete # %s?', $department['Department']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Faculties'), array('controller' => 'faculties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Faculty'), array('controller' => 'faculties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Readers'), array('controller' => 'readers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reader'), array('controller' => 'readers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Readers'); ?></h3>
	<?php if (!empty($department['Reader'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('CardBarcode'); ?></th>
		<th><?php echo __('DateCreated'); ?></th>
		<th><?php echo __('DateExpiry'); ?></th>
		<th><?php echo __('YearLearn'); ?></th>
		<th><?php echo __('IsActive'); ?></th>
		<th><?php echo __('TotalBorrow'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Department Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($department['Reader'] as $reader): ?>
		<tr>
			<td><?php echo $reader['cardBarcode']; ?></td>
			<td><?php echo $reader['dateCreated']; ?></td>
			<td><?php echo $reader['dateExpiry']; ?></td>
			<td><?php echo $reader['yearLearn']; ?></td>
			<td><?php echo $reader['isActive']; ?></td>
			<td><?php echo $reader['totalBorrow']; ?></td>
			<td><?php echo $reader['user_id']; ?></td>
			<td><?php echo $reader['department_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'readers', 'action' => 'view', $reader['cardBarcode'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'readers', 'action' => 'edit', $reader['cardBarcode'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'readers', 'action' => 'delete', $reader['cardBarcode']), null, __('Are you sure you want to delete # %s?', $reader['cardBarcode'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Reader'), array('controller' => 'readers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
