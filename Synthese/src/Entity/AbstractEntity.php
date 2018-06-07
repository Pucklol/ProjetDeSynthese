<?php
namespace FastFood\Entity;

/**
 * Class AbstractEntity
 */
abstract class AbstractEntity
{
    function __construct(array $data = [])
    {
        foreach ($data as $name => $value) {

            $name = array_map('ucfirst', explode('_', $name));

            $setterName = 'set' . implode('', $name);

            if (method_exists($this, $setterName)) {
                $this->$setterName($value);
            }
        }
    }
}
