<?php
namespace FastFood\Entity;

/**
 * @Entity
 * @Table(name="Coulis")
 **/
class Coulis extends AbstractEntity
{
    use PriceTrait;

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     **/
    protected $id;


    /**
     * @Column(type="string", length=100)
     * @var string
     **/
    protected $coulis_name;


    /**
     * @Column(type="string", length=100)
     * @var string
     **/
    protected $type;


    /**
     * Get Id
     *
     * @return int
     */
    public function getId():? int
    {
        return $this->id;
    }

    /**
     * Set Id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get CoulisName
     *
     * @return string
     */
    public function getCoulisName():? string
    {
        return $this->coulis_name;
    }

    /**
     * Set CoulisName
     *
     * @param string $coulis_name
     *
     * @return self
     */
    public function setCoulisName(string $coulis_name): self
    {
        $this->coulis_name = $coulis_name;

        return $this;
    }

    /**
     * Get Type
     *
     * @return string
     */
    public function getType():? string
    {
        return $this->type;
    }

    /**
     * Set Type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}