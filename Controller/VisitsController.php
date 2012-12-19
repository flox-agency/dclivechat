<?php

	class VisitsController extends AppController {
		var $name = 'Visits';

		public function add()
		{
			// Si la variable url dans le POST n'est pas nulle
			if(!empty($this->request->data['url'])) {

				$url = $this->request->data['url'];

				$time = new DateTime();

				//Création de la visite à enregistrer
				$data = array();
				$data['ip'] = CakeRequest::clientIp();
				$data['time'] = $time->format('H:i');
				$data['date_visit'] = $time->format('Y-m-d');

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