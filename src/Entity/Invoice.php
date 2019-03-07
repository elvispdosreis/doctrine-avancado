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
     * @ORM\Column(type="integer", name="serie", nullable=true)
     */
    private $series;

    /**
     * @ORM\Column(type="string", name="chave", length=60, nullable=true)
     */
    private $key;

    /**
     * @ORM\Column(type="integer", name="numero", nullable=true)
     */
    private $number;

    /**
     * @ORM\Column(type="datetime", name="emissao", nullable=true)
     */
    private $date;

    /**
     * @ORM\Column(type="text", name="xml", nullable=true)
     */
    private $xml;

    /**
     * @ORM\OneToOne(targetEntity="Order", inversedBy="invoice", cascade={"persist"})
     * @ORM\JoinColumn(name="fk_venda", referencedColumnName="id_venda", nullable=false, unique=true)
     */
    private $order;

    /**
     * @return mixed
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @param mixed $series
     * @return Invoice
     */
    public function setSeries($series)
    {
        $this->series = $series;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     * @return Invoice
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     * @return Invoice
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     * @return Invoice
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getXml()
    {
        return $this->xml;
    }

    /**
     * @param mixed $xml
     * @return Invoice
     */
    public function setXml($xml)
    {
        $this->xml = $xml;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $order
     * @return Invoice
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }



}