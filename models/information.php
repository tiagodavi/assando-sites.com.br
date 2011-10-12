<?php
/**
 * Model de informações
 * 
 * @author			Thiago Belem <contato@thiagobelem.net>
 * 
 * @package		AssandoSites
 * @subpackage		Model
 */

/**
 * Model de informações
 */
class Information extends AppModel {
	
	/**
	 * Informações pertencem à...
	 * 
	 * @var array
	 */
	public $belongsTo = array('Student');
	
}