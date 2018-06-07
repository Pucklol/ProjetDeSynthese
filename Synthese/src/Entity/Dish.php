<?php
/**
 * Created by PhpStorm.
 * User: Ducky
 * Date: 15/04/2018
 * Time: 07:50
 */

//plat
namespace FastFood\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\ManyToOne;


/**
 * @Entity
 * @Table(name="Dish")
 **/
class Dish extends Composition
{
    use PriceTrait;

    /**
     * @Column(type="string", length=100)
     * @var string
     **/
    protected $dish_name;


    /**
     * @ManyToMany(targetEntity="Ingredient")
     * @var Ingredient
     */
    protected $composition;



    /**
     * Get Name
     *
     * @return mixed
     */
    public function getDishName():? string
    {
        return $this->dish_name;
    }

    /**
     * Set Name
     *
     * @param mixed $dish_name
     *
     * @return self
     */
    public function setDishName(string $dish_name):self
    {
        $this->dish_name = $dish_name;

        return $this;
    }

    /**
     * Get Composition
     *
     * @return mixed
     */
    public function getComposition():? array
    {
        return $this->composition;
    }

    /**
     * Add Composition
     *
     * @param ingredient $ingredient
     *
     * @return self
     */
    public function addComposition(ingredient $ingredient):self
    {
        $this->composition.array_push($ingredient);

        return $this;
    }

}