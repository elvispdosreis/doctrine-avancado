<?php
/**
 * Created by PhpStorm.
 * User: Elvis
 * Date: 04/03/2019
 * Time: 12:46
 */

namespace SON\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="InvoiceRepository")
 * @ORM\Table(name="nfe")
 * @ORM\HasLifecycleCallbacks()
 */
class Invoice
{
    use TimestampableTrait;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="id_nfe", nullable=false, unique=true)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     *  @ORM\OneToOne(targetEntity="\SON\Entity\Order", inversedBy="invoice", cascade={"persist"})
     */
    private $order;

}