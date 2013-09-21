<div class="faculties view">
<h2><?php echo __('Faculty'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($faculty['Faculty']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Faculty Name'); ?></dt>
		<dd>
			<?php echo h($faculty['Faculty']['faculty_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($faculty['Faculty']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Faculty'), array('action' => 'edit', $faculty['Faculty']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Faculty'), array('action' => 'delete', $faculty['Faculty']['id']), null, __('Are you sure you want to delete # %s?', $faculty['Faculty']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Faculties'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Faculty'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Departments'); ?></h3>
	<?php if (!empty($faculty['Department'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Class Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Faculty Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($faculty['Department'] as $department): ?>
		<tr>
			<td><?php echo $department['id']; ?></td>
			<td><?php echo $department['department_name']; ?></td>
			<td><?php echo $department['description']; ?></td>
			<td><?php echo $department['faculty_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'departments', 'action' => 'view', $department['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'departments', 'action' => 'edit', $department['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'departments', 'action' => 'delete', $department['id']), null, __('Are you sure you want to delete # %s?', $department['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
