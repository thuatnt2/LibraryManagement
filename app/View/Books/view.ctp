<div class="books view">
<h2><?php echo __('Book'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($book['Book']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($book['Book']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Of Pages'); ?></dt>
		<dd>
			<?php echo h($book['Book']['number_of_pages']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Publisher'); ?></dt>
		<dd>
			<?php echo h($book['Book']['publisher']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year Of Publish'); ?></dt>
		<dd>
			<?php echo h($book['Book']['year_of_publish']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total'); ?></dt>
		<dd>
			<?php echo h($book['Book']['total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($book['Book']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($book['Book']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paper Size'); ?></dt>
		<dd>
			<?php echo h($book['Book']['paper_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Created'); ?></dt>
		<dd>
			<?php echo h($book['Book']['user_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($book['Book']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($book['Book']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Used As'); ?></dt>
		<dd>
			<?php echo h($book['Book']['used_as']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book Language'); ?></dt>
		<dd>
			<?php echo $this->Html->link($book['BookLanguage']['name'], array('controller' => 'book_languages', 'action' => 'view', $book['BookLanguage']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($book['BookType']['name'], array('controller' => 'book_types', 'action' => 'view', $book['BookType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($book['BookCategory']['name'], array('controller' => 'book_categories', 'action' => 'view', $book['BookCategory']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Book'), array('action' => 'edit', $book['Book']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Book'), array('action' => 'delete', $book['Book']['id']), null, __('Are you sure you want to delete # %s?', $book['Book']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Book Languages'), array('controller' => 'book_languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Language'), array('controller' => 'book_languages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Book Types'), array('controller' => 'book_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Type'), array('controller' => 'book_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Book Categories'), array('controller' => 'book_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Category'), array('controller' => 'book_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Book Authors'), array('controller' => 'book_authors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Author'), array('controller' => 'book_authors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Book Authors'); ?></h3>
	<?php if (!empty($book['BookAuthor'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Author Id'); ?></th>
		<th><?php echo __('Book Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($book['BookAuthor'] as $bookAuthor): ?>
		<tr>
			<td><?php echo $bookAuthor['id']; ?></td>
			<td><?php echo $bookAuthor['author_id']; ?></td>
			<td><?php echo $bookAuthor['book_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'book_authors', 'action' => 'view', $bookAuthor['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'book_authors', 'action' => 'edit', $bookAuthor['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'book_authors', 'action' => 'delete', $bookAuthor['id']), null, __('Are you sure you want to delete # %s?', $bookAuthor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Book Author'), array('controller' => 'book_authors', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
