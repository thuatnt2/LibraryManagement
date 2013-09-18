<div class="libArticles view">
<h2><?php echo __('Lib Article'); ?></h2>
	<dl>
		<dt><?php echo __('ArticleID'); ?></dt>
		<dd>
			<?php echo h($libArticle['LibArticle']['articleID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($libArticle['LibArticle']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DateCreated'); ?></dt>
		<dd>
			<?php echo h($libArticle['LibArticle']['dateCreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsPublisher'); ?></dt>
		<dd>
			<?php echo h($libArticle['LibArticle']['isPublisher']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PictureThumnail'); ?></dt>
		<dd>
			<?php echo h($libArticle['LibArticle']['pictureThumnail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($libArticle['LibArticle']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ContentDetail'); ?></dt>
		<dd>
			<?php echo h($libArticle['LibArticle']['contentDetail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SubCategoryID'); ?></dt>
		<dd>
			<?php echo h($libArticle['LibArticle']['subCategoryID']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lib Article'), array('action' => 'edit', $libArticle['LibArticle']['articleID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lib Article'), array('action' => 'delete', $libArticle['LibArticle']['articleID']), null, __('Are you sure you want to delete # %s?', $libArticle['LibArticle']['articleID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lib Articles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lib Article'), array('action' => 'add')); ?> </li>
	</ul>
</div>
