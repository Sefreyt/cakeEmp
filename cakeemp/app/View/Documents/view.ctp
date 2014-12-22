<div class="documents view">
<h2><?php echo __('Document'); ?></h2>
	<dl>
		
		<dt><?php echo __('Titre'); ?></dt>
		<dd>
			<?php echo h($document['Document']['titre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employe'); ?></dt>
		<dd>
			<?php echo $this->Html->link($document['Employe']['nom'], array('controller' => 'employes', 'action' => 'view', $document['Employe']['id'])); ?>
			&nbsp;
		</dd>	
                <dt><?php echo __('Subcategory'); ?></dt>
		<dd>
			<?php echo $this->Html->link($document['Subcategory']['name'], array('controller' => 'subcategories', 'action' => 'view', $document['Subcategory']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Document'), array('action' => 'edit', $document['Document']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Document'), array('action' => 'delete', $document['Document']['id']), array(), __('Are you sure you want to delete # %s?', $document['Document']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Documents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employes'), array('controller' => 'employes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employe'), array('controller' => 'employes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('List Subcategories'), array('controller' => 'subcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcategory'), array('controller' => 'subcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>
