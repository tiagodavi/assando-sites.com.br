<?php
/**
 * Model de alunos
 * 
 * @author			Thiago Belem <contato@thiagobelem.net>
 * 
 * @package 		AssandoSites
 * @subpackage 	Model
 */

/**
 * Model de alunos
 */
class Aluno extends AppModel {
	
	/**
	 * Campo título
	 * 
	 * @var string
	 */
	public $displayField = 'nome';

	/**
	 * Relação 1:1 (hasOne)
	 * 
	 * @var array
	 */
	public $hasOne = array('Informacao');

	/**
	 * Relação 1:N (belongsTo)
	 * 
	 * @var array
	 */
	public $belongsTo = array('Status');

	/**
	 * Relação N:N (hasAndBelongsToMany)
	 * 
	 * @var array
	 */
	public $hasAndBelongsToMany = array('Turma', 'Aula');
	
	/**
	 * Campos virtuais
	 * 
	 * @var array
	 */
	public $virtualFields = array('nome_completo' => "CONCAT(Aluno.nome, ' ', Aluno.sobrenome)");
	
}