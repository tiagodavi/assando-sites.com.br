<?php
/**
 * Model da aplicação
 * 
 * @author			Thiago Belem <contato@thiagobelem.net>
 * 
 * @package		AssandoSites
 * @subpackage		Model
 */

/**
 * Model da aplicação
 */
class AppModel extends Model {
	
	/**
	 * Comportamentos (behaviors) padrões de todos os models
	 * 
	 * @var array
	 */
	public $actsAs = array('Containable');
	
	/**
	 * Buscas não recursivas
	 * 
	 * @var boolean|integer
	 */
	public $recursive = -1;
	
	/**
	 * Cacheia todas as consultas
	 * 
	 * @var boolean
	 */
	public $cacheQueries = true;
	
}