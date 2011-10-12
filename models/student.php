<?php
/**
 * Model de alunos
 * 
 * @author			Thiago Belem <contato@thiagobelem.net>
 * 
 * @package		AssandoSites
 * @subpackage		Model
 */

/**
 * Model de alunos
 */
class Student extends AppModel {
	
	/**
	 * Campo título
	 * 
	 * @var string
	 */
	public $displayField = 'name';
	
	/**
	 * Ordem padrão
	 * 
	 * @var array
	 */
	public $order = array('Student.name' => 'ASC');
	
	/**
	 * Campos virtuais
	 * 
	 * @var array
	 */
	public $virtualFields = array(
		'fullname' => "CONCAT(Student.name, ' ', Student.surname)"
	);
	
	/**
	 * Alunos contém um...
	 * 
	 * @var array
	 */
	public $hasOne = array('Information');
	
	/**
	 * Alunos pertencem à...
	 * 
	 * @var array
	 */
	public $belongsTo = array(
		'Status' => array(
			'conditions' => array('Status.type' => 'Student')
		)
	);
	
	/**
	 * Alunos contém muitos...
	 * 
	 * @var array
	 */
	public $hasMany = array('Payment');
	
	/**
	 * Alunos contém e pertencem à muitos...
	 * 
	 * @var array
	 */
	public $hasAndBelongsToMany = array('MyClass', 'Lesson');
	
}