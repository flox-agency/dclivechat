<?php

	class VisitsController extends AppController {
		var $name = 'Visits';

		public function add()
		{
			// Si des variables sont passées en POST
			if(!empty($this->request->data)) {

				$url = $this->request->data['url'];
				$localtime = new DateTime($this->request->data['localtime']);
				$localtimeTimeStamp = $localtime->getTimestamp();
				$visitorId = $this->request->data['visitorId'];

				//vérification de l'existence d'une visite de l'utilisateur
				$lastVisit = $this->Visit->find('first',array('conditions'=>array('visitor_id'=>$visitorId,
																					$localtimeTimeStamp.'- UNIX_TIMESTAMP(visitor_localtime) <'=>'60'),
																'order'=>'id DESC'));

				$this->log($localtimeTimeStamp,'debug');
				$this->log($lastVisit,'debug');
				
				if (!$lastVisit) {
					
					//Création de la visite à enregistrer
					$data = array();
					$data['location_ip'] = CakeRequest::clientIp();
					$data['visitor_localtime'] = $localtime->format('Y-m-d H:i:s');
					$data['visitor_id'] = $visitorId;

					$this->Visit->create();
					$visit = $this->Visit->save($data);

					$this->set('visit',$visit['Visit']);
					$this->set('_serialize', array('visit'));
				}
			} else {
				$this->set('visit','');
				$this->set('_serialize', array('visit'));
			}
		}
	}


?>