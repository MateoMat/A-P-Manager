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
     * @ORM\Column(name="sap_id", type="string", length=255, unique=true)
     */
    private $sapId;

    /**
     * @var string
     *
     * @ORM\Column(name="product_name", type="string", length=255, unique=true)
     */
    private $productName;

    /**
     * @var string
     *
     * @ORM\Column(name="chemical_name", type="string", length=255)
     */
    private $chemicalName;

    /**
     * @var int
     *
     * @ORM\Column(name="vat", type="integer")
     */
    private $vat;

    /**
     * @var float
     *
     * @ORM\Column(name="office_rental_price_incl_vat", type="float", nullable=true)
     */
    private $officeRentalPriceInclVat;

    /**
     * @var float
     *
     * @ORM\Column(name="contractual_rental_price", type="float", nullable=true)
     */
    private $contractualRentalPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="bulk_pack", type="integer", nullable=true)
     */
    private $bulkPack;

    /**
     * @var string
     *
     * @ORM\Column(name="pkwiu", type="string", length=100, nullable=true)
     */
    private $pkwiu;

    /**
     * @var string
     *
     * @ORM\Column(name="ean", type="string", length=100, nullable=true, unique=true)
     */
    private $ean;

    /**
     * @var string
     *
     * @ORM\Column(name="bloz", type="string", length=100, unique=true)
     */
    private $bloz;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=15)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="brand", type="string", length=100)
     */
    private $brand;

    /**
     * @var string
     *
     * @ORM\Column(name="BU", type="string", length=10, nullable=true)
     */
    private $bU;

    /**
     * @var string
     *
     * @ORM\Column(name="chain_contract", type="string", length=3, nullable=true)
     */
    private $chainContract;


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
     * Set sapId
     *
     * @param string $sapId
     *
     * @return Product
     */
    public function setSapId($sapId)
    {
        $this->sapId = $sapId;

        return $this;
    }

    /**
     * Get sapId
     *
     * @return string
     */
    public function getSapId()
    {
        return $this->sapId;
    }

    /**
     * Set productName
     *
     * @param string $productName
     *
     * @return Product
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get productName
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set chemicalName
     *
     * @param string $chemicalName
     *
     * @return Product
     */
    public function setChemicalName($chemicalName)
    {
        $this->chemicalName = $chemicalName;

        return $this;
    }

    /**
     * Get chemicalName
     *
     * @return string
     */
    public function getChemicalName()
    {
        return $this->chemicalName;
    }

    /**
     * Set vat
     *
     * @param integer $vat
     *
     * @return Product
     */
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * Get vat
     *
     * @return int
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * Set officeRentalPriceInclVat
     *
     * @param float $officeRentalPriceInclVat
     *
     * @return Product
     */
    public function setOfficeRentalPriceInclVat($officeRentalPriceInclVat)
    {
        $this->officeRentalPriceInclVat = $officeRentalPriceInclVat;

        return $this;
    }

    /**
     * Get officeRentalPriceInclVat
     *
     * @return float
     */
    public function getOfficeRentalPriceInclVat()
    {
        return $this->officeRentalPriceInclVat;
    }

    /**
     * Set contractualRentalPrice
     *
     * @param float $contractualRentalPrice
     *
     * @return Product
     */
    public function setContractualRentalPrice($contractualRentalPrice)
    {
        $this->contractualRentalPrice = $contractualRentalPrice;

        return $this;
    }

    /**
     * Get contractualRentalPrice
     *
     * @return float
     */
    public function getContractualRentalPrice()
    {
        return $this->contractualRentalPrice;
    }

    /**
     * Set bulkPack
     *
     * @param integer $bulkPack
     *
     * @return Product
     */
    public function setBulkPack($bulkPack)
    {
        $this->bulkPack = $bulkPack;

        return $this;
    }

    /**
     * Get bulkPack
     *
     * @return int
     */
    public function getBulkPack()
    {
        return $this->bulkPack;
    }

    /**
     * Set pkwiu
     *
     * @param string $pkwiu
     *
     * @return Product
     */
    public function setPkwiu($pkwiu)
    {
        $this->pkwiu = $pkwiu;

        return $this;
    }

    /**
     * Get pkwiu
     *
     * @return string
     */
    public function getPkwiu()
    {
        return $this->pkwiu;
    }

    /**
     * Set ean
     *
     * @param string $ean
     *
     * @return Product
     */
    public function setEan($ean)
    {
        $this->ean = $ean;

        return $this;
    }

    /**
     * Get ean
     *
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * Set bloz
     *
     * @param string $bloz
     *
     * @return Product
     */
    public function setBloz($bloz)
    {
        $this->bloz = $bloz;

        return $this;
    }

    /**
     * Get bloz
     *
     * @return string
     */
    public function getBloz()
    {
        return $this->bloz;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return Product
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
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
     * Set bU
     *
     * @param string $bU
     *
     * @return Product
     */
    public function setBU($bU)
    {
        $this->bU = $bU;

        return $this;
    }

    /**
     * Get bU
     *
     * @return string
     */
    public function getBU()
    {
        return $this->bU;
    }

    /**
     * Set chainContract
     *
     * @param string $chainContract
     *
     * @return Product
     */
    public function setChainContract($chainContract)
    {
        $this->chainContract = $chainContract;

        return $this;
    }

    /**
     * Get chainContract
     *
     * @return string
     */
    public function getChainContract()
    {
        return $this->chainContract;
    }
}

