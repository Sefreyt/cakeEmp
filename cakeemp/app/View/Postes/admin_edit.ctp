<div class="postes form">
<?php echo $this->Form->create('Poste'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Poste'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('poste');
		echo $this->Form->input('Employe');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Poste.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Poste.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Postes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employes'), array('controller' => 'employes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employe'), array('controller' => 'employes', 'action' => 'add')); ?> </li>
	</ul>
</div>
