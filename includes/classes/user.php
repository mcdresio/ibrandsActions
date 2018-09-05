<?php
class User {
    
    private $id;
    private $username;
    
    function __construct($id, $username) {
        $this->id = $id;
        $this->username = $username;
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
    public final function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $id
     */
    public final function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $username
     */
    public final function setUsername($username)
    {
        $this->username = $username;
    }

    
    
}