<div class="detallepedidos index">
	<h2><?php echo __('Haz tu Pedido'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('pedido_id'); ?></th>
			<th><?php echo $this->Paginator->sort('producto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_unidad'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad'); ?></th>
			<th><?php echo $this->Paginator->sort('precio_total'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($detallepedidos as $detallepedido): ?>
	<tr>
		<td><?php echo h($detallepedido['Detallepedido']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($detallepedido['Pedido']['id'], array('controller' => 'pedidos', 'action' => 'view', $detallepedido['Pedido']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($detallepedido['Producto']['nombre'], array('controller' => 'productos', 'action' => 'view', $detallepedido['Producto']['id'])); ?>
		</td>
		<td><?php echo h($detallepedido['Detallepedido']['tipo_unidad']); ?>&nbsp;</td>
		<td><?php echo h($detallepedido['Detallepedido']['cantidad']); ?>&nbsp;</td>
		<td><?php echo h($detallepedido['Detallepedido']['precio_total']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $detallepedido['Detallepedido']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $detallepedido['Detallepedido']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $detallepedido['Detallepedido']['id']), array(), __('Are you sure you want to delete # %s?', $detallepedido['Detallepedido']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Detallepedido'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('controller' => 'pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
