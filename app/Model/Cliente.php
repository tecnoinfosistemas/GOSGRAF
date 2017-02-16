<?php
App::uses('AppModel', 'Model');
/**
 * Cliente Model
 *
 */
class Cliente extends AppModel {

	/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'cliente';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id_cliente';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id_cliente';


}