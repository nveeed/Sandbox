<?php
/**
 * Created by PhpStorm.
 * User: 08es3_000
 * Date: 10/13/2015
 * Time: 11:24 AM
 */

class Person {
    //public $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        echo "calling ".__FUNCTION__;
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        echo "calling ".__FUNCTION__;
        $this->name = $name;
    }

    public function __get($prop)
    {
        if($this->hasGetter($prop))
            return $this->get($prop);
        return $this->$prop;
    }

    private function hasGetter($prop)
    {
        return method_exists($this,"get".ucfirst($prop));
    }

    private function get($prop)
    {
        $method = "get".ucfirst($prop);
        return $method($prop);
    }
}

$p = new Person();
$p->name = "Naveed";
echo $p->name;