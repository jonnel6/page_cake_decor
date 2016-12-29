<div class="Users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('ape_paterno'); ?></th>
			<th><?php echo $this->Paginator->sort('ape_materno'); ?></th>
			<th><?php echo $this->Paginator->sort('dni'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('role'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($Users as $User): ?>
	<tr>
		<td><?php echo h($User['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($User['User']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($User['User']['ape_paterno']); ?>&nbsp;</td>
		<td><?php echo h($User['User']['ape_materno']); ?>&nbsp;</td>
		<td><?php echo h($User['User']['dni']); ?>&nbsp;</td>
		<td><?php echo h($User['User']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($User['User']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($User['User']['usuario']); ?>&nbsp;</td>
		<td><?php echo h($User['User']['password']); ?>&nbsp;</td>
		<td><?php echo h($User['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($User['User']['modified']); ?>&nbsp;</td>
		<td><?php echo h($User['User']['role']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $User['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $User['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $User['User']['id']), array(), __('Are you sure you want to delete # %s?', $User['User']['id'])); ?>
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
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('controller' => 'pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
