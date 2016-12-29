<?php
App::uses('AppController', 'Controller');
/**
 * Detallepedidos Controller
 *
 * @property Detallepedido $Detallepedido
 * @property PaginatorComponent $Paginator
 */
class DetallepedidosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Session');
	public $helpers = array('Js');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout = 'layout_admin';
		$this->Detallepedido->recursive = 0;
		$this->set('detallepedidos', $this->Paginator->paginate());
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
		if (!$this->Detallepedido->exists($id)) {
			throw new NotFoundException(__('Invalid detallepedido'));
		}
		$options = array('conditions' => array('Detallepedido.' . $this->Detallepedido->primaryKey => $id));
		$this->set('detallepedido', $this->Detallepedido->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'layout_admin';
		if ($this->request->is('post')) {
			$this->Detallepedido->create();
			if ($this->Detallepedido->save($this->request->data)) {
				$this->Session->setFlash(__('The detallepedido has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detallepedido could not be saved. Please, try again.'));
			}
		}
		$pedidos = $this->Detallepedido->Pedido->find('list');
		$productos = $this->Detallepedido->Producto->find('list');
		$this->set(compact('pedidos', 'productos'));
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
		if (!$this->Detallepedido->exists($id)) {
			throw new NotFoundException(__('Invalid detallepedido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Detallepedido->save($this->request->data)) {
				$this->Session->setFlash(__('The detallepedido has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detallepedido could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Detallepedido.' . $this->Detallepedido->primaryKey => $id));
			$this->request->data = $this->Detallepedido->find('first', $options);
		}
		$pedidos = $this->Detallepedido->Pedido->find('list');
		$productos = $this->Detallepedido->Producto->find('list');
		$this->set(compact('pedidos', 'productos'));
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
		$this->Detallepedido->id = $id;
		if (!$this->Detallepedido->exists()) {
			throw new NotFoundException(__('Invalid detallepedido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Detallepedido->delete()) {
			$this->Session->setFlash(__('The detallepedido has been deleted.'));
		} else {
			$this->Session->setFlash(__('The detallepedido could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function pideya($id = null)
	{
		
		$pedidos = $this->Detallepedido->Pedido->find('list');
		$productos = $this->Detallepedido->Producto->find('list',array("fields"=>'nombre','id'));
		$this->set(compact('pedidos', 'productos'));	
		$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
		$this->set('extraido', $this->Producto->find('first', $options));
	
	}
}
