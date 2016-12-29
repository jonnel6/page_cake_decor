<div class="deliveries view">
<h2><?php echo __('Delivery'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pedido'); ?></dt>
		<dd>
			<?php echo $this->Html->link($delivery['Pedido']['id'], array('controller' => 'pedidos', 'action' => 'view', $delivery['Pedido']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destino'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['destino']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Pedido'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['hora_pedido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Entrega'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['hora_entrega']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Delivery'), array('action' => 'edit', $delivery['Delivery']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Delivery'), array('action' => 'delete', $delivery['Delivery']['id']), array(), __('Are you sure you want to delete # %s?', $delivery['Delivery']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Deliveries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Delivery'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('controller' => 'pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
