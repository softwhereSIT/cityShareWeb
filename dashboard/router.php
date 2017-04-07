<?php
/**
 * Created by PhpStorm.
 * User: JGuilherme
 * Date: 08/03/2017
 * Time: 07:43
 */

function call($controller, $action) {
    // require the file that matches the controller name
    require_once('controller/' . $controller . '_controller.php');

    // create a new instance of the needed controller
    switch($controller) {
        //nome do controller
        case 'dashboard':
            //require_once('models/funcionario_class.php');
            $controller = new DashboardController();
            break;
        
    }

    // call the action
    $controller->{ $action }();
}

call($controller, $action);