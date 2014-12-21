<div class="employes view">
<h2><?php echo __('Employe'); ?></h2>
	<dl>		
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($employe['Employe']['nom']); ?>
			&nbsp;
		</dd>
                <dt><?php echo __('Poste'); ?></dt>
		<dd>
			<?php if (!empty($employe['Poste']));
                foreach ($employe['Poste'] as $poste) : echo $poste['poste'];echo " ";                endforeach;?>
			&nbsp;
		</dd>
                
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employe'), array('action' => 'edit', $employe['Employe']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employe'), array('action' => 'delete', $employe['Employe']['id']), array(), __('Are you sure you want to delete # %s?', $employe['Employe']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employe'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Postes'), array('controller' => 'postes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Poste'), array('controller' => 'postes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Documents'); ?></h3>
	<?php if (!empty($employe['Document'])): ?>
	<table cellpadding = "10" cellspacing = "10">
	<tr>
		
		<th><?php echo __('Titre'); ?></th>
		
		
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($employe['Document'] as $document): ?>
		<tr>
			
			<td><?php echo $document['titre']; ?></td>
			
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'documents', 'action' => 'view', $document['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'documents', 'action' => 'edit', $document['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'documents', 'action' => 'delete', $document['id']), array(), __('Are you sure you want to delete # %s?', $document['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Postes'); ?></h3>
	<?php if (!empty($employe['Poste'])): ?>
	<table cellpadding = "10" cellspacing = "10">
	<tr>
		
		<th><?php echo __('Poste'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($employe['Poste'] as $poste): ?>
		<tr>
			
			<td><?php echo $poste['poste']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'postes', 'action' => 'view', $poste['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'postes', 'action' => 'edit', $poste['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'postes', 'action' => 'delete', $poste['id']), array(), __('Are you sure you want to delete # %s?', $poste['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Poste'), array('controller' => 'postes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
