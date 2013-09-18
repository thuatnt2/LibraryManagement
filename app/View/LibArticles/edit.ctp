<div class="libArticles form">
<?php echo $this->Form->create('LibArticle'); ?>
	<fieldset>
		<legend><?php echo __('Edit Lib Article'); ?></legend>
	<?php
		echo $this->Form->input('articleID');
		echo $this->Form->input('title');
		echo $this->Form->input('dateCreated');
		echo $this->Form->input('isPublisher');
		echo $this->Form->input('pictureThumnail');
		echo $this->Form->input('description');
		echo $this->Form->input('contentDetail');
		echo $this->Form->input('subCategoryID');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LibArticle.articleID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('LibArticle.articleID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Lib Articles'), array('action' => 'index')); ?></li>
	</ul>
</div>
