<?php

class VisualizzaPrescrittoRichiesta
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
     * @var nreType $cfMedico
     */
    protected $cfMedico = null;

    /**
     * @param stringType $pinCode
     * @param nreType $nre
     * @param nreType $cfMedico
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
     * @return VisualizzaPrescrittoRichiesta
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
     * @return VisualizzaPrescrittoRichiesta
     */
    public function setNre($nre)
    {
      $this->nre = $nre;
      return $this;
    }

    /**
     * @return nreType
     */
    public function getCfMedico()
    {
      return $this->cfMedico;
    }

    /**
     * @param nreType $cfMedico
     * @return VisualizzaPrescrittoRichiesta
     */
    public function setCfMedico($cfMedico)
    {
      $this->cfMedico = $cfMedico;
      return $this;
    }

}
