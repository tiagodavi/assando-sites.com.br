<?php
/**
 * Model de status
 * 
 * @author			Thiago Belem <contato@thiagobelem.net>
 * 
 * @package		AssandoSites
 * @subpackage		Model
 */

/**
 * Model de status
 */
class Status extends AppModel {
	
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
	public $order = array('Status.type' => 'ASC', 'Status.name' => 'ASC');
	
}