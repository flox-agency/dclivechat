<?php

	App::uses('Component','Controller');
	/**
	* 
	*/

	class ConfigComponent extends Component {


		const SECONDS = 1000;

		const MINUTES = 60 * ConfigComponent::SECONDS;

		const HOURS = 60 * ConfigComponent::MINUTES;

		const VISIST_LIFETIME = 2 * ConfigComponent::MINUTES;

		const VISIST_ACTIVE_TIME = 2 * ConfigComponent::MINUTES;

	}

?>