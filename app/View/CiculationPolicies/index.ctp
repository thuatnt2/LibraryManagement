<div class="ciculationPolicies index">
	<h2><?php echo __('Ciculation Policies'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('unit_of'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ciculationPolicies as $ciculationPolicy): ?>
	<tr>
		<td><?php echo h($ciculationPolicy['CiculationPolicy']['id']); ?>&nbsp;</td>
		<td><?php echo h($ciculationPolicy['CiculationPolicy']['name']); ?>&nbsp;</td>
		<td><?php echo h($ciculationPolicy['CiculationPolicy']['amount']); ?>&nbsp;</td>
		<td><?php echo h($ciculationPolicy['CiculationPolicy']['unit_of']); ?>&nbsp;</td>
		<td><?php echo h($ciculationPolicy['CiculationPolicy']['created']); ?>&nbsp;</td>
		<td><?php echo h($ciculationPolicy['CiculationPolicy']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ciculationPolicy['CiculationPolicy']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ciculationPolicy['CiculationPolicy']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ciculationPolicy['CiculationPolicy']['id']), null, __('Are you sure you want to delete # %s?', $ciculationPolicy['CiculationPolicy']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ciculation Policy'), array('action' => 'add')); ?></li>
	</ul>
</div>
