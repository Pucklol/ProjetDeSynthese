<?php
/**
 * Created by PhpStorm.
 * User: Ducky
 * Date: 15/04/2018
 * Time: 08:12
 */

//accompagnement

namespace FastFood\Entity;


/**
 * @Entity
 * @Table(name="SideDish")
 **/
class Sidedish extends Composition
{
    use PriceTrait;


    /**
     * @Column(type="string", length=100)
     * @var string
     **/
    protected $side_dish_name;


    /**
     * Get Name
     *
     *
     * @return mixed
     */
    public function getSideDishName():? string
    {
        return $this->side_dish_name;
    }


    /**
     * Set Name
     *
     * @param mixed $side_dish_name
     *
     * @return self
     */
    public function setSideDishName(String $side_dish_name):self
    {
        $this->side_dish_name = $side_dish_name;

        return $this;

    }

}