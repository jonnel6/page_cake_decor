
<section class="catalogo">
            <div class="w3-container">
                <div class="w3-row slides w3-container">
                    <div class=" slider w3-border-amber w3-hover-border-red w3-col l6 m5 s12 w3-center">
                        <p class="w3-text-shadow w3-green"> ¡ OFERTAS FLASH !</p>
                              <div class="w3-content w3-section" style="max-width:600px">    
                              <?= $this->Html->image('muñeco.jpg',array('class'=> "mySlides w3-image")) ?>  
                              <?= $this->Html->image('portacosas.jpg',array("class"=>"mySlides w3-image")) ?>

                              <?= $this->Html->image('zapatitos.jpg',array("class"=>"mySlides w3-image")) ?>
                                        </div>

                    </div>   
                    
                    <div class="w3-border-aqua w3-hover-border-red w3-col l6 m5 s12 w3-center slide-titulo">
                        <p class="w3-text-shadow w3-pink">¡ PRECIO ESTRELLA !</p>
                            <div class="w3-content w3-section" style="max-width:600px">
                               <?= $this->Html->image('estrella1.jpg',array('class'=> "mySlides2 w3-image")) ?>  
                              <?= $this->Html->image('estrella2.jpg',array("class"=>"mySlides2 w3-image")) ?>  
                             
                            </div>

                    </div>  
                    
                                       
                </div>
                
                <div class="secciones">
                    <div class="w3-blue w3-center seccion1">
                        <p class="w3-text-shadow"> - EXPLORAR POR SECCIONES - </p>
                    </div>
                    
                    <div class="w3-row-padding w3-container">
                        <a href="categorias/seccion/1"><div class="w3-col m4 w3-hover-opacity w3-indigo w3-center">                    
                        <p>BISUTERÍAS</p>                   
                        </div>
                        </a>   
                        
                        <a href="categorias/seccion/5"><div class="w3-col m4 w3-hover-opacity w3-green w3-center">                            
                        <p >DECORACIÓN</p>
                        </div>
                        </a>
                        
                        <a href="categorias/seccion/9"><div class="w3-col m4 w3-hover-opacity w3-yellow w3-center">       
                        <p>PARA TU COCINA</p>  
                        </div>
                        </a>
                       
                    </div>
                    
                    <div class="w3-row-padding seccion2 w3-container">
                        
                        <a href="categorias/seccion/11"><div class="w3-col m4 w3-hover-opacity w3-blue w3-center">
                        <p>ARREGLOS FLORALES</p>
                        </div>
                        </a>
                        
                        <a href="categorias/seccion/13"><div class="w3-col m4 w3-hover-opacity w3-pink w3-center ">
                            <p>DETALLES DE AMOR</p>
                        </div>
                        </a>
                        
                        <a href="categorias/seccion/28">
                        <div class="w3-col m4 w3-purple w3-hover-opacity w3-center ">
                            <p>PARA EL BAÑO</p>
                        </div>
                        </a>
                    </div>
                </div>
                
            </div>            
        </section>
<div class="w3-container"> 

  <div id="id01" class="w3-modal" style="display:block">
    <div class="w3-modal-content" >
      <div class="w3-container  w3-padding-top  w3-margin-top">
        <span onClick="location.href='../'"  class="w3-closebtn">&times;</span>
        <?= $this->Form->create('User',['class' =>'w3-container aa-login-form']); ?>
                             <?= $this->Form->input('username',[
                             'type'=> 'text',
                             'placeholder' => 'Ingresa usuario',
                             'required' => true,
                             'class'=>'w3-input w3-border w3-margin-bottom']) ?>
                             <?= $this->Form->input('password',[
                             'type'=>'password',
                             'placeholder' => "Ingresa contraseña",
                             'required'=>true,
                             'class'=>'w3-input w3-border w3-margin-bottom']) ?>                             
                             <?= $this->Form->submit('Login',[
                             'class'=> 'w3-btn-block w3-green w3-section w3-padding']) ?>
                             <?php $this->Form->end() ?>
      </div>
    </div>
  </div>
</div>
            



                                      
                         
                       
                       