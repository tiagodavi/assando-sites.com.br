<?php
/**
 * Controller de alunos
 * 
 * @author			Thiago Belem <contato@thiagobelem.net>
 * 
 * @package		AssandoSites
 * @subpackage		Controller
 */

/**
 * Controller de alunos
 */
class StudentsController extends AppController {
	
	public function admin_dashboard() {
		
	}
	
	public function admin_index() {
		$this->paginate = array(
			'contain' => array('Status', 'MyClass')
		);
		
		$this->set(array(
			'title_for_layout' => 'Alunos cadastrados',
		
			'data' => $this->paginate('Student')
		));
	}
	
	public function admin_edit($id) {
		$this->Student->id = $id;
		$this->Student->contain('Information', 'MyClass');
				
		if (!empty($this->data)) {
			$this->Student->saveAll($this->data);
		}
		
		$this->data = $this->Student->read();
		
		$this->set(array(
			'title_for_layout' => 'Editando Aluno',
			'subtitle_for_layout' => $this->data['Student']['fullname'],
		
			'Status' => $this->Student->Status->find('list', array('conditions' => array('Status.type' => 'Student'))),
			'MyClass' => $this->Student->MyClass->find('list', array('fields' => 'shortname')),
		));
	}
	
}