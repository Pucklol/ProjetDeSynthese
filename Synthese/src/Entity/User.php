<?php
namespace FastFood\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\Table;

/**
 * @Entity
 * @Table(name="users")
 **/
class User extends AbstractEntity
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
    protected $user_name;

    /**
     * @Column(type="string", length=200)
     * @var string
     **/
    protected $name;

    /**
     * @Column(type="string", length=10)
     * @var string
     **/
    protected $phone_number;

    /**
     * @OneToOne(targetEntity="Card")
     * @JoinColumn(referencedColumnName="num_card")
     *
     * @var Card
     */
    protected $card;

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
     * Set Id
     *
     * @param mixed $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return Card
     */
    public function getCard():? Card
    {
        return $this->card;
    }

    /**
     * @return string
     */
    public function getName():? string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPhoneNumber():? string
    {
        return $this->phone_number;
    }

    /**
     * @return string
     */
    public function getUserName():? string
    {
        return $this->user_name;
    }

    /**
     * Set UserName
     *
     * @param string $user_name
     *
     * @return self
     */
    public function setUserName(string $user_name): self
    {
        $this->user_name = $user_name;

        return $this;
    }

    /**
     * Set Name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set PhoneNumber
     *
     * @param string $phone_number
     *
     * @return self
     */
    public function setPhoneNumber(string $phone_number): self
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    /**
     * Set Card
     *
     * @param Card $card
     *
     * @return self
     */
    public function setCard(Card $card): self
    {
        $this->card = $card;

        return $this;
    }
}