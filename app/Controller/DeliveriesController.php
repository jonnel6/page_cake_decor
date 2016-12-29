<?php
App::uses('AppController', 'Controller');
/**
 * Deliveries Controller
 *
 * @property Delivery $Delivery
 * @property PaginatorComponent $Paginator
 */
class DeliveriesController extends AppController {

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
		$this->Delivery->recursive = 0;
		$this->set('deliveries', $this->Paginator->paginate());
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
		if (!$this->Delivery->exists($id)) {
			throw new NotFoundException(__('Invalid delivery'));
		}
		$options = array('conditions' => array('Delivery.' . $this->Delivery->primaryKey => $id));
		$this->set('delivery', $this->Delivery->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'layout_admin';
		if ($this->request->is('post')) {
			$this->Delivery->create();
			if ($this->Delivery->save($this->request->data)) {
				$this->Session->setFlash(__('The delivery has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The delivery could not be saved. Please, try again.'));
			}
		}
		$pedidos = $this->Delivery->Pedido->find('list');
		$this->set(compact('pedidos'));
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
		if (!$this->Delivery->exists($id)) {
			throw new NotFoundException(__('Invalid delivery'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Delivery->save($this->request->data)) {
				$this->Session->setFlash(__('The delivery has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The delivery could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Delivery.' . $this->Delivery->primaryKey => $id));
			$this->request->data = $this->Delivery->find('first', $options);
		}
		$pedidos = $this->Delivery->Pedido->find('list');
		$this->set(compact('pedidos'));
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
		$this->Delivery->id = $id;
		if (!$this->Delivery->exists()) {
			throw new NotFoundException(__('Invalid delivery'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Delivery->delete()) {
			$this->Session->setFlash(__('The delivery has been deleted.'));
		} else {
			$this->Session->setFlash(__('The delivery could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
