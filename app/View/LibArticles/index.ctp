<div class="libArticles index">
	<h2><?php echo __('Lib Articles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('articleID'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('dateCreated'); ?></th>
			<th><?php echo $this->Paginator->sort('isPublisher'); ?></th>
			<th><?php echo $this->Paginator->sort('pictureThumnail'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('contentDetail'); ?></th>
			<th><?php echo $this->Paginator->sort('subCategoryID'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($libArticles as $libArticle): ?>
	<tr>
		<td><?php echo h($libArticle['LibArticle']['articleID']); ?>&nbsp;</td>
		<td><?php echo h($libArticle['LibArticle']['title']); ?>&nbsp;</td>
		<td><?php echo h($libArticle['LibArticle']['dateCreated']); ?>&nbsp;</td>
		<td><?php echo h($libArticle['LibArticle']['isPublisher']); ?>&nbsp;</td>
		<td><?php echo h($libArticle['LibArticle']['pictureThumnail']); ?>&nbsp;</td>
		<td><?php echo h($libArticle['LibArticle']['description']); ?>&nbsp;</td>
		<td><?php echo h($libArticle['LibArticle']['contentDetail']); ?>&nbsp;</td>
		<td><?php echo h($libArticle['LibArticle']['subCategoryID']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $libArticle['LibArticle']['articleID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $libArticle['LibArticle']['articleID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $libArticle['LibArticle']['articleID']), null, __('Are you sure you want to delete # %s?', $libArticle['LibArticle']['articleID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Lib Article'), array('action' => 'add')); ?></li>
	</ul>
</div>
