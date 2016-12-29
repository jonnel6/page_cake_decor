<div class="reservas form">
<?php echo $this->Form->create('Reserva'); ?>
	<fieldset>
		<legend><?php echo __('Edit Reserva'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pedido_id');
		echo $this->Form->input('fecha_recojo');
		echo $this->Form->input('pago');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Reserva.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Reserva.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Reservas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('controller' => 'pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
