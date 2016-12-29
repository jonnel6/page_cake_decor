<header class="franja w3-container w3-azulino">
            <div class="w3-container">
                <table style="position:absolute">
                    <tr>
                        <td> <?= $this->Html->link("LOGIN",array('controller'=>'Users', 'action'=> "login"),array('class'=>'w3-btn w3-blue')) ?></td>
                        <td> <?= $this->Html->link("Cerrar Sesión",array('controller'=>'Users', 'action'=> "logout"),array('class'=>'w3-btn w3-red')) ?></td>
                    </tr>
                </table>
               
               

                <div class="w3-clear">
                    
                    <div class="logo">
                        <?php echo $this->Html->link(
                                    $this->Html->image('logo.png', array('alt' => 'LogoDecorDesign', 'border' => '0')),
                                    '#',array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
                                );
                            ?>
                    </div>

                    
                        
                    <div class="menu_bar">
                        <a href="#" class="btn-menu"><span class="fa fa-list"></span>MENU</a>
                    </div>
                        
                    <nav class="w3-gris">
                        <ul id="main-nav" class="w3-clear">
                                <li class="menu-item-1" style="width:10%" ><?= $this->Html->link('INICIO','../pages'); ?></li>
                                
                                <li class="menu-item-2" style="width:15%"><?= $this->Html->link('CONÓCENOS','../pages/conocenos'); ?></li>

                                <li class="menu-item-3" style="width:15%"><?= $this->Html->link('PRODUCTOS', '../Categorias/mostrar_categoria'); ?></li>    

                                <li class="menu-item-4" style="width:18%"><?= $this->Html->link('CONTÁCTANOS','../pages/contactanos'); ?></li>
                                <li class="menu-item-5" style="width:10%"><?= $this->Html->link('PIDE YA!','../Productos/pedido'); ?></li> 

                                <?php if($current_user['role'] === 'ADMINISTRADOR'): ?>                                                    
                                <li class="menu-item-6" style="width:15%"><?= $this->Html->link('ADMINISTRADOR','../Productos'); ?></li>
                                 <?php endif ?>
                        </ul>
                    </nav>
                        
                        <!-- <div class="menu-categorias" style="display:none">
                            <div class="w3-container">
                                    <a href="#" class="category-link ">ARREGLOS FLORALES</a>
                                    <a href="#" class="category-link ">BAÑO</a>
                                    <a href="#" class="category-link ">COCINA</a>
                                    <a href="#" class="category-link ">DECORACIÓN</a>
									<a href="#" class="category-link ">DETALLES DE AMOR</a>
									<a href="#" class="category-link ">VISUTERIAS</a>								
                            
                            </div>
                        </div> -->
                         
                        
                        
                </div>
            
            </div>
           
            
        </header>