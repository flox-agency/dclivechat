<?php
   
   /**
	
	*@ Helper pour CakePHP Framework
	*@ Author : Jeffart - Jestik 
	*/
   
   
   class AnalytiqueHelper extends AppHelper{
   	
	  //IP DU VISITEUR
        public $IP;
		
		
	   //Visiteur Online
        public $User_Online ;	
		
		
		
		function _constructDB(){
			
			/*
            *@ Initialise le model pour notre helper 
            */
            $AnalytiqueDB = ClassRegistry::init('Analytique');
			
			
			//Set model to class's variable
			
            $this->Model = $AnalytiqueDB;
			$this->IP = $_SERVER['REMOTE_ADDR'];
			$this->TimeOut = 2;//toutes les minutes mise a jour
			
			 $time = getdate();
			 
			 print_r($time) ;
            $this->Time = $time;
			
			
			$this->UserRequest();
			 $this->GetDetail();
			
		}
		
		
		public function getIPAdress(){
			
			$this->IP = $_SERVER['REMOTE_ADDR'];
			
			return $this->IP;
			
		}
		
		
		 public function UserRequest(){
		 	
			// on cherche dans la table l'ip du visiteur
		 	
			 $user = $this->Model->find("first", array(
                'conditions' => array('ip' => $this->IP),
                'order' => 'id DESC'
            ));
			
			// si l'adresse existe 
			
			if ( !empty($user) ){
				
				 $temp = explode("-", $user['Analytique']['date_visit']);
				
				//on recupere le nouveau temps de session
                $newTime = $this->Time['hours']*60 + $this->Time['minutes'];
				
				if ( ( $newTime - $user['Analytique']['time_en_minute'] ) > $this->TimeOut || $temp[0] < $this->Time['mday'] || $temp[1] < $this->Time['mon'])  {

                   
                    
                    
                      //on fait un input de l'adresse
			          $this->request->data['ip'] = $this->IP; 
			  
			          // on fait un input de l'heure de le connection
			          $this->request->data['time'] = $this->Time['hours'].':'. $this->Time['minutes']; 
			  
			          // on fait un input de l'heure de le connection converti minutes en pour des besoins de calculs
			          $this->request->data['time_en_minute'] = $this->Time['hours']*60 + $this->Time['minutes'];
			 
			          // on fait un input de la date de la visite
			          $this->request->data['date_visit'] = $this->Time['mday'] . "-" . $this->Time['mon'] . "-" . $this->Time['year']; 
			 
                      // initialisation de la classe . avant toute sauvegarde de données
			          $this->Model->create(); 
			 
                      // on sauvegarde les données en base.
                      $this->Model->save($this->data);
                }
				
				print_r($temp);
		
			echo  " Trouvé";
	
			} else {  //  si l'adresse n'est pas en base
				
		     echo  "Non Trouvé";
			 
			  //on fait un input de l'adresse
			  $this->request->data['ip'] = $this->IP; 
			  
			  // on fait un input de l'heure de le connection
			  $this->request->data['time'] = $this->Time['hours'].':'. $this->Time['minutes']; 
			  
			  // on fait un input de l'heure de le connection converti minutes en pour des besoins de calculs
			   $this->request->data['time_en_minute'] = $this->Time['hours']*60 + $this->Time['minutes'];
			 
			  // on fait un input de la date de la visite
			  $this->request->data['date_visit'] = $this->Time['mday'] . "-" . $this->Time['mon'] . "-" . $this->Time['year']; 
			 
			 // initialisation de la classe . avant toute sauvegarde de données
			 $this->Model->create(); 
			 
             // on sauvegarde les données en base.
             $this->Model->save($this->data); 
			}
		 }


        public function GetDetail(){
            $data = $this->Model->find("all");
            $newTime = $this->Time['hours']*60 + $this->Time['minutes'];

            /*
            *@ on initialise 2 variable temporaires pour notre compteur de visite
            */

            

            $this_month = $this->Time['mon'];
            $this_date = $this->Time['mday'];

            // mise a zero du compteur de visiteur
            $this->User_Online = 0;
           

            
            foreach ( $data as $value ){
                $temp = explode ("-", $value['Analytique']['date_visit']);
                if ( $temp[0] == $this->Time['mday'] && $temp[1] == $this->Time['mon'] ){
                   
				    //on recupere le nombre de visiteur en ligne online
                    if ( $newTime - $value['Analytique']['time_en_minute'] < $this->TimeOut )
                       ++$this->User_Online;
					
					
					
					
					
                }
		
		       return $this->User_Online;
			}
			
			
			
			

		}
		
		
		
		
		 //montre le detail sur le visiteur
        public function ShowDetail(){
        
            
               
                echo "<div id='online'>Online : " . $this->User_Online . "</div>";
          
        }
		

	
   }
   
   
?>