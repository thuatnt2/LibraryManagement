<div class="menus index">
	<h2><?php echo __('Menus'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('alias'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
			<th><?php echo $this->Paginator->sort('link'); ?></th>
			<th><?php echo $this->Paginator->sort('ordering'); ?></th>
			<th><?php echo $this->Paginator->sort('actived'); ?></th>
			<th><?php echo $this->Paginator->sort('published'); ?></th>
			<th><?php echo $this->Paginator->sort('controller'); ?></th>
			<th><?php echo $this->Paginator->sort('action'); ?></th>
			<th><?php echo $this->Paginator->sort('ext'); ?></th>
			<th><?php echo $this->Paginator->sort('module'); ?></th>
			<th><?php echo $this->Paginator->sort('view'); ?></th>
			<th><?php echo $this->Paginator->sort('position'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($menus as $menu): ?>
	<tr>
		<td><?php echo h($menu['Menu']['id']); ?>&nbsp;</td>
		<td><?php echo h($menu['Menu']['alias']); ?>&nbsp;</td>
		<td><?php echo h($menu['Menu']['title']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($menu['ParentMenu']['title'], array('controller' => 'menus', 'action' => 'view', $menu['ParentMenu']['id'])); ?>
		</td>
		<td><?php echo h($menu['Menu']['link']); ?>&nbsp;</td>
		<td><?php echo h($menu['Menu']['ordering']); ?>&nbsp;</td>
		<td><?php echo h($menu['Menu']['actived']); ?>&nbsp;</td>
		<td><?php echo h($menu['Menu']['published']); ?>&nbsp;</td>
		<td><?php echo h($menu['Menu']['controller']); ?>&nbsp;</td>
		<td><?php echo h($menu['Menu']['action']); ?>&nbsp;</td>
		<td><?php echo h($menu['Menu']['ext']); ?>&nbsp;</td>
		<td><?php echo h($menu['Menu']['module']); ?>&nbsp;</td>
		<td><?php echo h($menu['Menu']['view']); ?>&nbsp;</td>
		<td><?php echo h($menu['Menu']['position']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $menu['Menu']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $menu['Menu']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $menu['Menu']['id']), null, __('Are you sure you want to delete # %s?', $menu['Menu']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Menu'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
	</ul>
</div>
