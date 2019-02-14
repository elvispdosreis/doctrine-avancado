<?php
/**
 * Created by PhpStorm.
 * User: Elvis
 * Date: 13/02/2019
 * Time: 16:25
 */

namespace SON\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="SON\Entity\StockRepository")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="Stock")
 */
class Stock
{
    use TimestampableTrait;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *  @ORM\ManyToOne(targetEntity="\SON\Entity\Product", inversedBy="stocks", cascade={"persist"})
     */
    private $product;

    /**
     * @ORM\Column(type="integer")
     */
    private $warehouse_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     * @return Stock
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWarehouseId()
    {
        return $this->warehouse_id;
    }

    /**
     * @param mixed $warehouse_id
     * @return Stock
     */
    public function setWarehouseId($warehouse_id)
    {
        $this->warehouse_id = $warehouse_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param mixed $product
     * @return Price
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }



}