<?php
App::uses('AppModel', 'Model');
class Claim extends AppModel {
	public $belongsTo = array(
		'User',
	);
	
}
?>