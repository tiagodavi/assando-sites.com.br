<?php
/**
 * Model de auals
 * 
 * @author			Thiago Belem <contato@thiagobelem.net>
 * 
 * @package		AssandoSites
 * @subpackage		Model
 */

/**
 * Model de aulas
 */
class Lesson extends AppModel {
	
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
	public $order = array('Lesson.datetime' => 'DESC');
	
	/**
	 * Aulas pertencem à...
	 * 
	 * @var array
	 */
	public $belongsTo = array('MyClass');
	
}