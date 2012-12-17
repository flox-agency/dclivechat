<?php

class Conversation extends AppModel {
		
	var $name = 'Conversation';
	
	var $hasMany = array(

			'Message' => array(
				'className' => 'Message',
				'foreignKey' => 'conversation_id'
				)
		);
}
	
	
?>