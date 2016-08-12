<?php

class nreUtilRecordType
{

    /**
     * @var nreType $nre
     */
    protected $nre = null;

    /**
     * @var cfMedicoType $cfMedico
     */
    protected $cfMedico = null;

    /**
     * @var tipoPrescType $tipoPrescrizione
     */
    protected $tipoPrescrizione = null;

    /**
     * @var dataOraType $dataCompilazioneRicetta
     */
    protected $dataCompilazioneRicetta = null;

    /**
     * @var cfMedicoType $cfAssistito
     */
    protected $cfAssistito = null;

    /**
     * @var stringType $provenienza
     */
    protected $provenienza = null;

    /**
     * @var stringType $lotto
     */
    protected $lotto = null;

    /**
     * @var stringType $codAutenticazione
     */
    protected $codAutenticazione = null;

    
    public function __construct()
    {
    
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
     * @return nreUtilRecordType
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
     * @return nreUtilRecordType
     */
    public function setCfMedico($cfMedico)
    {
      $this->cfMedico = $cfMedico;
      return $this;
    }

    /**
     * @return tipoPrescType
     */
    public function getTipoPrescrizione()
    {
      return $this->tipoPrescrizione;
    }

    /**
     * @param tipoPrescType $tipoPrescrizione
     * @return nreUtilRecordType
     */
    public function setTipoPrescrizione($tipoPrescrizione)
    {
      $this->tipoPrescrizione = $tipoPrescrizione;
      return $this;
    }

    /**
     * @return dataOraType
     */
    public function getDataCompilazioneRicetta()
    {
      return $this->dataCompilazioneRicetta;
    }

    /**
     * @param dataOraType $dataCompilazioneRicetta
     * @return nreUtilRecordType
     */
    public function setDataCompilazioneRicetta($dataCompilazioneRicetta)
    {
      $this->dataCompilazioneRicetta = $dataCompilazioneRicetta;
      return $this;
    }

    /**
     * @return cfMedicoType
     */
    public function getCfAssistito()
    {
      return $this->cfAssistito;
    }

    /**
     * @param cfMedicoType $cfAssistito
     * @return nreUtilRecordType
     */
    public function setCfAssistito($cfAssistito)
    {
      $this->cfAssistito = $cfAssistito;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getProvenienza()
    {
      return $this->provenienza;
    }

    /**
     * @param stringType $provenienza
     * @return nreUtilRecordType
     */
    public function setProvenienza($provenienza)
    {
      $this->provenienza = $provenienza;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getLotto()
    {
      return $this->lotto;
    }

    /**
     * @param stringType $lotto
     * @return nreUtilRecordType
     */
    public function setLotto($lotto)
    {
      $this->lotto = $lotto;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getCodAutenticazione()
    {
      return $this->codAutenticazione;
    }

    /**
     * @param stringType $codAutenticazione
     * @return nreUtilRecordType
     */
    public function setCodAutenticazione($codAutenticazione)
    {
      $this->codAutenticazione = $codAutenticazione;
      return $this;
    }

}
