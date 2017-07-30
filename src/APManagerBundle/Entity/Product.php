<?php

namespace APManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="APManagerBundle\Repository\ProductRepository")
 */
class Product
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Brand", type="string", length=100)
     */
    private $brand;

    /**
     * @var string
     *
     * @ORM\Column(name="SKU", type="string", length=255)
     */
    private $sKU;

    /**
     * @var string
     *
     * @ORM\Column(name="BLOZ", type="string", length=100, nullable=true, unique=true)
     */
    private $bLOZ;

    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=50)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="Exf_Net_Price", type="decimal", precision=10, scale=2)
     */
    private $exfNetPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="VAT", type="integer")
     */
    private $vAT;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set brand
     *
     * @param string $brand
     *
     * @return Product
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set sKU
     *
     * @param string $sKU
     *
     * @return Product
     */
    public function setSKU($sKU)
    {
        $this->sKU = $sKU;

        return $this;
    }

    /**
     * Get sKU
     *
     * @return string
     */
    public function getSKU()
    {
        return $this->sKU;
    }

    /**
     * Set bLOZ
     *
     * @param string $bLOZ
     *
     * @return Product
     */
    public function setBLOZ($bLOZ)
    {
        $this->bLOZ = $bLOZ;

        return $this;
    }

    /**
     * Get bLOZ
     *
     * @return string
     */
    public function getBLOZ()
    {
        return $this->bLOZ;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Product
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set exfNetPrice
     *
     * @param string $exfNetPrice
     *
     * @return Product
     */
    public function setExfNetPrice($exfNetPrice)
    {
        $this->exfNetPrice = $exfNetPrice;

        return $this;
    }

    /**
     * Get exfNetPrice
     *
     * @return string
     */
    public function getExfNetPrice()
    {
        return $this->exfNetPrice;
    }

    /**
     * Set vAT
     *
     * @param integer $vAT
     *
     * @return Product
     */
    public function setVAT($vAT)
    {
        $this->vAT = $vAT;

        return $this;
    }

    /**
     * Get vAT
     *
     * @return int
     */
    public function getVAT()
    {
        return $this->vAT;
    }
}

