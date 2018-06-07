<?php
namespace FastFood\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Composition
 * @package FastFood\Entity
 * MappedSuperclass
 * @Entity)
 */
abstract class Composition extends AbstractEntity
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     **/
    protected $id;

    /**
     * Get the value of the property id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of the property id
     *
     * @param mixed $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}