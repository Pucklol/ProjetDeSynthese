<?php
/**
 * Created by PhpStorm.
 * User: Ducky
 * Date: 15/04/2018
 * Time: 08:25
 */


//sauce

namespace FastFood\Entity;

/**
 * @Entity
 * @Table(name="Gravy")
 **/
class Gravy extends Composition
{
    /**
     * @Column(type="string", length=100)
     * @var string
     **/
    protected $gravy_name;


    /**
     * @Column(type="string", length=100)
     * @var string
     **/
    protected $type;

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
     * Get Name
     *
     * @return mixed
     */
    public function getGravyName():? string
    {
        return $this->gravy_name;
    }

    /**
     * Set Name
     *
     * @param mixed $gravy_name
     *
     * @return self
     */
    public function setGravyName($gravy_name):self
    {
        $this->gravy_name = $gravy_name;

        return $this;
    }



}