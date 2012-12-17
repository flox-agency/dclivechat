<?php



class ConversationsController extends AppController {
	var $name = 'Conversation';	
	var $scaffold;
	public $helpers = array(’Html’, ’Form’);
	
	public function index() {
       $this->set(’conversations’, $this->Conversation->find(’all’));
    }
	
}
	

?>