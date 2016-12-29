<div class="pedidos index">
	<h2><?php echo __('Pedidos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('User_id'); ?></th>
			<th><?php echo $this->Paginator->sort('monto'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($pedidos as $pedido): ?>
	<tr>
		<td><?php echo h($pedido['Pedido']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pedido['User']['nombre'], array('controller' => 'Users', 'action' => 'view', $pedido['User']['id'])); ?>
		</td>
		<td><?php echo h($pedido['Pedido']['monto']); ?>&nbsp;</td>
		<td><?php echo h($pedido['Pedido']['fecha']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pedido['Pedido']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pedido['Pedido']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pedido['Pedido']['id']), array(), __('Are you sure you want to delete # %s?', $pedido['Pedido']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Pedido'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'Users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'Users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deliveries'), array('controller' => 'deliveries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Delivery'), array('controller' => 'deliveries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Detallepedidos'), array('controller' => 'detallepedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detallepedido'), array('controller' => 'detallepedidos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservas'), array('controller' => 'reservas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reserva'), array('controller' => 'reservas', 'action' => 'add')); ?> </li>
	</ul>
</div>
