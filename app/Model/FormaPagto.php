<?php
App::uses('AppModel', 'Model');
/**
 * FormaPagto Model
 *
 */
class FormaPagto extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'forma_pagto';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id_pagto';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id_pagto';

}
