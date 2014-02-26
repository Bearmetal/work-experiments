<?php
	require '/vendor/autoload.php';
    require '/models/page.php';
    
	Mustache_Autoloader::register();

	$m = new Mustache_Engine(array(
		"cache"=>dirname(__FILE__).'/tmp/cache/mustache',
		"cache_file_mode"=>0666,
		"loader"=> new Mustache_Loader_Filesystemloader(dirname(__FILE__).'/views'),
		"partials_loader" => new Mustache_Loader_Filesystemloader(dirname(__FILE__).'/views/partials'),
		'escape' => function($value) {
	        return htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
	    }
		));

    $modPage = new Page();
    
	$tpl = $m->loadTemplate('home');
	echo $tpl->render($modPage->getPage); // "Hello World!"
?>