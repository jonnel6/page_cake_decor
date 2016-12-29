<div class="Users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($User['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($User['User']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ape Paterno'); ?></dt>
		<dd>
			<?php echo h($User['User']['ape_paterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ape Materno'); ?></dt>
		<dd>
			<?php echo h($User['User']['ape_materno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dni'); ?></dt>
		<dd>
			<?php echo h($User['User']['dni']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($User['User']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($User['User']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo h($User['User']['usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($User['User']['password']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $User['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $User['User']['id']), array(), __('Are you sure you want to delete # %s?', $User['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('controller' => 'pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Pedidos'); ?></h3>
	<?php if (!empty($User['Pedido'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Oferta Id'); ?></th>
		<th><?php echo __('Monto'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($User['Pedido'] as $pedido): ?>
		<tr>
			<td><?php echo $pedido['id']; ?></td>
			<td><?php echo $pedido['User_id']; ?></td>
			<td><?php echo $pedido['oferta_id']; ?></td>
			<td><?php echo $pedido['monto']; ?></td>
			<td><?php echo $pedido['fecha']; ?></td>
			<td><?php echo $pedido['usuario_id']; ?></td>
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
