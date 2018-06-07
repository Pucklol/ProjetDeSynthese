<?php
/**
 * Created by PhpStorm.
 * User: Schar
 * Date: 15/04/2018
 * Time: 14:48
 */

namespace FastFood\Entity;


/**
 * @Entity
 * @Table(name="Card")
 **/
class Card extends AbstractEntity
{

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     **/
    protected $num_card;

    /**
     * @Column(type="integer")
     * @var integer
     **/
    protected $loyalty_pts=0;

    /**
     * @Column(type="boolean")
     * @var boolean
     **/
    protected $printed;

    /**
     * Set num_card
     *
     * @param mixed $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->num_card= $id;

        return $this;
    }

    /**
     * Set loyalty_point
     *
     * @param mixed $id
     *
     * @return self
     */
    public function setLoyaltyPoint(int $point): self
    {
        $this->loyalty_pts= $point;

        return $this;
    }


    /**
     * Set printed
     *
     * @param boolean
     *
     * @return self
     */
    public function setPrinted(boolean $printed): self
    {
        $this->printed= $printed;

        return $this;
    }


    /**
     * Get Num
     *
     * @return mixed
     */
    public function getNumCard():? int
    {
        return $this->num_card;
    }

    /**
     * Get Points
     *
     * @return mixed
     */
    public function getFidelPts():? int
    {
        return $this->fidel_pts;
    }

    /**
     * Get Printed
     *
     * @return mixed
     */
    public function getPrinted():? bool
    {
        return $this->printed;
    }

}