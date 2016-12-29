<div class="pedidos form">
<?php echo $this->Form->create('Pedido'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pedido'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('cliente_id');
		echo $this->Form->input('monto');
		echo $this->Form->input('fecha');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Pedido.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Pedido.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deliveries'), array('controller' => 'deliveries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Delivery'), array('controller' => 'deliveries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Detallepedidos'), array('controller' => 'detallepedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detallepedido'), array('controller' => 'detallepedidos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservas'), array('controller' => 'reservas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reserva'), array('controller' => 'reservas', 'action' => 'add')); ?> </li>
	</ul>
</div>
