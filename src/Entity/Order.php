<?php
/**
 * Created by PhpStorm.
 * User: Elvis
 * Date: 04/03/2019
 * Time: 12:45
 */

namespace SON\Entity;

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
     * @ORM\OneToOne(targetEntity="\SON\Entity\Invoice", inversedBy="order", cascade={"persist"})
     * @ORM\JoinColumn(name="id_venda", referencedColumnName="fk_venda")
     */
    private $invoice;

}