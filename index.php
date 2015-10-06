<?php

// change the following paths if necessary
//$yii=dirname(__FILE__).'/../yii/framework/yii.php';
////$config=dirname(__FILE__).'/protected/config/environment.php';
//require_once(dirname(__FILE__).'/protected/config/environment.php');
//$environment = new Environment(Environment::PRODUCTION) ;
//
//// remove the following lines when in production mode
//defined('YII_DEBUG') or define('YII_DEBUG',$environment->getDebug());
//// specify how many levels of call stack should be shown in each log message
//defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',$environment->getTraceLevel());
//
//require_once($yii);
////Yii::createWebApplication($config)->run();
//Yii::createWebApplication($environment->getConfig())->run();


// set environment

require_once(dirname(__FILE__).DIRECTORY_SEPARATOR  . 'protected/extensions/yii-environment/Environment.php');
$env = new Environment('DEVELOPMENT');
//$env = new Environment('PRODUCTION'); //override mode
 
// set debug and trace level
defined('YII_DEBUG') or define('YII_DEBUG', $env->yiiDebug);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', $env->yiiTraceLevel);

// run Yii app
//$env->showDebug(); // show produced environment configuration
require_once($env->yiiPath);
Yii::createWebApplication($env->configWeb)->run();
