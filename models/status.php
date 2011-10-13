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
	public $order = array('Status.type' => 'ASC', 'Status.id' => 'ASC');
	
	/**
	 * Status
	 */
	const STATUS_STUDENT_INSCRICAO_PENDENTE = 8;
	const STATUS_STUDENT_INSCRICAO_CONFIRMADA = 9;
	const STATUS_STUDENT_DELETADO = 10;
	
}