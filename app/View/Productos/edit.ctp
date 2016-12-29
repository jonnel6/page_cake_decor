<div class="productos form">
<?php echo $this->Form->create('Producto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Producto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('categoria_id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('precio');
		echo $this->Form->input('imagen');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Producto.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Producto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Detallepedidos'), array('controller' => 'detallepedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detallepedido'), array('controller' => 'detallepedidos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inventarios'), array('controller' => 'inventarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inventario'), array('controller' => 'inventarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ofertas'), array('controller' => 'ofertas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta'), array('controller' => 'ofertas', 'action' => 'add')); ?> </li>
	</ul>
</div>
