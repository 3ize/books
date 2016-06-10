<?php
App::uses('AppController', 'Controller');
/**
 * Lends Controller
 *
 * @property Lend $Lend
 * @property PaginatorComponent $Paginator
 */
class LendsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Lend->recursive = 0;
		$this->set('lends', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Lend->exists($id)) {
			throw new NotFoundException(__('Invalid lend'));
		}
		$options = array('conditions' => array('Lend.' . $this->Lend->primaryKey => $id));
		$this->set('lend', $this->Lend->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lend->create();
			if ($this->Lend->save($this->request->data)) {
				$this->Session->setFlash(__('The lend has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lend could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$users = $this->Lend->User->find('list');
		$books = $this->Lend->Book->find('list');
		$this->set(compact('users', 'books'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Lend->exists($id)) {
			throw new NotFoundException(__('Invalid lend'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Lend->save($this->request->data)) {
				$this->Session->setFlash(__('The lend has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lend could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Lend.' . $this->Lend->primaryKey => $id));
			$this->request->data = $this->Lend->find('first', $options);
		}
		$users = $this->Lend->User->find('list');
		$books = $this->Lend->Book->find('list');
		$this->set(compact('users', 'books'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Lend->id = $id;
		if (!$this->Lend->exists()) {
			throw new NotFoundException(__('Invalid lend'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Lend->delete()) {
			$this->Session->setFlash(__('The lend has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The lend could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
