<?php
/**
 * Model de turmas
 * 
 * @author			Thiago Belem <contato@thiagobelem.net>
 * 
 * @package		AssandoSites
 * @subpackage		Model
 */

/**
 * Model de turmas
 */
class MyClass extends AppModel {
	
	/**
	 * Nome da tabela
	 * 
	 * @var string
	 */
	public $useTable = 'classes';
	
	/**
	 * Campo título
	 * 
	 * @var string
	 */
	public $displayField = 'title';
	
	/**
	 * Ordem padrão
	 * 
	 * @var array
	 */
	public $order = array('MyClass.start' => 'DESC');
	
	/**
	 * Campos virtuais
	 * 
	 * @var array
	 */
	public $virtualFields = array(
		'shortname' => "CONCAT(MyClass.title, ' (', DATE_FORMAT(MyClass.start, '%d/%m'), ')')"
	);
	
	/**
	 * Turmas pertencem à...
	 * 
	 * @var array
	 */
	public $belongsTo = array(
		'Status' => array(
			'conditions' => array('Status.type' => 'Class')
		)
	);
	
	/**
	 * Turmas contém muitos...
	 * 
	 * @var array
	 */
	public $hasMany = array('Lesson', 'MyFile');
	
}