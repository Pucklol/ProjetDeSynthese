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
     * @Column(type="text")
     * @var string
     **/
    protected $content;

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
    public function setPrinted(bool $printed): self
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

    /**
     * Get the value of the property content
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Set the value of the property content
     *
     * @param string $content
     *
     * @return $this
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }
}