<div class="employes index">
	<h2><?php echo __('Employes'); ?></h2>
	<table cellpadding="10" cellspacing="10">
	<thead>
	<tr>
			
			<th><?php echo $this->Paginator->sort('nom'); ?></th>
                        <th><?php echo $this->Paginator->sort('poste'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($employes as $employe): ?>
	<tr>
		
		<td><?php echo h($employe['Employe']['nom']); ?>&nbsp;</td>                                                                       
                <td><?php if (!empty($employe['Poste']));
                foreach ($employe['Poste'] as $poste) : echo $poste['poste'];echo " ";                endforeach;?></td>
                
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $employe['Employe']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employe['Employe']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employe['Employe']['id']), array(), __('Are you sure you want to delete # %s?', $employe['Employe']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
                echo " ";
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Employe'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Postes'), array('controller' => 'postes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Poste'), array('controller' => 'postes', 'action' => 'add')); ?> </li>
	</ul>
</div>
