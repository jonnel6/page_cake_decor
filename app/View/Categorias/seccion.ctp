<div class="w3-container" style="margin-left:3%">
<br><br>

<?php foreach ($categoria['Producto'] as $producto): ?>
	
	
		<div class="w3-quarter" style="height:100%; width:50%px; padding-bottom:20px">
			<div class="w3-card-4 test" style="width:92%;max-width:300px;" id="<?=$producto['id']?>">		
					<div class="hover-box w3-quarter" style="display:none; height:100%"  id="hb<?= $producto['id']?>">
						<button class="botoncompra w3-btn w3-red w3-card-4" style="width:92%px" id='<?= $producto['id']?>'><span class="fa fa-plus"></span> Comprar</button>
					</div>  
				  <?= $this->Html->link($this->Html->image($producto['imagen'],array("style"=>"width:100%;max-width:300px;height:200px;")),"#",array('escape'=>false));
				   ?>		
				  <div class="w3-container" >
					  <h4 style="text-overflow:ellipsis; white-space:nowrap; overflow:hidden"><b><?=$producto['nombre'] ?></b></h4>    				     
				  </div>
			</div>
		</div>




	
<?php endforeach; ?>




	
