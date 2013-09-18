<?php
App::uses('AppModel', 'Model');
/**
 * LibArticle Model
 *
 */
class LibArticle extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'articleID';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

}
