<div class="pedidos view">
<h2><?php echo __('Pedido'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pedido['User']['id'], array('controller' => 'Users', 'action' => 'view', $pedido['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monto'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['monto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['fecha']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pedido'), array('action' => 'edit', $pedido['Pedido']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pedido'), array('action' => 'delete', $pedido['Pedido']['id']), array(), __('Are you sure you want to delete # %s?', $pedido['Pedido']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Deliveries'); ?></h3>
	<?php if (!empty($pedido['Delivery'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pedido Id'); ?></th>
		<th><?php echo __('Destino'); ?></th>
		<th><?php echo __('Hora Pedido'); ?></th>
		<th><?php echo __('Hora Entrega'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pedido['Delivery'] as $delivery): ?>
		<tr>
			<td><?php echo $delivery['id']; ?></td>
			<td><?php echo $delivery['pedido_id']; ?></td>
			<td><?php echo $delivery['destino']; ?></td>
			<td><?php echo $delivery['hora_pedido']; ?></td>
			<td><?php echo $delivery['hora_entrega']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'deliveries', 'action' => 'view', $delivery['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'deliveries', 'action' => 'edit', $delivery['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'deliveries', 'action' => 'delete', $delivery['id']), array(), __('Are you sure you want to delete # %s?', $delivery['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Delivery'), array('controller' => 'deliveries', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Detallepedidos'); ?></h3>
	<?php if (!empty($pedido['Detallepedido'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pedido Id'); ?></th>
		<th><?php echo __('Producto Id'); ?></th>
		<th><?php echo __('Tipo Unidad'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<th><?php echo __('Precio Total'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pedido['Detallepedido'] as $detallepedido): ?>
		<tr>
			<td><?php echo $detallepedido['id']; ?></td>
			<td><?php echo $detallepedido['pedido_id']; ?></td>
			<td><?php echo $detallepedido['producto_id']; ?></td>
			<td><?php echo $detallepedido['tipo_unidad']; ?></td>
			<td><?php echo $detallepedido['cantidad']; ?></td>
			<td><?php echo $detallepedido['precio_total']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'detallepedidos', 'action' => 'view', $detallepedido['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'detallepedidos', 'action' => 'edit', $detallepedido['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'detallepedidos', 'action' => 'delete', $detallepedido['id']), array(), __('Are you sure you want to delete # %s?', $detallepedido['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Detallepedido'), array('controller' => 'detallepedidos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Reservas'); ?></h3>
	<?php if (!empty($pedido['Reserva'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pedido Id'); ?></th>
		<th><?php echo __('Fecha Recojo'); ?></th>
		<th><?php echo __('Pago'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pedido['Reserva'] as $reserva): ?>
		<tr>
			<td><?php echo $reserva['id']; ?></td>
			<td><?php echo $reserva['pedido_id']; ?></td>
			<td><?php echo $reserva['fecha_recojo']; ?></td>
			<td><?php echo $reserva['pago']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reservas', 'action' => 'view', $reserva['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reservas', 'action' => 'edit', $reserva['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reservas', 'action' => 'delete', $reserva['id']), array(), __('Are you sure you want to delete # %s?', $reserva['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Reserva'), array('controller' => 'reservas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
