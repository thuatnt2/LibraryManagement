<?php 
	$user = $this->Session->read('UserAuth');
	if($user['User']['user_group_id'] == ADMIN_GROUP_ID){
		echo $this->element('admin/dashboard/admin');
	}
	else if($user['User']['user_group_id'] == LIBRARIAN_GROUP_ID){
		echo $this->element('admin/dashboard/librarian');
	}
	else if($user['User']['user_group_id'] == EDITOR_GROUP_ID){
		echo $this->element('admin/dashboard/editor');
	}
?>