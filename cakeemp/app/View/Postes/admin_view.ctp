<div class="postes view">
<h2><?php echo __('Poste'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($poste['Poste']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Poste'); ?></dt>
		<dd>
			<?php echo h($poste['Poste']['poste']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Poste'), array('action' => 'edit', $poste['Poste']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Poste'), array('action' => 'delete', $poste['Poste']['id']), array(), __('Are you sure you want to delete # %s?', $poste['Poste']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Postes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Poste'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employes'), array('controller' => 'employes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employe'), array('controller' => 'employes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Employes'); ?></h3>
	<?php if (!empty($poste['Employe'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nom'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($poste['Employe'] as $employe): ?>
		<tr>
			<td><?php echo $employe['id']; ?></td>
			<td><?php echo $employe['nom']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'employes', 'action' => 'view', $employe['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'employes', 'action' => 'edit', $employe['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'employes', 'action' => 'delete', $employe['id']), array(), __('Are you sure you want to delete # %s?', $employe['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Employe'), array('controller' => 'employes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
