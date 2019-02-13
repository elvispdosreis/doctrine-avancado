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
 * @ORM\Entity(repositoryClass="SON\Entity\PriceRepository")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="prices")
 */
class Price
{
    use TimestampableTrait;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *  @ORM\ManyToOne(targetEntity="\SON\Entity\Product", inversedBy="prices", cascade={"persist"})
     */
    private $product;



    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $list;

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

    /**
     * @return mixed
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param mixed $list
     * @return Price
     */
    public function setList($list)
    {
        $this->list = $list;
        return $this;
    }

}