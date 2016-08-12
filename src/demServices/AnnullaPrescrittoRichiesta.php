<?php

class AnnullaPrescrittoRichiesta
{

    /**
     * @var stringType $pinCode
     */
    protected $pinCode = null;

    /**
     * @var nreType $nre
     */
    protected $nre = null;

    /**
     * @var cfMedicoType $cfMedico
     */
    protected $cfMedico = null;

    /**
     * @param stringType $pinCode
     * @param nreType $nre
     * @param cfMedicoType $cfMedico
     */
    public function __construct($pinCode, $nre, $cfMedico)
    {
      $this->pinCode = $pinCode;
      $this->nre = $nre;
      $this->cfMedico = $cfMedico;
    }

    /**
     * @return stringType
     */
    public function getPinCode()
    {
      return $this->pinCode;
    }

    /**
     * @param stringType $pinCode
     * @return AnnullaPrescrittoRichiesta
     */
    public function setPinCode($pinCode)
    {
      $this->pinCode = $pinCode;
      return $this;
    }

    /**
     * @return nreType
     */
    public function getNre()
    {
      return $this->nre;
    }

    /**
     * @param nreType $nre
     * @return AnnullaPrescrittoRichiesta
     */
    public function setNre($nre)
    {
      $this->nre = $nre;
      return $this;
    }

    /**
     * @return cfMedicoType
     */
    public function getCfMedico()
    {
      return $this->cfMedico;
    }

    /**
     * @param cfMedicoType $cfMedico
     * @return AnnullaPrescrittoRichiesta
     */
    public function setCfMedico($cfMedico)
    {
      $this->cfMedico = $cfMedico;
      return $this;
    }

}
