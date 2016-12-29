<?php
App::uses('AppController', 'Controller');
/**
 * Inventarios Controller
 *
 * @property Inventario $Inventario
 * @property PaginatorComponent $Paginator
 */
class InventariosController extends AppController {

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
		$this->Inventario->recursive = 0;
		$this->set('inventarios', $this->Paginator->paginate());
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
		if (!$this->Inventario->exists($id)) {
			throw new NotFoundException(__('Invalid inventario'));
		}
		$options = array('conditions' => array('Inventario.' . $this->Inventario->primaryKey => $id));
		$this->set('inventario', $this->Inventario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'layout_admin';
		if ($this->request->is('post')) {
			$this->Inventario->create();
			if ($this->Inventario->save($this->request->data)) {
				$this->Session->setFlash(__('The inventario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inventario could not be saved. Please, try again.'));
			}
		}
		$productos = $this->Inventario->Producto->find('list');
		$this->set(compact('productos'));
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
		if (!$this->Inventario->exists($id)) {
			throw new NotFoundException(__('Invalid inventario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Inventario->save($this->request->data)) {
				$this->Session->setFlash(__('The inventario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inventario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Inventario.' . $this->Inventario->primaryKey => $id));
			$this->request->data = $this->Inventario->find('first', $options);
		}
		$productos = $this->Inventario->Producto->find('list');
		$this->set(compact('productos'));
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
		$this->Inventario->id = $id;
		if (!$this->Inventario->exists()) {
			throw new NotFoundException(__('Invalid inventario'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Inventario->delete()) {
			$this->Session->setFlash(__('The inventario has been deleted.'));
		} else {
			$this->Session->setFlash(__('The inventario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
