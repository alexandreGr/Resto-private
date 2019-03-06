<?php

// Save the project root directory as a global constant.
define('ROOT_PATH', __DIR__);

/*
 * Create a global constant used to get the filesystem path to the
 * application configuration directory.
 */
define('CFG_PATH', realpath(ROOT_PATH.'/application/config'));

/*
 * Create a global constant used to get the filesystem path to the
 * application public web root directory.
 *
 * Can be used to handle file uploads for example.
 */
define('WWW_PATH', realpath(ROOT_PATH.'/application/www'));


require_once 'library/Configuration.class.php';
require_once 'library/Database.class.php';
require_once 'library/FlashBag.class.php';
require_once 'library/Form.class.php';
require_once 'library/FrontController.class.php';
require_once 'library/MicroKernel.class.php';
require_once 'library/Http.class.php';
require_once 'library/InterceptingFilter.interface.php';


$microKernel = new MicroKernel();
$microKernel->bootstrap()->run(new FrontController());
var_dump($microKernel);


//Modele


// function myMeals(){
// 	$getMeals = new Database();
// 	$meals = $getMeals -> query('SELECT * FROM Meal');
// 	// var_dump($meals);
// 	foreach ($meals as $meal){
// 				echo '<ul>';
// 	        	echo '<h2>'.$meal['Name'].'</h2>';
// 	        	echo "<img src='/dev/PHP_POO/Resto/Resto/application/www/images/meals/".$meal['Photo']."'></img>";
// 	        	echo '<li>'.$meal['Description'].'</li>';
// 	        	echo '<li>'.$meal['SalePrice'].'</li>';
// 	        	echo '</ul>';
// 	  }
// }
// $getHttp = httpGetMethod(Http $http, array $queryFields);

$test = new MealsModel();

$test->listMeals();