<?php

	class VisitsController extends AppController {
		var $name = 'Visits';

		public function add()
		{
			// Si des variables sont passées en POST
			if(!empty($this->request->data)) {

				$url = $this->request->data['url'];
				$localtime = $this->request->data['localtime'];

				//Création de la visite à enregistrer
				$data = array();
				$data['location_ip'] = CakeRequest::clientIp();
				$data['visitor_localtime'] = $localtime;

				$this->Visit->create();
				$visit = $this->Visit->save($data);

				$this->set('visit',$visit['Visit']);
				$this->set('_serialize', array('visit'));
			} else {
				$this->set('visit','');
				$this->set('_serialize', array('visit'));
			}
		}
	}


?>