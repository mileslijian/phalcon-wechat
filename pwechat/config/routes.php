<?php

$router = $di->get("router");
//var_dump($application->getModules());die;
foreach ($application->getModules() as $key => $module) {
    $namespace = str_replace('Module', 'Controllers', $module["className"]);
    $router->add('/' . $key . '/:params', array(
        'namespace' => $namespace,
        'module' => $key,
        'controller' => 'index',
        'action' => 'index',
        'params' => 1
    ))->setName($key);
    $router->add('/' . $key . '/:controller/:params', array(
        'namespace' => $namespace,
        'module' => $key,
        'controller' => 1,
        'action' => 'index',
        'params' => 2
    ));
    // echo $key;exit;
    $router->add('/' . $key . '/:controller/:action/:params', array(
        'namespace' => $namespace,
        'module' => $key,
        'controller' => 1,
        'action' => 2,
        'params' => 3
    ));
    $router->notFound(array(
        'module' =>'home',
        'controller'  =>'index',
        'action'     =>'err404'
    ));
   // $router->removeExtraSlashes(true);

}
$di->set("router", $router);




