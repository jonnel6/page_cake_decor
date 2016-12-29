<?php
App::uses('AppController', 'Controller');
/**
 * Reservas Controller
 *
 * @property Reserva $Reserva
 * @property PaginatorComponent $Paginator
 */
class ReservasController extends AppController {

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
		$this->Reserva->recursive = 0;
		$this->set('reservas', $this->Paginator->paginate());
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
		if (!$this->Reserva->exists($id)) {
			throw new NotFoundException(__('Invalid reserva'));
		}
		$options = array('conditions' => array('Reserva.' . $this->Reserva->primaryKey => $id));
		$this->set('reserva', $this->Reserva->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'layout_admin';
		if ($this->request->is('post')) {
			$this->Reserva->create();
			if ($this->Reserva->save($this->request->data)) {
				$this->Session->setFlash(__('The reserva has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reserva could not be saved. Please, try again.'));
			}
		}
		$pedidos = $this->Reserva->Pedido->find('list');
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
		if (!$this->Reserva->exists($id)) {
			throw new NotFoundException(__('Invalid reserva'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Reserva->save($this->request->data)) {
				$this->Session->setFlash(__('The reserva has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reserva could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reserva.' . $this->Reserva->primaryKey => $id));
			$this->request->data = $this->Reserva->find('first', $options);
		}
		$pedidos = $this->Reserva->Pedido->find('list');
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
		$this->Reserva->id = $id;
		if (!$this->Reserva->exists()) {
			throw new NotFoundException(__('Invalid reserva'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Reserva->delete()) {
			$this->Session->setFlash(__('The reserva has been deleted.'));
		} else {
			$this->Session->setFlash(__('The reserva could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
