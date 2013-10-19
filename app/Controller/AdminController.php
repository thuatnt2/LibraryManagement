<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AdminController extends AppController {

	var $layout = 'admin';

	//public $components = array('Paginator');

	function beforeFilter() {
		
	}

	public function dashboard() {
		$title_for_layout = 'Hệ thống quản lí thư viện';
		//$user = $this->UserAuth->getUser();
		$this->set(compact('title_for_layout'));
		if ($this->UserAuth->getGroupId() == EDITOR_GROUP_ID) {
			$this->redirect('/tai-lieu');
		}
	}

	public function logs() {
		$title_for_layout = 'Lịch sử lưu thông';
		$this->loadModel('Log');
		$this->paginate = array('limit' => PAGING_LIMIT);
		$logs = $this->Paginator->paginate('Log');
		$this->set('logs', $logs);
		$this->set('title_for_layout', $title_for_layout);
	}

	public function loadLogs() {

		if ($this->request->is('POST')) {
			$this->layout = null;
			$this->autoRender = false;
			$result = array();
			$limit = PAGING_LIMIT;
			$type = $this->request->data['logType'];
			$this->loadModel('Log');
			if ($type == 'all') {
				$logs = $this->Log->find('all', array('limit' => $limit));
			} else {
				$conds = array('Log.type' => $type);
				$logs = $this->Log->find('all', array('conditions' => $conds, 'limit' => $limit));
			}
			$result['offset'] = $limit;
			$result['logs'] = $logs;
			return json_encode($result);
		}
		return null;
	}

}
