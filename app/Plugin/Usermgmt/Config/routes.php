<?php
/*
	This file is part of UserMgmt.

	Author: Chetan Varshney (http://ektasoftwares.com)

	UserMgmt is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	UserMgmt is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
*/

// Routes for standard actions

Router::connect('/dang-nhap', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'login'));
Router::connect('/logout', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'logout'));
Router::connect('/forgotPassword', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'forgotPassword'));
Router::connect('/activatePassword/*', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'activatePassword'));
Router::connect('/register', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'register'));
Router::connect('/changePassword', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'changePassword'));
Router::connect('/changeUserPassword/*', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'changeUserPassword'));
Router::connect('/addUser', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'addUser'));
Router::connect('/editUser/*', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'editUser'));
Router::connect('/deleteUser/*', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'deleteUser'));
Router::connect('/viewUser/*', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'viewUser'));
Router::connect('/userVerification/*', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'userVerification'));
Router::connect('/allUsers', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'index'));

Router::connect('/permissions', array('plugin' => 'usermgmt', 'controller' => 'user_group_permissions', 'action' => 'index'));
Router::connect('/update_permission', array('plugin' => 'usermgmt', 'controller' => 'user_group_permissions', 'action' => 'update'));
Router::connect('/accessDenied', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'accessDenied'));
Router::connect('/myprofile', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'myprofile'));
Router::connect('/allGroups', array('plugin' => 'usermgmt', 'controller' => 'user_groups', 'action' => 'index'));
Router::connect('/addGroup', array('plugin' => 'usermgmt', 'controller' => 'user_groups', 'action' => 'addGroup'));
Router::connect('/editGroup/*', array('plugin' => 'usermgmt', 'controller' => 'user_groups', 'action' => 'editGroup'));
Router::connect('/deleteGroup/*', array('plugin' => 'usermgmt', 'controller' => 'user_groups', 'action' => 'deleteGroup'));
Router::connect('/emailVerification', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'emailVerification'));

//Readers
Router::connect('/readers', array('plugin' => 'usermgmt', 'controller' => 'readers', 'action' => 'index'));
Router::connect('/dang_ky_ban_doc', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'addReader'));
Router::connect('/deleteReader', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'deleteReader'));

//faculties
Router::connect('/faculties', array('plugin' => 'usermgmt', 'controller' => 'faculties', 'action' => 'index'));
Router::connect('/addFaculty', array('plugin' => 'usermgmt', 'controller' => 'faculties', 'action' => 'add'));
Router::connect('/editFaculty/*', array('plugin' => 'usermgmt', 'controller' => 'faculties', 'action' => 'edit'));
Router::connect('/deleteFaculty/*', array('plugin' => 'usermgmt', 'controller' => 'faculties', 'action' => 'delete'));
//department
Router::connect('/departments', array('plugin' => 'usermgmt', 'controller' => 'departments', 'action' => 'index'));
Router::connect('/addDepartment', array('plugin' => 'usermgmt', 'controller' => 'departments', 'action' => 'add'));
Router::connect('/editDepartment/*', array('plugin' => 'usermgmt', 'controller' => 'departments', 'action' => 'edit'));
Router::connect('/deleteDepartment/*', array('plugin' => 'usermgmt', 'controller' => 'departments', 'action' => 'delete'));
Router::connect('/loadDepartment', array('plugin' => 'usermgmt', 'controller' => 'departments', 'action' => 'loadDepartment'));
