<?php

	class MessagesController extends AppController {
		var $name = 'Messages';
		var $scaffold;

		public function send()
		{
			if(!empty($this->request->data)) {

				$convers = $this->Message->Conversation->getActiveConversation($this->request->data['visitorId']);
				if(!$convers) $convers = $this->Message->Conversation->getNewConversation();

				$data = array();
				$data['visitor_id'] = $this->request->data['visitorId'];
				$data['conversation_id'] = $convers['Conversation']['id'];
				$data['message'] = $this->request->data['message'];

				$this->Message->save($data);
			}

			$this->layout = 'ajax';	
		}

		public function visitorPoll()
		{
			if($this->request->is('ajax')) {

				$this->layout = 'ajax';
				$serverTime = new DateTime();

				$ts = $this->request->query['ts'];
				$visitorId = $this->request->query['visitorId'];

				while((time() - $serverTime->getTimestamp()) < 30 )	 {		
					$res = $this->Message->find('first',array('conditions'=>array('UNIX_TIMESTAMP(Message.created) >' => $ts)));
					if($res) break;

					sleep(1);
				}

				$c = $this->Message->Conversation->getActiveConversation($visitorId);
				if($c) {
					$m = $this->Message->find('all',array('conditions'=>array('Message.conversation_id'=> $c['Conversation']['id'])));
					$this->set('conversation',$m);
				}

			}
 		}

 		public function poll()
 		{
 			if($this->request->is('ajax')) {

				$this->layout = 'ajax';
				$serverTime = new DateTime();

				$ts = $this->request->query['ts'];
				$visitorId = $this->request->query['visitorId'];

				while((time() - $serverTime->getTimestamp()) < 30 )	 {		
					$res = $this->Message->find('first',array('conditions'=>array('UNIX_TIMESTAMP(Message.created) >' => $ts)));
					if($res) break;

					sleep(1);
				}

				$c = $this->Message->Conversation->getActiveConversation($visitorId);
				if($c) {
					$m = $this->Message->find('all',array('conditions'=>array('Message.conversation_id'=> $c['Conversation']['id'])));
					$this->set('conversation',$m);
				}

			}
 		}
	}

	
?>