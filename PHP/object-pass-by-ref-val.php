<?php
/**
 * Created by  naveedulhassan
 * Date: 4/27/16
 * Time: 6:33 PM
 */

class Person
{

    public $name;
    public $age;

    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }

}

function incAge($person)
{
    $person->age ++;
}

function incNum($num)
{
    $num ++;
}

$p1 = new Person('naveed', 26);

echo($p1->age); // 26
incAge($p1);
echo($p1->age); // 27
$num = 9;
incNum($num);
echo $num; // 9
