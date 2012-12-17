<?php
	
	class Message extends AppModel {
		
		var $name = 'Message';

		var $belongsTo = array(
			'Visitor' => array(
				'className' => 'Visitor',
				'foreignKey' => 'visitor_id'
				),
			'Conversation' => array(
				'className' => 'Conversation',
				'foreignKey' => 'conversation_id'
				)
		);
	}

?>