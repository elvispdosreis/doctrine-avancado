<?php

namespace SON\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as JMS;

/**
 * @ORM\Entity(repositoryClass="SON\Entity\ProductRepository")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="products")
 */
class Product
{
    use TimestampableTrait;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @JMS\Groups ({"list", "details"})
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @JMS\Groups ({"list", "details"})
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="\SON\Entity\Price", mappedBy="product",cascade={"persist"}, fetch="LAZY")
     */
    private $prices;

    /**
     * @ORM\OneToMany(targetEntity="\SON\Entity\Stock", mappedBy="product",cascade={"persist"}, fetch="LAZY")
     */
    private $stocks;

    public function __construct()
    {
        $this->prices = new ArrayCollection();
        $this->stocks = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Product
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function addPrice(Price $price)
    {
        $this->prices->add($price);
        $price->setProduct($this);
        return $this;
    }

    public function getPrices()
    {
        return $this->prices->toArray();;
    }

    public function addStock(Stock $stock)
    {
        $this->stocks->add($stock);
        $stock->setProduct($this);
        return $this;
    }

    public function getStocks()
    {
        return $this->stocks->toArray();
    }

    /**
     * @JMS\Groups ({"list"})
     *
     */
    private $stock = 0;

    /**
     * @return mixed
     * @JMS\PreSerialize
     */
    public function getStock()
    {
        foreach ($this->stocks as $stock) {
            $this->stock += $stock->getQuantity();
        }
    }


}