<?php

	class VisitsController extends AppController {
		var $name = 'Visits';
		
		
		
		public function index(){

			$activesVisits = $this->Visit->getActivesVisits();
			$this->set('activesVisits',$activesVisits);
			
			$inactivesVisits = $this->Visit->getInactivesVisits();
			$this->set('inactivesVisits',$inactivesVisits);

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
				$actionCount = $params['actionCount'];
				$user_agent = $params['user_agent'];
				$hostname = $params['hostname'];
				$platform = $params['platform'];
				$browser = $params['browser'];

				//Création du visiteur si celui-ci n'existe pas
				if(!$this->Visit->Visitor->find('first',array('conditions'=>array('Visitor.id'=>$visitorId)))) {
					
					//Création et enregistrement du visitor
					$visitor['id'] = $visitorId;
					$this->Visit->Visitor->save($visitor);

				}

				//vérification de l'existence d'une visite active de l'utilisateur
				$lastVisit = $this->Visit->getVisitorActiveVisit($visitorId);
				
				//Si aucune visite trouvée
				if (!$lastVisit) {
					
					//Création d'une nouvelle visite
					$data = array();
					$data['location_ip'] = $this->RequestHandler->getClientIp();
					$data['visitor_localtime'] = $localtime->format('Y-m-d H:i:s');
					$data['visitor_first_action_time'] = $serverTime->format('Y-m-d H:i:s');
					$data['visitor_last_action_time'] = $serverTime->format('Y-m-d H:i:s');
					$data['visitor_id'] = $visitorId;
					$data['visit_total_actions'] = $actionCount;
					$data['user_agent'] = $user_agent;
					$data['hostname'] = $hostname;
					$data['platform'] = $platform;
					$data['browser'] = $browser;

					//Enregistrement de la visite
					$this->Visit->create();
					$visit = $this->Visit->save($data);

					//On passe la visite créée à la vue JSON
					$this->set('visit',$visit['Visit']);
					$this->set('_serialize', array('visit'));

				} else { //Si une visite datant de moins d'une minute trouvée

					//Mise à jour de l'heure de la dernière action
					$lastVisit['Visit']['visitor_last_action_time'] = $serverTime->format('Y-m-d H:i:s');

					//Mise à jour du compteur d'actions
					$lastVisit['Visit']['visit_total_actions'] = $actionCount;

					//update de la visite modifiée
					$visit = $this->Visit->save($lastVisit);

					//On passe la visite créée à la vue JSON
					$this->set('visit',$visit['Visit']);
					$this->set('_serialize', array('visit'));
				}
			} 
		}

		public function ajaxActivesVisits()
		{
			if($this->request->is('ajax')) {

				$this->layout = 'ajax';			
				$activesVisits = $this->Visit->getActivesVisits();;
				$this->set('activesVisits',$activesVisits);	

			}
 		}

 		public function ajaxinactivesVisits()
		{
			if($this->request->is('ajax')) {

				$this->layout = 'ajax';			
				$inactivesVisits = $this->Visit->getInactivesVisits();
				$this->set('inactivesVisits',$inactivesVisits);	

			}
 		}

 		public function poll()
		{
			if($this->request->is('ajax')) {

				$this->layout = 'ajax';
				$serverTime = new DateTime();

				$ts = $this->request->query['ts'];

				while((time() - $serverTime->getTimestamp()) < 30 )	 {		
					$res = $this->Visit->find('first',array('conditions'=>array('UNIX_TIMESTAMP(visitor_last_action_time) >' => $ts)));
					if($res) break;

					sleep(1);
				}

				$activesVisits = $this->Visit->find('all',array('conditions'=>array('DATE_ADD(visitor_last_action_time, INTERVAL 60 SECOND) >'=> $serverTime->format('Y-m-d H:i:s')),
																	'order'=>'Visit.id DESC'));

				$this->set('activesVisits',$activesVisits);

			}
 		}
	}


?>