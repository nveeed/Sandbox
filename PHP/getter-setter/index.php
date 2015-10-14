<?php
/**
 * Created by PhpStorm.
 * User: 08es3_000
 * Date: 10/13/2015
 * Time: 11:24 AM
 */

class Person {
    public $name;

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
}

$p = new Person();
$p->name = "Naveed";
echo $p->name;