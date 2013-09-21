<div class="menus view">
<h2><?php echo __('Menu'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alias'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['alias']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Menu'); ?></dt>
		<dd>
			<?php echo $this->Html->link($menu['ParentMenu']['title'], array('controller' => 'menus', 'action' => 'view', $menu['ParentMenu']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ordering'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['ordering']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actived'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['actived']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Published'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['published']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Controller'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['controller']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Action'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['action']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ext'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['ext']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Module'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['module']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('View'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['view']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($menu['Menu']['position']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Menu'), array('action' => 'edit', $menu['Menu']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Menu'), array('action' => 'delete', $menu['Menu']['id']), null, __('Are you sure you want to delete # %s?', $menu['Menu']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Menus'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Menus'); ?></h3>
	<?php if (!empty($menu['ChildMenu'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Alias'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Link'); ?></th>
		<th><?php echo __('Ordering'); ?></th>
		<th><?php echo __('Actived'); ?></th>
		<th><?php echo __('Published'); ?></th>
		<th><?php echo __('Controller'); ?></th>
		<th><?php echo __('Action'); ?></th>
		<th><?php echo __('Ext'); ?></th>
		<th><?php echo __('Module'); ?></th>
		<th><?php echo __('View'); ?></th>
		<th><?php echo __('Position'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($menu['ChildMenu'] as $childMenu): ?>
		<tr>
			<td><?php echo $childMenu['id']; ?></td>
			<td><?php echo $childMenu['alias']; ?></td>
			<td><?php echo $childMenu['title']; ?></td>
			<td><?php echo $childMenu['parent_id']; ?></td>
			<td><?php echo $childMenu['link']; ?></td>
			<td><?php echo $childMenu['ordering']; ?></td>
			<td><?php echo $childMenu['actived']; ?></td>
			<td><?php echo $childMenu['published']; ?></td>
			<td><?php echo $childMenu['controller']; ?></td>
			<td><?php echo $childMenu['action']; ?></td>
			<td><?php echo $childMenu['ext']; ?></td>
			<td><?php echo $childMenu['module']; ?></td>
			<td><?php echo $childMenu['view']; ?></td>
			<td><?php echo $childMenu['position']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'menus', 'action' => 'view', $childMenu['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'menus', 'action' => 'edit', $childMenu['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'menus', 'action' => 'delete', $childMenu['id']), null, __('Are you sure you want to delete # %s?', $childMenu['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
