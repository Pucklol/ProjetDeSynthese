<?php
/**
 * Created by PhpStorm.
 * User: Ducky
 * Date: 15/04/2018
 * Time: 08:14
 */

namespace FastFood\Entity;

/**
 * @Entity
 * @Table(name="Dessert")
 **/

class Dessert extends Composition
{
    use PriceTrait;


    /**
     * @Column(type="string", length=100)
     * @var string
     **/
    protected $dessert_name;


    /**
     * @Column(type="string", length=100)
     * @var string
     **/
    protected $type;

    /**
     * @OneToOne(targetEntity="Coulis")
     * @var Coulis
     */
    protected $coulis;


    /**
     * Get Name
     *
     * @return mixed
     */
    public function getDessertName():? string
    {
        return $this->dessert_name;
    }

    /**
     * Get Coulis
     *
     * @return mixed
     */
    public function getCoulis():? Coulis
    {
        return $this->coulis;
    }

    /**
     * Get Type
     *
     * @return mixed
     */
    public function getType():? string
    {
        return $this->type;
    }


    /**
     * Set Coulis
     *
     * @param mixed $coulis
     *
     * @return self
     */
    public function setCoulis(coulis $coulis):self
    {
        $this->coulis = $coulis;

        return $this;
    }

    /**
     * Set Name
     *
     * @param mixed $dessert_name
     *
     * @return self
     */
    public function setDessertName($dessert_name):self
    {
        $this->dessert_name = $dessert_name;

        return $this;
    }


}