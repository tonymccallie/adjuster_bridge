<?php
App::uses('AppModel', 'Model');
class Policy extends AppModel {
	public $belongsTo = array(
		'User',
	);
	
}
?>