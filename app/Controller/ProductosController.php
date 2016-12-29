<?php
App::uses('AppController', 'Controller');
/**
 * Productos Controller
 *
 * @property Producto $Producto
 * @property PaginatorComponent $Paginator
 */
class ProductosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('RequestHandler','Paginator','Session');
	

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout = 'layout_admin';
		$this->Producto->recursive = 0;
		$this->set('productos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout = 'layout_admin';
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
		$this->set('producto', $this->Producto->find('first', $options));
	}

	

/**
 * add method
 *
 * @return void
 */
	public function add() {
		 $this->layout = 'layout_admin';		
		if ($this->request->is('post')) {
			$this->Producto->create();

			 $folder = WWW_ROOT.'img'.DS;
			 $filename = $this->data['Producto']['imagen']['name'];
			 move_uploaded_file($this->data['Producto']['imagen']['tmp_name'], $folder.$filename);	
			 unset($this->request->data['Producto']['imagen']);	
			 $this->request->data['Producto']['imagen'] = $filename;

			if ($this->Producto->save($this->request->data)) {
				$this->Session->setFlash(__('The producto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The producto could not be saved. Please, try again.'));
			}
		}
		$categorias = $this->Producto->Categoria->find('list',array("fields"=>array("id","nombre")));
		$this->set(compact('categorias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->layout = 'layout_admin';	
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Producto->save($this->request->data)) {
				$this->Session->setFlash(__('The producto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The producto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
			$this->request->data = $this->Producto->find('first', $options);
		}
		$categorias = $this->Producto->Categoria->find('list',array("fields"=>array("id","nombre")));
		$this->set(compact('categorias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->layout = 'layout_admin';
		$this->Producto->id = $id;
		if (!$this->Producto->exists()) {
			throw new NotFoundException(__('Invalid producto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Producto->delete()) {
			$this->Session->setFlash(__('The producto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The producto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	public function pideya()
	{
		SESSION_START();
		$this->set('answer',$this->Producto->find('list',array("fields"=>array('id','nombre'))));
	}


	public function extraerprecio($id)
		{		
		 $options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
		 $this->set('answer2', $this->Producto->find('first', $options,array("fields"=>array('precio'))));

		}

	public function agregar_carrito($id = null)
	{

		
		$producto_id = $id;
		$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
		$extraido = $this->Producto->find('first',$options);
		$key = $extraido['Producto']['id'];
		$_SESSION['carrito'][$key] = array(
			"nombre_producto" => $extraido['Producto']['nombre'],
			"categoria"=> $extraido['Categoria']['nombre'],
			"precio"=>$extraido['Producto']['precio'],
			"imagen"=>$extraido['Producto']['imagen'],
			"id"=>$extraido['Producto']['id']);
		
	}
		

	public function eliminar_carrito($id = null)
	{
		unset($_SESSION['carrito'][$id]);
		return $this->redirect(array('action' => 'pedido'));
	}

	public function pedido()
	{
		if(!isset($_SESSION['carrito']))
		{
			 $this->Session->setFlash('Aún no se han seleccionado productos', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('controller'=>'categorias','action'=>'mostrar_categoria'));

		}
		$this->loadModel('Pedido');				
		$pedidos = $this->Pedido->find('all');
		
		$detallepedidos = $this->Producto->Detallepedido->find('all');
		$this->set(compact('pedidos','clientes','detallepedidos'));
	}
}
