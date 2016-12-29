
<div class="w3-container w3-margin-top " style="">
	<div class="w3-margin-top w3-col m10 lg8 w3-margin-top w3-padding-top">
		
		<?php echo $this->Form->create('Pedido',array("controller"=>"Pedido","action"=>"add_pedido")); ?>
		<label class="w3-label w3-margin-bottom">USUARIO:</label>
		<input class="w3-border w3-input w3-margin-bottom" type="text" name="data[Pedido][user_id]"
		 value=<?= $current_user['id'] ?>>	
		<input type="hidden" name="data[Pedido][id]">
		<label class="w3-label w3-margin-bottom"for="">CARRITO:</label>
		<table class="w3-table w3-bordered w3-hoverable">
				<th>ID</th>
				<th>Nombre</th>
				<th>Categoria</th>
				<th>Precio</th>
				<th>Imagen</th>
				<th>Cantidad</th>
				<th>Eliminar</th>


		<?php 
			foreach($_SESSION['carrito'] as $productos)
			{ ?>
			<tr>
				
				<td><input type="text" class="precio" name="data[Detallepedido][producto_id]" value="<?=$productos['id']?>"></td>					
				<td><?php echo $productos['nombre_producto'] ?></td>
				<td><?php echo $productos['categoria'] ?></td>				
				<td><input type="text" class="precio" name="data[Detallepedido][precio_total]" value="<?=$productos['precio']?>"></td>	
				<td><?php echo $this->Html->image($productos['imagen'],array("width"=>"100%")); ?></td>
				<td><?= $this->Form->input(' ',array("name"=>"data[Detallepedido][cantidad]","value"=> "1"))?></td>	
				<td><?= $this->Form->input(' ',array("name"=>"data[Detallepedido][tipo_unidad]","value"=> "Unidad"))?></td>				
				<td><?php echo $this->Html->link('Eliminar', array('action' => 'eliminar_carrito', $productos['id'])); ?></td>
			</tr>				
		
		<?php } ?>
		 	</table>
		 	<?= $this->Form->input('monto',array("id"=>"monto_total_pedido","class"=>"w3-input w3-border w3-padding-bottom")); ?>
			</br>		
			<?php echo $this->Form->input('fecha') ?>
			<?= $this->Form->submit("Realizar Pedido",array("class"=>"w3-btn w3-green w3-margin-top")) ?>
		 
	</div>
</div>

