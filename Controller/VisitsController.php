<?php

	class VisitsController extends AppController {
		var $name = 'Visits';
		
		
		
		public function index(){

			$serverTime = new DateTime();
			
			$activesVisits = $this->Visit->find('all',array('conditions'=>array('DATE_ADD(visitor_last_action_time, INTERVAL 60 SECOND) >'=> $serverTime->format('Y-m-d H:i:s')),
																'order'=>'id DESC'));
			$this->set('activesVisits',$activesVisits);			
		}
		
		

		public function add()
		{

			//Si la requete est un POST
			if($this->request->is('POST')) $params = $this->request->data;

			//Sinon c'est un GET
			else $params = $this->request->query;

			// Si des variables ont été passées
			if(!empty($params)) {

				//On récupère l'heure du serveur
				$serverTime = new DateTime();

				//R2cupération des variables passées par la requête
				$url = $params['url'];
				$localtime = new DateTime($params['localtime']);
				$visitorId = $params['visitorId'];

				//vérification de l'existence d'une visite de l'utilisateur datant de moins d'une minute
				$lastVisit = $this->Visit->find('first',array('conditions'=>array('visitor_id'=>$visitorId,
																				'DATE_ADD(visitor_last_action_time, INTERVAL 120 SECOND) >'=> $serverTime->format('Y-m-d H:i:s')),
																'order'=>'id DESC'));
				
				//Si aucune visite trouvée
				if (!$lastVisit) {
					
					//Création d'une nouvelle visite
					$data = array();
					$data['location_ip'] = $this->RequestHandler->getClientIp();
					$data['visitor_localtime'] = $localtime->format('Y-m-d H:i:s');
					$data['visitor_first_action_time'] = $serverTime->format('Y-m-d H:i:s');
					$data['visitor_last_action_time'] = $serverTime->format('Y-m-d H:i:s');
					$data['visitor_id'] = $visitorId;

					//Enregistrement de la visite
					$this->Visit->create();
					$visit = $this->Visit->save($data);

					//On passe la visite créée à la vue JSON
					$this->set('visit',$visit['Visit']);
					$this->set('_serialize', array('visit'));

				} else { //Si aucune visite datant de moins d'une minute trouvée

					//Mise à jour de l'heure de la dernière action
					$lastVisit['Visit']['visitor_last_action_time'] = $serverTime->format('Y-m-d H:i:s');
					$visit = $this->Visit->save($lastVisit);

					//On passe la visite créée à la vue JSON
					$this->set('visit',$visit['Visit']);
					$this->set('_serialize', array('visit'));
				}
			} 
		}
	}


?>