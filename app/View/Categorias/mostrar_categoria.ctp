<div class="w3-container" style="margin-left:7%">
<br><br>
<div class="w3-label w3-padding-bottom ">Para comprar debes logearte primero</div>
<?php foreach ($categorias as $categoria): ?>
	<div class="w3-third" style="height:100%; width:50%px; padding-bottom:20px">
		<div class="w3-card-4 test" style="width:92%;max-width:300px;">		  
			  <?= $this->Html->link($this->Html->image($categoria['Categoria']['imagen'],array("style"=>"width:100%;max-width:300px;height:200px;")),"seccion/".$categoria['Categoria']['id'],array('escape'=>false));
			   ?>
			  <div class="w3-container w3-center">
				  <h4><b><?=$categoria['Categoria']['nombre'] ?></b></h4>    
				  <p>Click aquí</p>    
			  </div>
		</div>
	</div>



	
<?php endforeach; ?>




	

