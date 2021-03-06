<?php
/**
 * Created by PhpStorm.
 * User: Elvis
 * Date: 04/03/2019
 * Time: 12:45
 */

namespace SON\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="OrderRepository")
 * @ORM\Table(name="vendas")
 * @ORM\HasLifecycleCallbacks()
 */
class Order
{
    use TimestampableTrait;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="id_venda", nullable=false, unique=true)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", name="nome", length=60)
     */
    private $customer;

    /**
     * @ORM\OneToOne(targetEntity="Invoice", mappedBy="order", cascade={"persist"})
     */
    private $invoice;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Collection|Invoice
     */

    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * @param mixed $invoice
     * @return Order
     */
    public function setInvoice($invoice)
    {
        $invoice->setOrder($this);
        $this->invoice = $invoice;
        return $this;
    }

    public function __construct()
    {
        $this->invoice = new ArrayCollection();
    }


}