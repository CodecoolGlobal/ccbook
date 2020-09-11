<?php

class Request
{
    /**
     * @var null
     */
    private $section;
    /**
     * @var null
     */
    private $subsection;

    public function __construct()
    {
        if ( count($_GET) === 0 ) {
            $this->section = NULL;
            $this->subsection = NULL;
        }

        foreach ($_GET as $key => $value) {
            $this->set($key, $value);
        }
    }

    private function set($key, $value)
    {
        $this->$key = $value;
    }

    public function get($key)
    {
        return $this->$key;
    }

}




?>