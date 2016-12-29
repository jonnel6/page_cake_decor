<div class="clientes form">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Add Cliente'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('ape_paterno');
		echo $this->Form->input('ape_materno');
		echo $this->Form->input('dni');
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('usuario');
		echo $this->Form->input('password');
		echo $this->Form->input('created');
		echo $this->Form->input('modified');
		echo $this->Form->input('role',array("options"=>array("ADMIN"=>"ADMINISTRADOR","CLI"=>"CLIENTE")));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('controller' => 'pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
