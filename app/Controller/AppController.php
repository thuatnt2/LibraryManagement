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
class AppController extends Controller {

    var $helpers = array('LinkGenerator', 'Form', 'Html', 'Session', 'TvFck', 'Fck', 'Js',
        'Usermgmt.UserAuth', 'Table', 'Autocomplete', 'Common', 'Text');
    public $components = array('Session', 'RequestHandler', 'Usermgmt.UserAuth', 'Common', 'Paginator');
    var $layout = 'admin';

    function beforeFilter() {
        $this->userAuth();
        if (!$this->Session->check('CiculationPolicy')) {
            $this->loadModel('CiculationPolicy');
            $fields = array('id', 'name', 'amount', 'unit_of');
            $policies = $this->CiculationPolicy->find('all', array('fields' => $fields));
            $ss_policies = array();
            foreach ($policies as $policy) {
                $ss_policies[$policy['CiculationPolicy']['id']] = array(
                    'name' => $policy['CiculationPolicy']['name'],
                    'amount' => $policy['CiculationPolicy']['amount'],
                    'unit_of' => $policy['CiculationPolicy']['unit_of'],
                );
            }
            $this->Session->write('CiculationPolicy', $ss_policies);
        }
    }

    private function userAuth() {
        $this->UserAuth->beforeFilter($this);
    }

    public function active($controller, $model, $id, $status, $page = 1) {
        $this->loadModel($model);
        $this->$model->id = $id;
        $this->$model->saveField('is_active', $status);
        if ($page == 1)
            $this->redirect(array('controller' => $controller, 'action' => 'index'));
        else
            $this->redirect(array('controller' => $controller, 'action' => 'index', 'page' => $page));
    }

    public function getLog($model) {
        $log = $this->$model->getDataSource()->getLog(false, false);
        debug($log);
        exit();
    }

    public function saveLog($content, $reader_name, $reader_code, $type) {
        $this->loadModel('Log');
        $data = array();
        $data['Log']['reader_name'] = $reader_name;
        $data['Log']['reader_code'] = $reader_code;
        $user = $user = $this->UserAuth->getUser();
        $data['Log']['librarian'] = $user['User']['fullname'];
        $data['Log']['content'] = $content;
        $data['Log']['type'] = $type;
        if ($this->Log->save($data)) {
            return true;
        } else {
            return false;
        }
    }

    function _setErrorLayout() {
        if ($this->name == 'CakeError') {
            $this->layout = 'new';
        }
    }

    function beforeRender() {
        $this->_setErrorLayout();
    }

 
}
