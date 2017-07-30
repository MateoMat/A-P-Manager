<?php

namespace APManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pharmacy
 *
 * @ORM\Table(name="pharmacy")
 * @ORM\Entity(repositoryClass="APManagerBundle\Repository\PharmacyRepository")
 */
class Pharmacy
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="addres", type="string", length=255)
     */
    private $addres;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=6)
     */
    private $zip;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255, nullable=true)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="brick", type="string", length=100)
     */
    private $brick;

    /**
     * @var string
     *
     * @ORM\Column(name="target", type="string", length=3, nullable=true)
     */
    private $target;

    /**
     * @var string
     *
     * @ORM\Column(name="territory", type="string", length=20)
     */
    private $territory;

    /**
     * @var string
     *
     * @ORM\Column(name="chain", type="string", length=255, nullable=true)
     */
    private $chain;

    /**
     * @var string
     *
     * @ORM\Column(name="handler", type="string", length=255)
     */
    private $handler;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=30)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="dm", type="string", length=100)
     */
    private $dm;

    /**
     * @var string
     *
     * @ORM\Column(name="dmPhone", type="string", length=50)
     */
    private $dmPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="channel", type="string", length=30)
     */
    private $channel;

    /**
     * @var string
     *
     * @ORM\Column(name="CNS", type="string", length=30)
     */
    private $cNS;

    /**
     * @var string
     *
     * @ORM\Column(name="DERM", type="string", length=30)
     */
    private $dERM;

    /**
     * @var string
     *
     * @ORM\Column(name="GP", type="string", length=30)
     */
    private $gP;

    /**
     * @var string
     *
     * @ORM\Column(name="KARDIO", type="string", length=30)
     */
    private $kARDIO;

    /**
     * @var string
     *
     * @ORM\Column(name="OKUL", type="string", length=30)
     */
    private $oKUL;

    /**
     * @var string
     *
     * @ORM\Column(name="ORTO", type="string", length=30)
     */
    private $oRTO;

    /**
     * @var string
     *
     * @ORM\Column(name="PULMO", type="string", length=30)
     */
    private $pULMO;

    /**
     * @var string
     *
     * @ORM\Column(name="FPid", type="string", length=100, nullable=true,unique=true)
     */
    private $fPid;

    /**
     * @var string
     *
     * @ORM\Column(name="OKid", type="string", length=100, nullable=true, unique=true)
     */
    private $oKid;


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
     * Set name
     *
     * @param string $name
     *
     * @return Pharmacy
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set addres
     *
     * @param string $addres
     *
     * @return Pharmacy
     */
    public function setAddres($addres)
    {
        $this->addres = $addres;

        return $this;
    }

    /**
     * Get addres
     *
     * @return string
     */
    public function getAddres()
    {
        return $this->addres;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Pharmacy
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set zip
     *
     * @param string $zip
     *
     * @return Pharmacy
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return Pharmacy
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set brick
     *
     * @param string $brick
     *
     * @return Pharmacy
     */
    public function setBrick($brick)
    {
        $this->brick = $brick;

        return $this;
    }

    /**
     * Get brick
     *
     * @return string
     */
    public function getBrick()
    {
        return $this->brick;
    }

    /**
     * Set target
     *
     * @param string $target
     *
     * @return Pharmacy
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set territory
     *
     * @param string $territory
     *
     * @return Pharmacy
     */
    public function setTerritory($territory)
    {
        $this->territory = $territory;

        return $this;
    }

    /**
     * Get territory
     *
     * @return string
     */
    public function getTerritory()
    {
        return $this->territory;
    }

    /**
     * Set chain
     *
     * @param string $chain
     *
     * @return Pharmacy
     */
    public function setChain($chain)
    {
        $this->chain = $chain;

        return $this;
    }

    /**
     * Get chain
     *
     * @return string
     */
    public function getChain()
    {
        return $this->chain;
    }

    /**
     * Set handler
     *
     * @param string $handler
     *
     * @return Pharmacy
     */
    public function setHandler($handler)
    {
        $this->handler = $handler;

        return $this;
    }

    /**
     * Get handler
     *
     * @return string
     */
    public function getHandler()
    {
        return $this->handler;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Pharmacy
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set dm
     *
     * @param string $dm
     *
     * @return Pharmacy
     */
    public function setDm($dm)
    {
        $this->dm = $dm;

        return $this;
    }

    /**
     * Get dm
     *
     * @return string
     */
    public function getDm()
    {
        return $this->dm;
    }

    /**
     * Set dmPhone
     *
     * @param string $dmPhone
     *
     * @return Pharmacy
     */
    public function setDmPhone($dmPhone)
    {
        $this->dmPhone = $dmPhone;

        return $this;
    }

    /**
     * Get dmPhone
     *
     * @return string
     */
    public function getDmPhone()
    {
        return $this->dmPhone;
    }

    /**
     * Set channel
     *
     * @param string $channel
     *
     * @return Pharmacy
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * Get channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set cNS
     *
     * @param string $cNS
     *
     * @return Pharmacy
     */
    public function setCNS($cNS)
    {
        $this->cNS = $cNS;

        return $this;
    }

    /**
     * Get cNS
     *
     * @return string
     */
    public function getCNS()
    {
        return $this->cNS;
    }

    /**
     * Set dERM
     *
     * @param string $dERM
     *
     * @return Pharmacy
     */
    public function setDERM($dERM)
    {
        $this->dERM = $dERM;

        return $this;
    }

    /**
     * Get dERM
     *
     * @return string
     */
    public function getDERM()
    {
        return $this->dERM;
    }

    /**
     * Set gP
     *
     * @param string $gP
     *
     * @return Pharmacy
     */
    public function setGP($gP)
    {
        $this->gP = $gP;

        return $this;
    }

    /**
     * Get gP
     *
     * @return string
     */
    public function getGP()
    {
        return $this->gP;
    }

    /**
     * Set kARDIO
     *
     * @param string $kARDIO
     *
     * @return Pharmacy
     */
    public function setKARDIO($kARDIO)
    {
        $this->kARDIO = $kARDIO;

        return $this;
    }

    /**
     * Get kARDIO
     *
     * @return string
     */
    public function getKARDIO()
    {
        return $this->kARDIO;
    }

    /**
     * Set oKUL
     *
     * @param string $oKUL
     *
     * @return Pharmacy
     */
    public function setOKUL($oKUL)
    {
        $this->oKUL = $oKUL;

        return $this;
    }

    /**
     * Get oKUL
     *
     * @return string
     */
    public function getOKUL()
    {
        return $this->oKUL;
    }

    /**
     * Set oRTO
     *
     * @param string $oRTO
     *
     * @return Pharmacy
     */
    public function setORTO($oRTO)
    {
        $this->oRTO = $oRTO;

        return $this;
    }

    /**
     * Get oRTO
     *
     * @return string
     */
    public function getORTO()
    {
        return $this->oRTO;
    }

    /**
     * Set pULMO
     *
     * @param string $pULMO
     *
     * @return Pharmacy
     */
    public function setPULMO($pULMO)
    {
        $this->pULMO = $pULMO;

        return $this;
    }

    /**
     * Get pULMO
     *
     * @return string
     */
    public function getPULMO()
    {
        return $this->pULMO;
    }

    /**
     * Set fPid
     *
     * @param string $fPid
     *
     * @return Pharmacy
     */
    public function setFPid($fPid)
    {
        $this->fPid = $fPid;

        return $this;
    }

    /**
     * Get fPid
     *
     * @return string
     */
    public function getFPid()
    {
        return $this->fPid;
    }

    /**
     * Set oKid
     *
     * @param string $oKid
     *
     * @return Pharmacy
     */
    public function setOKid($oKid)
    {
        $this->oKid = $oKid;

        return $this;
    }

    /**
     * Get oKid
     *
     * @return string
     */
    public function getOKid()
    {
        return $this->oKid;
    }
}

