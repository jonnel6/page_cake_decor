<div class="inventarios view">
<h2><?php echo __('Inventario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($inventario['Inventario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inventario['Producto']['id'], array('controller' => 'productos', 'action' => 'view', $inventario['Producto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock'); ?></dt>
		<dd>
			<?php echo h($inventario['Inventario']['stock']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($inventario['Inventario']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Inventario'), array('action' => 'edit', $inventario['Inventario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Inventario'), array('action' => 'delete', $inventario['Inventario']['id']), array(), __('Are you sure you want to delete # %s?', $inventario['Inventario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Inventarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inventario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
