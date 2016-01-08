<?php
/**
 * Created by PhpStorm.
 * User: 08es3_000
 * Date: 11/24/2015
 * Time: 3:47 PM
 */

$arr = [
    'name' => 'naveed',
    'company' => 'rdx',
];

$result = serialize($arr);
?>
<pre>
    <h2>Serialized Result:</h2>
    <?php var_dump($result)?>
    <h2>Unserialized Result:</h2>
    <?php var_dump(unserialize($result))?>
</pre>

<?php
class Person{
    public $name = "naveed";

    public function getName()
    {
        return ucwords($this->name);
    }
}

$person = new Person();
?>
<pre>
    <h2>Serialized Result: (Object)</h2>
    <?php var_dump(serialize($person))?>
    <h2>Unserialized Result: (Object)</h2>
    <?php var_dump(unserialize(serialize($person)))?>
</pre>
