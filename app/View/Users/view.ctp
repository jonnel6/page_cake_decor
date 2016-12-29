<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($user['User']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ape Paterno'); ?></dt>
		<dd>
			<?php echo h($user['User']['ape_paterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ape Materno'); ?></dt>
		<dd>
			<?php echo h($user['User']['ape_materno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('controller' => 'pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Categorias'); ?></h3>
	<?php if (!empty($user['Categoria'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Imagen'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Categoria'] as $categoria): ?>
		<tr>
			<td><?php echo $categoria['id']; ?></td>
			<td><?php echo $categoria['nombre']; ?></td>
			<td><?php echo $categoria['descripcion']; ?></td>
			<td><?php echo $categoria['user_id']; ?></td>
			<td><?php echo $categoria['imagen']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'categorias', 'action' => 'view', $categoria['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'categorias', 'action' => 'edit', $categoria['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'categorias', 'action' => 'delete', $categoria['id']), array(), __('Are you sure you want to delete # %s?', $categoria['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Pedidos'); ?></h3>
	<?php if (!empty($user['Pedido'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Monto'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Pedido'] as $pedido): ?>
		<tr>
			<td><?php echo $pedido['id']; ?></td>
			<td><?php echo $pedido['user_id']; ?></td>
			<td><?php echo $pedido['monto']; ?></td>
			<td><?php echo $pedido['fecha']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pedidos', 'action' => 'view', $pedido['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pedidos', 'action' => 'edit', $pedido['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pedidos', 'action' => 'delete', $pedido['id']), array(), __('Are you sure you want to delete # %s?', $pedido['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
