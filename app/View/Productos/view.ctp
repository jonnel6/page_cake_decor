<div class="productos view">
<h2><?php echo __('Producto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($producto['Categoria']['id'], array('controller' => 'categorias', 'action' => 'view', $producto['Categoria']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['precio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagen'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['imagen']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Producto'), array('action' => 'edit', $producto['Producto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Producto'), array('action' => 'delete', $producto['Producto']['id']), array(), __('Are you sure you want to delete # %s?', $producto['Producto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Detallepedidos'); ?></h3>
	<?php if (!empty($producto['Detallepedido'])): ?>
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
	<?php foreach ($producto['Detallepedido'] as $detallepedido): ?>
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
	<h3><?php echo __('Related Inventarios'); ?></h3>
	<?php if (!empty($producto['Inventario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Producto Id'); ?></th>
		<th><?php echo __('Stock'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($producto['Inventario'] as $inventario): ?>
		<tr>
			<td><?php echo $inventario['id']; ?></td>
			<td><?php echo $inventario['producto_id']; ?></td>
			<td><?php echo $inventario['stock']; ?></td>
			<td><?php echo $inventario['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'inventarios', 'action' => 'view', $inventario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'inventarios', 'action' => 'edit', $inventario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'inventarios', 'action' => 'delete', $inventario['id']), array(), __('Are you sure you want to delete # %s?', $inventario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Inventario'), array('controller' => 'inventarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Ofertas'); ?></h3>
	<?php if (!empty($producto['Oferta'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Producto Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Fecha Inicio'); ?></th>
		<th><?php echo __('Fecha Fin'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($producto['Oferta'] as $oferta): ?>
		<tr>
			<td><?php echo $oferta['id']; ?></td>
			<td><?php echo $oferta['producto_id']; ?></td>
			<td><?php echo $oferta['nombre']; ?></td>
			<td><?php echo $oferta['descripcion']; ?></td>
			<td><?php echo $oferta['fecha_inicio']; ?></td>
			<td><?php echo $oferta['fecha_fin']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ofertas', 'action' => 'view', $oferta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ofertas', 'action' => 'edit', $oferta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ofertas', 'action' => 'delete', $oferta['id']), array(), __('Are you sure you want to delete # %s?', $oferta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Oferta'), array('controller' => 'ofertas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
