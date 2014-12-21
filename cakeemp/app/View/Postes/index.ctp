<div class="postes index">
	<h2><?php echo __('Postes'); ?></h2>
	<table cellpadding="10" cellspacing="10">
	<thead>
	<tr>
			
			<th><?php echo $this->Paginator->sort('poste'); ?></th>
                        <th><?php echo $this->Paginator->sort('nom'); ?></th>                      
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($postes as $poste): ?>
	<tr>
		
		<td><?php echo h($poste['Poste']['poste']); ?>&nbsp;</td>
                <td><?php if (!empty($poste['Employe']));
                foreach ($poste['Employe'] as $employe) : echo $employe['nom'];echo " ";                endforeach;?></td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $poste['Poste']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $poste['Poste']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $poste['Poste']['id']), array(), __('Are you sure you want to delete # %s?', $poste['Poste']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Poste'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Employes'), array('controller' => 'employes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employe'), array('controller' => 'employes', 'action' => 'add')); ?> </li>
	</ul>
</div>
