<?php
	
	class Visitor extends AppModel {
		
		var $name = 'Visitor';

		var $hasMany = array(
			'Message' => array(
				'className' => 'Message',
				'foreignKey' => 'visitor_id'
			),
			'Visit' => array(
				'className' => 'Visit',
				'foreignKey' => 'visitor_id'
			)
		);
	}

?>