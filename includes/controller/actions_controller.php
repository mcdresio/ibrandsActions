<?php
require_once 'includes/classes/actionFactory.php';
$samurai = new User(10, 'samurai');
$actions = array();
$suma_acciones = 0;
for ($i = 0; $i < Action::MAX_ACTIONS; $i++) {
    if (Apertura::$instances_ap >= Apertura::MAX_APERTURAS) {
        $type = 2;
    }elseif (Click::$instances_c >= Click::MAX_CLICKS){
        $type = 1;
    }
    else {
        $type = random_int(1, 2);
    }
    
    $score = random_int(1, 10);
    if ($action = ActionFactory::getActionInstance($type, $i, $score, $samurai)) {
        $actions[] = $action;
        $suma_acciones += $score;
    }
    
}
