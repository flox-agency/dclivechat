<?php
    class Visit extends AppModel{
        	
        var $name = "Visit";

        var $belongsTo = array(
        	'Visitor' => array(
        		'classname' => 'Visitor',
        		'foreignKey' => 'visitor_id'
        		)
        	);

        var $hasOne = array(
            'Conversation' => array(
                'classname' => 'Conversation',
                'foreignKey' => 'visit_id'
                )
            );

        public function getActivesVisits(){

            $serverTime = new DateTime();

            $visits = $this->find('all',array('conditions'=>array('DATE_ADD(visitor_last_action_time, INTERVAL 60 SECOND) >'=> $serverTime->format('Y-m-d H:i:s')),
                                                'order'=>'Visit.id DESC'));

            foreach ($visits as &$visit ) {
                $msg = $this->Conversation->getLastMessage( $visit['Conversation']['id']);
                if($msg) {
                    $visit['Conversation']['last_message'] = $msg;
                }
            }

            return $visits;
        }

        public function getInactivesVisits() {
            $serverTime = new DateTime();

            $visits = $this->find('all',array('conditions'=>array('DATE_ADD(visitor_last_action_time, INTERVAL 60 SECOND) <'=> $serverTime->format('Y-m-d H:i:s'),
                                                                'DATE_ADD(visitor_last_action_time, INTERVAL 120 SECOND) >'=> $serverTime->format('Y-m-d H:i:s')),
                                                                'order'=>'Visit.id DESC'));

            foreach ($visits as &$visit ) {
                $msg = $this->Conversation->getLastMessage( $visit['Conversation']['id']);
                if($msg) {
                    $visit['Conversation']['last_message'] = $msg;
                }
            }

            return $visits;
        }

        public function getVisitorActiveVisit($visitorId=null){

            $serverTime = new DateTime();
            return $this->find('first',array('conditions'=>array('Visit.visitor_id'=>$visitorId,
                                                                'DATE_ADD(Visit.visitor_last_action_time, INTERVAL 120 SECOND) >'=> $serverTime->format('Y-m-d H:i:s')),
                                            'order'=>array('Visit.id' => 'DESC')));
        }

        public function isActive($id=null) {

            return $this->find('all',array('conditions'=>array('DATE_ADD(visitor_last_action_time, INTERVAL 60 SECOND) >'=> $serverTime->format('Y-m-d H:i:s'),
                                                                'Visit.id'=>$id),
                                                                'order'=>'Visit.id DESC'));
        }
    }
?>