<div class="reservas view">
<h2><?php echo __('Reserva'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($reserva['Reserva']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pedido'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reserva['Pedido']['id'], array('controller' => 'pedidos', 'action' => 'view', $reserva['Pedido']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Recojo'); ?></dt>
		<dd>
			<?php echo h($reserva['Reserva']['fecha_recojo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pago'); ?></dt>
		<dd>
			<?php echo h($reserva['Reserva']['pago']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reserva'), array('action' => 'edit', $reserva['Reserva']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reserva'), array('action' => 'delete', $reserva['Reserva']['id']), array(), __('Are you sure you want to delete # %s?', $reserva['Reserva']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reserva'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('controller' => 'pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
