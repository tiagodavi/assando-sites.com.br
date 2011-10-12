<?php
/**
 * Model de união entre aulas e alunos
 * 
 * @author			Thiago Belem <contato@thiagobelem.net>
 * 
 * @package		AssandoSites
 * @subpackage		Model
 */

/**
 * Model de união entre aulas e alunos
 */
class LessonsStudent extends AppModel {
	
	/**
	 * Alunos pertencem à...
	 * 
	 * @var array
	 */
	public $belongsTo = array('Lesson', 'Student', 'Status');
	
}