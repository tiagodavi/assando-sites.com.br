<?php
/**
 * Model de arquivos
 * 
 * @author			Thiago Belem <contato@thiagobelem.net>
 * 
 * @package		AssandoSites
 * @subpackage		Model
 */

/**
 * Model de arquivos
 */
class MyFile extends AppModel {
	
	/**
	 * Nome da tabela
	 * 
	 * @var string
	 */
	public $useTable = 'files';
	
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
	public $order = array('MyFile.created' => 'DESC');
	
	/**
	 * Turmas pertencem à...
	 * 
	 * @var array
	 */
	public $belongsTo = array(
		'Status' => array(
			'conditions' => array('Status.type' => null)
		),
		'MyClass'
	);
	
}