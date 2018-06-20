<?php
namespace FastFood\Entity;

/**
 * Trait PriceTrait
 */
trait PriceTrait
{
    /**
     * @var float
     * @Column(type="float")
     */
    protected $price;

    /**
     * Get Price
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Set Price
     *
     * @param float $price
     *
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }
}