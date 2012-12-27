<?php

class Conversation extends AppModel {
		
	var $name = 'Conversation';
	var $hasMany = array(
			'Message' => array(
				'className' => 'Message',
				'foreignKey' => 'conversation_id'
				)
		);

	public function getActiveConversation($visitorId=null)
	{

		$serverTime = new DateTime();
		$this->Message->recursive = -1;
		$m = $this->Message->find('first',array('conditions'=>array('Message.visitor_id'=>$visitorId,
																'DATE_ADD(Message.created, INTERVAL 120 SECOND) >'=> $serverTime->format('Y-m-d H:i:s'))
																));
		if($m)
			return $this->findById($m['Message']['conversation_id']);
		else
			return null;
	}

	public function getNewConversation()
	{
		$this->create();
		return $this->save();
	}
}
	
	
?>