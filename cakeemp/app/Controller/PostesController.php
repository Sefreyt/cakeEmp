<?php
App::uses('AppController', 'Controller');
/**
 * Postes Controller
 *
 * @property Poste $Poste
 * @property PaginatorComponent $Paginator
 */
class PostesController extends AppController {

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
		$this->Poste->recursive = 1;
		$this->set('postes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Poste->exists($id)) {
			throw new NotFoundException(__('Invalid poste'));
		}
		$options = array('conditions' => array('Poste.' . $this->Poste->primaryKey => $id));
		$this->set('poste', $this->Poste->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Poste->create();
			if ($this->Poste->save($this->request->data)) {
				$this->Session->setFlash(__('The poste has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The poste could not be saved. Please, try again.'));
			}
		}
		$employes = $this->Poste->Employe->find('list');
		$this->set(compact('employes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Poste->exists($id)) {
			throw new NotFoundException(__('Invalid poste'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Poste->save($this->request->data)) {
				$this->Session->setFlash(__('The poste has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The poste could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Poste.' . $this->Poste->primaryKey => $id));
			$this->request->data = $this->Poste->find('first', $options);
		}
		$employes = $this->Poste->Employe->find('list');
		$this->set(compact('employes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Poste->id = $id;
		if (!$this->Poste->exists()) {
			throw new NotFoundException(__('Invalid poste'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Poste->delete()) {
			$this->Session->setFlash(__('The poste has been deleted.'));
		} else {
			$this->Session->setFlash(__('The poste could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Poste->recursive = 0;
		$this->set('postes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Poste->exists($id)) {
			throw new NotFoundException(__('Invalid poste'));
		}
		$options = array('conditions' => array('Poste.' . $this->Poste->primaryKey => $id));
		$this->set('poste', $this->Poste->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Poste->create();
			if ($this->Poste->save($this->request->data)) {
				$this->Session->setFlash(__('The poste has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The poste could not be saved. Please, try again.'));
			}
		}
		$employes = $this->Poste->Employe->find('list');
		$this->set(compact('employes'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Poste->exists($id)) {
			throw new NotFoundException(__('Invalid poste'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Poste->save($this->request->data)) {
				$this->Session->setFlash(__('The poste has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The poste could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Poste.' . $this->Poste->primaryKey => $id));
			$this->request->data = $this->Poste->find('first', $options);
		}
		$employes = $this->Poste->Employe->find('list');
		$this->set(compact('employes'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Poste->id = $id;
		if (!$this->Poste->exists()) {
			throw new NotFoundException(__('Invalid poste'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Poste->delete()) {
			$this->Session->setFlash(__('The poste has been deleted.'));
		} else {
			$this->Session->setFlash(__('The poste could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
