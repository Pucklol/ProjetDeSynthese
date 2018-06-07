<?php
/**
 * Created by PhpStorm.
 * User: Ducky
 * Date: 15/04/2018
 * Time: 08:20
 */

namespace FastFood\Entity;

/**
 * @Entity
 * @Table(name="Ingredient")
 **/
class Ingredient extends  AbstractEntity
{
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
    protected $ingredient_name;


    /**
     * Get Name
     *
     * @return mixed
     */
    public function getIngredientName():? string
    {
        return $this->ingredient_name;
    }

    /**
     * Get Id
     *
     * @return mixed
     */
    public function getId():? int
    {
        return $this->id;
    }


    /**
     * Set Name
     *
     * @param mixed $ingredient_name
     *
     * @return self
     */
    public function setIngredientName(string $ingredient_name): self
    {
        $this->ingredient_name = $ingredient_name;

        return $this;
    }
}