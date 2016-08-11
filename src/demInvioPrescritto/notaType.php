<?php

class notaType
{

    /**
     * @var stringType $progrPresc
     */
    protected $progrPresc = null;

    /**
     * @var stringType $codProdPrest
     */
    protected $codProdPrest = null;

    /**
     * @var maxString10 $tipoAmbulatorio
     */
    protected $tipoAmbulatorio = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return stringType
     */
    public function getProgrPresc()
    {
      return $this->progrPresc;
    }

    /**
     * @param stringType $progrPresc
     * @return notaType
     */
    public function setProgrPresc($progrPresc)
    {
      $this->progrPresc = $progrPresc;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getCodProdPrest()
    {
      return $this->codProdPrest;
    }

    /**
     * @param stringType $codProdPrest
     * @return notaType
     */
    public function setCodProdPrest($codProdPrest)
    {
      $this->codProdPrest = $codProdPrest;
      return $this;
    }

    /**
     * @return maxString10
     */
    public function getTipoAmbulatorio()
    {
      return $this->tipoAmbulatorio;
    }

    /**
     * @param maxString10 $tipoAmbulatorio
     * @return notaType
     */
    public function setTipoAmbulatorio($tipoAmbulatorio)
    {
      $this->tipoAmbulatorio = $tipoAmbulatorio;
      return $this;
    }

}
