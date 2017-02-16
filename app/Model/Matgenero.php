<?php
App::uses('AppModel', 'Model');
/**
 * Material Model
 *
 */
class Matgenero extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'matgenero';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id_genero';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id_genero';

}
