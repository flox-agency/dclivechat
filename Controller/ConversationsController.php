<?php

	class ConversationsController extends AppController {
		var $name = 'Conversations';	
		var $scaffold;

		public function view($id)
		{
			if($this->request->is('ajax')) {
				$this->layout = 'ajax';

				$conversation = $this->Conversation->find('first',array('conditions'=>array('Conversation.id'=>$id)));

				$this->set('conversation',$conversation);
			}
		}
	}

?>