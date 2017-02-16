<?php
App::uses('AppModel', 'Model');
/**
 * Fornecedor Model
 *
 */
class Fornecedor extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'fornecedor';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id_fornecedor';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id_fornecedor';

}
