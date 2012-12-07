<?php
App::uses('AppController', 'Controller');
/**
 * Publicaciones Controller
 *
 * @property Publicacione $Publicacione
 */
class PublicacionesController extends AppController {

	var $uses = array('Publicacione', 'Evento', 'Memoria', 'Articulo', 'Proyecto');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Publicacione->recursive = 0;
		$this->set('publicaciones', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Publicacione->id = $id;
		if (!$this->Publicacione->exists()) {
			throw new NotFoundException(__('Invalid publicacione'));
		}
		$this->set('publicacione', $this->Publicacione->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Publicacione->create();
			$request = $this->request->data;
			$this->Publicacione->set($request['Publicacione']);
			if($this->Publicacione->validates()){
				if($request['Publicacione']['tipo'] == 1){
					$this->Evento->set($request['Evento']);
					if($this->Evento->validates()){
						if($this->Publicacione->save($request['Publicacione'])){
							$request['Evento']['publicacione_id'] = $this->Publicacione->id;
							if($this->Evento->save($request['Evento'])){
								$this->Session->setFlash(__('The publicacione has been saved'));
								$this->redirect(array('action', 'eventos'));
							}else{
								$this->Session->setFlash(__('The publicacione could not be saved. Please, try again.'));
							}
						}
					}
				}else{
					if($request['Publicacione']['tipo'] == 2){
						$this->Memoria->set($request['Memoria']);
						if($this->Memoria->validates()){
							if($this->Publicacione->save($request['Publicacione'])){
								$request['Memoria']['publicacione_id'] = $this->Publicacione->id;
								if($this->Memoria->save($request['Memoria'])){
									$this->Session->setFlash(__('The publicacione has been saved'));
									$this->redirect(array('action', 'memorias'));
								}else{
									$this->Session->setFlash(__('The publicacione could not be saved. Please, try again.'));
								}
							}
						}
					}else{
						if($request['Publicacione']['tipo'] == 3){
							$this->Articulo->set($request['Articulo']);
							if($this->Articulo->validates()){
								if($this->Publicacione->save($request['Publicacione'])){
									$request['Articulo']['publicacione_id'] = $this->Publicacione->id;
									if($this->Articulo->save($request['Articulo'])){
										$this->Session->setFlash(__('The publicacione has been saved'));
										$this->redirect(array('action', 'articulos'));
									}else{
										$this->Session->setFlash(__('The publicacione could not be saved. Please, try again.'));
									}
								}
							}
						}else{
							if($request['Publicacione']['tipo'] == 4){
								$this->Proyecto->set($request['Proyecto']);
								if($this->Proyecto->validates()){
									$request['Proyecto']['publicacione_id'] = $this->Publicacione->id;
									if($this->Proyecto->save($request['Proyecto'])){
										$this->Session->setFlash(__('The publicacione has been saved'));
										$this->redirect(array('action', 'articulos'));
									}else{
										$this->Session->setFlash(__('The publicacione could not be saved. Please, try again.'));
									}
								}
							}else{

							}
						}
					}
				}
			}
		}
	}

	public function nuevo_evento() {}

	public function nueva_memoria(){}

	public function nuevo_proyecto(){}

	public function nuevo_articulo(){}

	public function eventos(){
		$answer = $this->Publicacione->find('all');
		die($answer[11]['Publicacione']['id']);
	}

	public function articulos(){}

	public function memorias(){}
	
	public function proyectos(){}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Publicacione->id = $id;
		if (!$this->Publicacione->exists()) {
			throw new NotFoundException(__('Invalid publicacione'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Publicacione->save($this->request->data)) {
				$this->Session->setFlash(__('The publicacione has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The publicacione could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Publicacione->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Publicacione->id = $id;
		if (!$this->Publicacione->exists()) {
			throw new NotFoundException(__('Invalid publicacione'));
		}
		if ($this->Publicacione->delete()) {
			$this->Session->setFlash(__('Publicacione deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Publicacione was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
