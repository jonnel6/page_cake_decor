<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>:: DecorDesign ::	</title>
	<?php
		echo $this->Html->meta('icon');
		$this->Html->meta(null, null, array(
		  'name' => 'viewport',
		  'content' => 'width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no',
		  'inline' => false
		));
		echo $this->Html->css('https://fonts.googleapis.com/css?family=Montserrat');
		echo $this->Html->css('miestilo');		
		echo $this->Html->css('w3');
		echo $this->Html->css('font-awesome.min.css');		
		echo $this->Html->css('cake.generic.css');		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<?= $this->element('menuprincipal_2')  ?>
		</div>

		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
			
		</div>

		<div id="footer">
			
			
		</div>
	</div>
	
	<?= $this->Html->script('jquery.min.js') ?>
	<?= $this->Html->script('myownjs.js') ?>
	<?= $this->Html->script('menu.js') ?>
	 
</body>
</html>



