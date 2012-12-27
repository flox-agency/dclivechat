<?php

	class ConversationsController extends AppController {
		var $name = 'Conversations';	
		var $scaffold;

		public function view($visitorId)
		{
			if($this->request->is('ajax')) {
				$this->layout = 'ajax';

				$conversation = $this->Conversation->getActiveConversation($visitorId);
				$this->set('conversation',$conversation);
				$this->set('visitorId',$visitorId);
			}
		}
	}

?>