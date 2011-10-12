<?php
/**
 * Controller da aplicação
 * 
 * @author			Thiago Belem <contato@thiagobelem.net>
 * 
 * @package		AssandoSites
 * @subpackage		Controller
 */

/**
 * Controller da aplicação
 */
class AppController extends Controller {
	
	/**
	 * Antes de filtrar as actions da aplicação
	 * 
	 * Troca o layout do admin 
	 */
	public function beforeFilter() {

		$this->loadModel('Student');
		$this->Student->find('all');
		$this->Student->MyClass->find('all');
		$this->Student->MyClass->Lesson->find('all');
		$this->Student->Lesson->find('all');
		
		// Troca o layout das telas de admin
		if (isset($this->params['prefix']) && $this->params['prefix'] == 'admin') {
			$this->layout = 'admin';
		}
	}
	
}