<?php

class erroreRicettaType
{

    /**
     * @var codEsitoType $codEsito
     */
    protected $codEsito = null;

    /**
     * @var stringType $esito
     */
    protected $esito = null;

    /**
     * @var stringType $progPresc
     */
    protected $progPresc = null;

    /**
     * @var stringType $tipoErrore
     */
    protected $tipoErrore = null;

    /**
     * @param codEsitoType $codEsito
     */
    public function __construct($codEsito)
    {
      $this->codEsito = $codEsito;
    }

    /**
     * @return codEsitoType
     */
    public function getCodEsito()
    {
      return $this->codEsito;
    }

    /**
     * @param codEsitoType $codEsito
     * @return erroreRicettaType
     */
    public function setCodEsito($codEsito)
    {
      $this->codEsito = $codEsito;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getEsito()
    {
      return $this->esito;
    }

    /**
     * @param stringType $esito
     * @return erroreRicettaType
     */
    public function setEsito($esito)
    {
      $this->esito = $esito;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getProgPresc()
    {
      return $this->progPresc;
    }

    /**
     * @param stringType $progPresc
     * @return erroreRicettaType
     */
    public function setProgPresc($progPresc)
    {
      $this->progPresc = $progPresc;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getTipoErrore()
    {
      return $this->tipoErrore;
    }

    /**
     * @param stringType $tipoErrore
     * @return erroreRicettaType
     */
    public function setTipoErrore($tipoErrore)
    {
      $this->tipoErrore = $tipoErrore;
      return $this;
    }

}
