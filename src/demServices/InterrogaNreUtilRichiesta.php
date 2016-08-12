<?php

class InterrogaNreUtilRichiesta
{

    /**
     * @var stringType $pinCode
     */
    protected $pinCode = null;

    /**
     * @var codRegioneType $codRegione
     */
    protected $codRegione = null;

    /**
     * @var nreType $nre
     */
    protected $nre = null;

    /**
     * @var codLottoType $codLotto
     */
    protected $codLotto = null;

    /**
     * @var cfMedicoType $cfMedico
     */
    protected $cfMedico = null;

    /**
     * @var cfMedicoType $cfAssistito
     */
    protected $cfAssistito = null;

    /**
     * @var tipoPrescType $tipoPrescr
     */
    protected $tipoPrescr = null;

    /**
     * @var dataOraType $dataCompilazioneRicettaDal
     */
    protected $dataCompilazioneRicettaDal = null;

    /**
     * @var dataOraType $dataCompilazioneRicettaAl
     */
    protected $dataCompilazioneRicettaAl = null;

    /**
     * @param stringType $pinCode
     * @param codRegioneType $codRegione
     * @param nreType $nre
     * @param codLottoType $codLotto
     * @param cfMedicoType $cfMedico
     * @param cfMedicoType $cfAssistito
     * @param tipoPrescType $tipoPrescr
     * @param dataOraType $dataCompilazioneRicettaDal
     * @param dataOraType $dataCompilazioneRicettaAl
     */
    public function __construct($pinCode, $codRegione, $nre, $codLotto, $cfMedico, $cfAssistito, $tipoPrescr, $dataCompilazioneRicettaDal, $dataCompilazioneRicettaAl)
    {
      $this->pinCode = $pinCode;
      $this->codRegione = $codRegione;
      $this->nre = $nre;
      $this->codLotto = $codLotto;
      $this->cfMedico = $cfMedico;
      $this->cfAssistito = $cfAssistito;
      $this->tipoPrescr = $tipoPrescr;
      $this->dataCompilazioneRicettaDal = $dataCompilazioneRicettaDal;
      $this->dataCompilazioneRicettaAl = $dataCompilazioneRicettaAl;
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
     * @return InterrogaNreUtilRichiesta
     */
    public function setPinCode($pinCode)
    {
      $this->pinCode = $pinCode;
      return $this;
    }

    /**
     * @return codRegioneType
     */
    public function getCodRegione()
    {
      return $this->codRegione;
    }

    /**
     * @param codRegioneType $codRegione
     * @return InterrogaNreUtilRichiesta
     */
    public function setCodRegione($codRegione)
    {
      $this->codRegione = $codRegione;
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
     * @return InterrogaNreUtilRichiesta
     */
    public function setNre($nre)
    {
      $this->nre = $nre;
      return $this;
    }

    /**
     * @return codLottoType
     */
    public function getCodLotto()
    {
      return $this->codLotto;
    }

    /**
     * @param codLottoType $codLotto
     * @return InterrogaNreUtilRichiesta
     */
    public function setCodLotto($codLotto)
    {
      $this->codLotto = $codLotto;
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
     * @return InterrogaNreUtilRichiesta
     */
    public function setCfMedico($cfMedico)
    {
      $this->cfMedico = $cfMedico;
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
     * @return InterrogaNreUtilRichiesta
     */
    public function setCfAssistito($cfAssistito)
    {
      $this->cfAssistito = $cfAssistito;
      return $this;
    }

    /**
     * @return tipoPrescType
     */
    public function getTipoPrescr()
    {
      return $this->tipoPrescr;
    }

    /**
     * @param tipoPrescType $tipoPrescr
     * @return InterrogaNreUtilRichiesta
     */
    public function setTipoPrescr($tipoPrescr)
    {
      $this->tipoPrescr = $tipoPrescr;
      return $this;
    }

    /**
     * @return dataOraType
     */
    public function getDataCompilazioneRicettaDal()
    {
      return $this->dataCompilazioneRicettaDal;
    }

    /**
     * @param dataOraType $dataCompilazioneRicettaDal
     * @return InterrogaNreUtilRichiesta
     */
    public function setDataCompilazioneRicettaDal($dataCompilazioneRicettaDal)
    {
      $this->dataCompilazioneRicettaDal = $dataCompilazioneRicettaDal;
      return $this;
    }

    /**
     * @return dataOraType
     */
    public function getDataCompilazioneRicettaAl()
    {
      return $this->dataCompilazioneRicettaAl;
    }

    /**
     * @param dataOraType $dataCompilazioneRicettaAl
     * @return InterrogaNreUtilRichiesta
     */
    public function setDataCompilazioneRicettaAl($dataCompilazioneRicettaAl)
    {
      $this->dataCompilazioneRicettaAl = $dataCompilazioneRicettaAl;
      return $this;
    }

}
