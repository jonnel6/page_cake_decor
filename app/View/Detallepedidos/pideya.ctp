<div class="w3-container">
    <div class="w3-half w3-card-4">
    	<?= $this->Form->create('Pedido',['class'=>'w3-form','url'=>['action'=>'pedidoya']]); ?>
    	<?= $this->Form->input('Cliente',['required'=>true,'class'=>'w3-input w3-border w3-margin-bottom']) ?>
    	<?= $this->Form->input('Producto',['required'=>true,'id'=>'precioproducto','class'=>'w3-select w3-border w3-margin-bottom']) ?>
    	<?= $this->Form->input('T/und',['required'=>true,'value'=>'Unidad','class'=>'w3-input w3-border w3-margin-bottom']) ?>
    	<?= $this->Form->input('Cantidad',['required'=>true,'id'=>'cantidad_producto','class'=>'w3-input w3-border w3-margin-bottom']) ?>
    	<?= $this->Form->input('Precio',['required'=>true,'id'=>'poner_precio','value'=>$extraido['Producto']['precio'],'class'=>'w3-input w3-border w3-margin-bottom']) ?>
		<?= $this->Form->submit('Submit',array('class'=>'w3-btn w3-red')) ?>






</div>

</div>
