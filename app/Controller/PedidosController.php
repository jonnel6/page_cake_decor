<?php
App::uses('AppController', 'Controller');
/**
 * Pedidos Controller
 *
 * @property Pedido $Pedido
 * @property PaginatorComponent $Paginator
 */
class PedidosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout = 'layout_admin';
		$this->Pedido->recursive = 0;
		$this->set('pedidos', $this->Paginator->paginate());
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
		if (!$this->Pedido->exists($id)) {
			throw new NotFoundException(__('Invalid pedido'));
		}
		$options = array('conditions' => array('Pedido.' . $this->Pedido->primaryKey => $id));
		$this->set('pedido', $this->Pedido->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'layout_admin';
		if ($this->request->is('post')) {
			$this->Pedido->create();
			if ($this->Pedido->save($this->request->data)) {
				$this->Session->setFlash(__('The pedido has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pedido could not be saved. Please, try again.'));
			}
		}
		$clientes = $this->Pedido->User->find('list');
		$this->set(compact('clientes'));
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
		if (!$this->Pedido->exists($id)) {
			throw new NotFoundException(__('Invalid pedido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pedido->save($this->request->data)) {
				$this->Session->setFlash(__('The pedido has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pedido could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pedido.' . $this->Pedido->primaryKey => $id));
			$this->request->data = $this->Pedido->find('first', $options);
		}
		$clientes = $this->Pedido->Cliente->find('list');
		$this->set(compact('clientes'));
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
		$this->Pedido->id = $id;
		if (!$this->Pedido->exists()) {
			throw new NotFoundException(__('Invalid pedido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pedido->delete()) {
			$this->Session->setFlash(__('The pedido has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pedido could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function add_pedido()
	{
		debug($this->request->data);
		if ($this->request->is('post')) {

			$this->Pedido->create();	
					
			if ($this->Pedido->save($this->request->data)) {

				$this->loadModel('Detallepedido');	
					
				$last_id = $this->Pedido->getLastInsertID();		
				unset($this->request->data['Pedido']);						
				$this->request->data['Detallepedido']['pedido_id']= $last_id;

				foreach ($_SESSION['carrito'] as $row) {
					$this->Detallepedido->create();	
					$this->request->data['Detallepedido']['pedido_id']=$last_id;
					$this->request->data['Detallepedido']['producto_id']=$this->request->data['Detallepedido']['producto_id'];
					$this->request->data['Detallepedido']['tipo_unidad']="Unidad";
					$this->request->data['Detallepedido']['cantidad']=$this->request->data['Detallepedido']['cantidad'];
					$this->request->data['Detallepedido']['precio_total']=$this->request->data['Detallepedido']['precio_total'];
					$this->Detallepedido->save($this->request->data);
					
				}

				
				
			} else {
				$this->Session->setFlash(__('El pedido no se guardo. Vuelve a intentar'));
			}
		}
		unset($_SESSION['carrito']);	
	return $this->redirect(array("controller"=>"Categorias",'action' => 'mostrar_categoria'));
	}
	


}
