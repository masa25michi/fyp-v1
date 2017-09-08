<?php
return array(
	'_root_'  => 'main/index',  // The default route
	'_404_'   => 'main/error',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
