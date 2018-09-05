<?php
require_once 'includes/classes/user.php';

abstract class Action {
    const MAX_ACTIONS = 1000; //max number of actions to be created
    protected $id;
    protected $user = null;
    protected $score;
    
    
    public function __construct($id, $score, $user = null){
        $this->id = $id;
        //if the user argument is not a User object we leave it at null
        if (is_a($user, 'User')) {
            $this->user = $user;
        }
        $this->score = $score;
    }
    
    public function __clone(){
        $this->id = null; //when cloning the id is set at null
    }
    
    /**
     * @return mixed
     */
    public final function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public final function getUser()
    {
        return $this->user;
    }

    /**
     * @return mixed
     */
    public final function getScore()
    {
        return $this->score;
    }

    /**
     * @param mixed $id
     */
    public final function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $user
     */
    public final function setUser($user)
    {
        //if the user argument is not a User object we leave it at null
        if (is_a($user, 'User')) {
            $this->user = $user;
        }
        
    }

    /**
     * @param mixed $score
     */
    public final function setScore($score)
    {
        $this->score = $score;
    }

    
    
}

class Apertura extends Action {
    const MAX_APERTURAS = 700; //maximum instances that can be created
    static $instances_ap = 0; //number of instances created
    
    public function __construct($id, $score, $user = null){
        Click::$instances_c++;
        parent::__construct($id, $score, $user);
    }
}

class Click extends Action {
    const MAX_CLICKS = 700; //maximum instances that can be created
    static $instances_c = 0; //number of instances created
    
    public function __construct($id, $score, $user = null){
        Click::$instances_c++;
        parent::__construct($id, $score, $user);
    }
}