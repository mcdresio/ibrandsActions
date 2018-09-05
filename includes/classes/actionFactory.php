<?php
require_once 'includes/classes/action.php';

class ActionFactory {
    static function getActionInstance($actionType, $id, $score, $user = null) {
        switch ($actionType){
            case 1:
                return new Apertura($id, $score, $user);
                break;
            case 2:
                return new Click($id, $score, $user);
                break;
            default:
                return FALSE;
        }
    }
}