<?php
    class Visit extends AppModel{
        	
        var $name = "Visit";

        var $belongsTo = array(
        	'Visitor' => array(
        		'classname' => 'Visitor',
        		'foreignKey' => 'Visitor_id'
        		)
        	);
    }
?>