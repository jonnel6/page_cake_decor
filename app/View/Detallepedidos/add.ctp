<div class="detallepedidos w3-container">
<?php echo $this->Form->create('Detallepedido',array('class'=>"w3-form")); ?>
	<fieldset>
		<legend><?php echo __('Haz tu pedido'); ?></legend>
	<?php
		echo $this->Form->input('pedido_id',array("class" => "w3-input"));
		echo $this->Form->input('producto_id');
		echo $this->Form->input('tipo_unidad');
		echo $this->Form->input('cantidad');
		echo $this->Form->input('precio_total');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<div class="w3-container">
    <div class="w3-half w3-card-4">
                         <?= $this->Form->create('User',['class' =>'w3-container aa-login-form','url'=>['controller'=>'Usuarios','action'=>'login']]); ?>
                             <?= $this->Form->input('Usuario',[
                             'type'=> 'text',
                             'placeholder' => 'Ingresa usuario',
                             'required' => true,
                             'class'=>'w3-input w3-border w3-margin-bottom']) ?>
                             <?= $this->Form->input('Password',[
                             'type'=>'password',
                             'placeholder' => "Ingresa contraseña",
                             'required'=>true,
                             'class'=>'w3-input w3-border w3-margin-bottom']) ?>
                             <?= $this->Form->button('Login',[
                             'class'=> 'w3-btn-block w3-green w3-section w3-padding']) ?>

</div>

</div>
