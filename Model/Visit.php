<?php
    class Visit extends AppModel{
        	
        var $name = "Visit";

        var $belongsTo = array(
        	'Visitor' => array(
        		'classname' => 'Visitor',
        		'foreignKey' => 'Visitor_id'
        		)
        	);

        public function getActivesVisits(){

            $serverTime = new DateTime();
            return  $this->find('all',array('conditions'=>array('DATE_ADD(visitor_last_action_time, INTERVAL 60 SECOND) >'=> $serverTime->format('Y-m-d H:i:s')),
                                                                'order'=>'Visit.id DESC'));
        }

        public function getInactivesVisits() {
            $serverTime = new DateTime();

            return $this->find('all',array('conditions'=>array('DATE_ADD(visitor_last_action_time, INTERVAL 60 SECOND) <'=> $serverTime->format('Y-m-d H:i:s'),
                                                                'DATE_ADD(visitor_last_action_time, INTERVAL 120 SECOND) >'=> $serverTime->format('Y-m-d H:i:s')),
                                                                'order'=>'Visit.id DESC'));
        }

        public function getVisitorActiveVisit($visitorId=null){

            $serverTime = new DateTime();
            return $this->find('first',array('conditions'=>array('Visit.visitor_id'=>$visitorId,
                                                                'DATE_ADD(visitor_last_action_time, INTERVAL 120 SECOND) >'=> $serverTime->format('Y-m-d H:i:s')),
                                            'order'=>array('Visit.id' => 'DESC')));
        }

        public function isActive($id=null) {

            return $this->find('all',array('conditions'=>array('DATE_ADD(visitor_last_action_time, INTERVAL 60 SECOND) >'=> $serverTime->format('Y-m-d H:i:s'),
                                                                'Visit.id'=>$id),
                                                                'order'=>'Visit.id DESC'));
        }
    }
?>