<div class="postes form">
<?php

 $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array('inline' => false));
 
  $this->Html->script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js', array('inline' => false));
  
   $this->Html->script('View/Postes/index', array('inline' => false));
 
  echo $this->Form->create('Poste'); ?>
	<fieldset>
		<legend><?php echo __('Add Poste'); ?></legend>
	<?php
		echo $this->Form->input('postes', array('class' => 'ui-autocomplete', 'id' => 'autocomplete'));
		echo $this->Form->input('Employe');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Postes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employes'), array('controller' => 'employes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employe'), array('controller' => 'employes', 'action' => 'add')); ?> </li>
	</ul>
</div>
