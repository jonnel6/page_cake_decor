<div class="detallepedidos view">
<h2><?php echo __('Haz tu pedido'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($detallepedido['Detallepedido']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pedido'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detallepedido['Pedido']['id'], array('controller' => 'pedidos', 'action' => 'view', $detallepedido['Pedido']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detallepedido['Producto']['id'], array('controller' => 'productos', 'action' => 'view', $detallepedido['Producto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Unidad'); ?></dt>
		<dd>
			<?php echo h($detallepedido['Detallepedido']['tipo_unidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad'); ?></dt>
		<dd>
			<?php echo h($detallepedido['Detallepedido']['cantidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio Total'); ?></dt>
		<dd>
			<?php echo h($detallepedido['Detallepedido']['precio_total']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detallepedido'), array('action' => 'edit', $detallepedido['Detallepedido']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detallepedido'), array('action' => 'delete', $detallepedido['Detallepedido']['id']), array(), __('Are you sure you want to delete # %s?', $detallepedido['Detallepedido']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detallepedidos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detallepedido'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('controller' => 'pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
