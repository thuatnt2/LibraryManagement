<div class="bookLanguages view">
<h2><?php echo __('Book Language'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bookLanguage['BookLanguage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($bookLanguage['BookLanguage']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($bookLanguage['BookLanguage']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Book Language'), array('action' => 'edit', $bookLanguage['BookLanguage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Book Language'), array('action' => 'delete', $bookLanguage['BookLanguage']['id']), null, __('Are you sure you want to delete # %s?', $bookLanguage['BookLanguage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Book Languages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Language'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Books'); ?></h3>
	<?php if (!empty($bookLanguage['Book'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Number Of Pages'); ?></th>
		<th><?php echo __('Publisher'); ?></th>
		<th><?php echo __('Year Of Publish'); ?></th>
		<th><?php echo __('Total'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Paper Size'); ?></th>
		<th><?php echo __('User Created'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Used As'); ?></th>
		<th><?php echo __('Book Language Id'); ?></th>
		<th><?php echo __('Book Type Id'); ?></th>
		<th><?php echo __('Book Category Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bookLanguage['Book'] as $book): ?>
		<tr>
			<td><?php echo $book['id']; ?></td>
			<td><?php echo $book['title']; ?></td>
			<td><?php echo $book['number_of_pages']; ?></td>
			<td><?php echo $book['publisher']; ?></td>
			<td><?php echo $book['year_of_publish']; ?></td>
			<td><?php echo $book['total']; ?></td>
			<td><?php echo $book['price']; ?></td>
			<td><?php echo $book['created']; ?></td>
			<td><?php echo $book['paper_size']; ?></td>
			<td><?php echo $book['user_created']; ?></td>
			<td><?php echo $book['location']; ?></td>
			<td><?php echo $book['description']; ?></td>
			<td><?php echo $book['used_as']; ?></td>
			<td><?php echo $book['book_language_id']; ?></td>
			<td><?php echo $book['book_type_id']; ?></td>
			<td><?php echo $book['book_category_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'books', 'action' => 'view', $book['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'books', 'action' => 'edit', $book['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'books', 'action' => 'delete', $book['id']), null, __('Are you sure you want to delete # %s?', $book['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
