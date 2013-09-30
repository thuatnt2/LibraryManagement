<div class="books form">
<?php echo $this->Form->create('Book'); ?>
	<fieldset>
		<legend><?php echo __('Add Book'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('number_of_pages');
		echo $this->Form->input('publisher');
		echo $this->Form->input('year_of_publish');
		echo $this->Form->input('total');
		echo $this->Form->input('price');
		echo $this->Form->input('paper_size');
		echo $this->Form->input('user_created');
		echo $this->Form->input('location');
		echo $this->Form->input('description');
		echo $this->Form->input('used_as');
		echo $this->Form->input('book_language_id');
		echo $this->Form->input('book_type_id');
		echo $this->Form->input('book_category_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index')); ?></li>
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
