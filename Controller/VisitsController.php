<?php

	class VisitsController extends AppController {
		var $name = 'Visits';

		public function add()
		{
			$url = $this->request->data['url'];
			$time = new DateTime();

			$data[] = array();

			$data['ip'] = CakeRequest::clientIp();
			$data['time'] = $time->format('H:i');
			$data['date_visit'] = $time->format('Y-m-d');

			$this->Visit->create();
			$this->Visit->save($data);

			$this->set('url',$url);
		}
	}


?>