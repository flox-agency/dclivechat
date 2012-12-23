<?php

	class ConversationsController extends AppController {
		var $name = 'Conversations';	
		var $scaffold;

		public function view($value='')
		{
			if($this->request->is('ajax')) {
				$this->layout = 'ajax';
			}
		}
	}

?>