<?php
/**
 * Created by PhpStorm.
 * User: Ducky
 * Date: 15/04/2018
 * Time: 08:08
 */
namespace FastFood\Entity;

/**
 * @Entity
 * @Table(name="Drinks")
 **/
class Drinks extends Composition
{
    use PriceTrait;



    /**
     * @Column(type="string", length=100)
     * @var string
     **/
    protected $drink_name;


    /**
     * @Column(type="string", length=100)
     * @var string
     **/
    protected $drink_type;


    /**
     * @Column(type="boolean")
     * @var boolean
     **/
    protected $ice_cube;



    /**
     * Get Name
     *
     * @return mixed
     */
    public function getDrinkName():? string
    {
        return $this->drink_name;
    }

    /**
     * Get Type
     *
     * @return mixed
     */
    public function getDrinkType():? string
    {
        return $this->drink_type;
    }

    /**
     * Get IceCube
     *
     * @return mixed
     */
    public function getIceCube():? boolean
    {
        return $this->ice_cube;
    }

    /**
     * Set Price
     *
     * @param mixed $price
     *
     * @return self
     */


    /**
     * Set Name
     *
     * @param mixed $drink_name
     *
     * @return self
     */
    public function setDrinkName(string $drink_name):self
    {
        $this->drink_name = $drink_name;

        return $this;
    }

    /**
     * Set IceCube
     *
     * @param mixed $ice_cube
     *
     * @return self
     */
    public function setIceCube(boolean $ice_cube):self
    {
        $this->ice_cube = $ice_cube;

        return $this;
    }

}