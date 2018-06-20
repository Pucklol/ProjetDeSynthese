<?php
/**
 * Created by PhpStorm.
 * User: Ducky
 * Date: 15/04/2018
 * Time: 08:02
 */

namespace FastFood\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;


/**
 * @Entity
 * @Table(name="Menu")
 **/
class Menu
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
    protected $menu_name;

    /**
     * @Column(type="boolean", nullable=true)
     * @var boolean
     **/
    protected $promotion;


    /**
     * @Column(type="boolean", nullable=true)
     * @var boolean
     **/
    protected $restriction;

    /**
     * @ManyToMany(targetEntity="Composition")
     * @JoinColumn(referencedColumnName="id")
     * @var Dish, Gravy, Drinks, Dessert, Coulis, SideDish
     */
    protected $composition;

    public function __construct()
    {
        $this->setComposition(new ArrayCollection());
    }


    /**
     * @return mixed
     */
    public function getComposition()
    {
        return $this->composition;
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
     * Get Name
     *
     * @return mixed
     */
    public function getMenuName():? string
    {
        return $this->menu_name;
    }


    /**
     * Get Promotion
     *
     * @return mixed
     */
    public function getPromotion(): boolean
    {
        return $this->promotion;
    }
    //faut t'il faire un trait pour la promotion?

    /**
     * Get Restriction
     *
     * @return mixed
     */
    public function getRestriction(): boolean
    {
        return $this->restriction;
    }

    /**
     * @param mixed $composition
     */
    public function setComposition($composition)
    {
        $this->composition.array_push($composition);
    }

    /**
     *Set Name
     *
     * @param mixed $menu_name
     *
     * @return self
     */
    public function setMenuName(String $menu_name):self
    {
        $this->menu_name = $menu_name;

        return $this;
    }



    /**
     * Set Promotion
     *
     * @param mixed $promotion
     */
    public function setPromotion($promotion)
    {
        $this->promotion = $promotion;
    }

    /**
     * @param mixed $restriction
     */
    public function setRestriction($restriction)
    {
        $this->restriction = $restriction;
    }
}