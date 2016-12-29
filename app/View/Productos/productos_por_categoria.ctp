<div class="w3-container" style="margin-left:5%">
<br><br>

<?php foreach ($productos as $producto): ?>
	<div class="w3-third" style="height:100%; width:50%px; padding-bottom:20px">
		<div class="w3-card-4 test" style="width:92%;max-width:300px;">		  
			  <?= $this->Html->link($this->Html->image($producto['Categoria']['imagen'],array("style"=>"width:100%;max-width:300px;height:200px;")),"seccion/".$categoria['Categoria']['nombre'],array('escape'=>false));
			   ?>
			  <div class="w3-container w3-center">
				  <h4><b><?=$categoria['Categoria']['nombre'] ?></b></h4>    
				  <p>Click aquí</p>    
			  </div>
		</div>
	</div>



	
<?php endforeach; ?>




	
