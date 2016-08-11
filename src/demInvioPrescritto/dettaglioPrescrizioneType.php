<?php

class dettaglioPrescrizioneType
{

    /**
     * @var stringType $codProdPrest
     */
    protected $codProdPrest = null;

    /**
     * @var stringType $descrProdPrest
     */
    protected $descrProdPrest = null;

    /**
     * @var stringType $codGruppoEquival
     */
    protected $codGruppoEquival = null;

    /**
     * @var stringType $descrGruppoEquival
     */
    protected $descrGruppoEquival = null;

    /**
     * @var stringType $testoLibero
     */
    protected $testoLibero = null;

    /**
     * @var stringType $descrTestoLiberoNote
     */
    protected $descrTestoLiberoNote = null;

    /**
     * @var stringType $nonSost
     */
    protected $nonSost = null;

    /**
     * @var stringType $motivazNote
     */
    protected $motivazNote = null;

    /**
     * @var stringType $codMotivazione
     */
    protected $codMotivazione = null;

    /**
     * @var stringType $notaProd
     */
    protected $notaProd = null;

    /**
     * @var integerType $quantita
     */
    protected $quantita = null;

    /**
     * @var stringType $prescrizione1
     */
    protected $prescrizione1 = null;

    /**
     * @var stringType $prescrizione2
     */
    protected $prescrizione2 = null;

    /**
     * @var stringType $codCatalogoPrescr
     */
    protected $codCatalogoPrescr = null;

    /**
     * @var string1Type $tipoAccesso
     */
    protected $tipoAccesso = null;

    /**
     * @var maxString10 $numeroNota
     */
    protected $numeroNota = null;

    /**
     * @var maxString10 $condErogabilita
     */
    protected $condErogabilita = null;

    /**
     * @var maxString10 $approprPrescrittiva
     */
    protected $approprPrescrittiva = null;

    /**
     * @var maxString10 $patologia
     */
    protected $patologia = null;

    /**
     * @param integerType $quantita
     */
    public function __construct($quantita)
    {
      $this->quantita = $quantita;
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
     * @return dettaglioPrescrizioneType
     */
    public function setCodProdPrest($codProdPrest)
    {
      $this->codProdPrest = $codProdPrest;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getDescrProdPrest()
    {
      return $this->descrProdPrest;
    }

    /**
     * @param stringType $descrProdPrest
     * @return dettaglioPrescrizioneType
     */
    public function setDescrProdPrest($descrProdPrest)
    {
      $this->descrProdPrest = $descrProdPrest;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getCodGruppoEquival()
    {
      return $this->codGruppoEquival;
    }

    /**
     * @param stringType $codGruppoEquival
     * @return dettaglioPrescrizioneType
     */
    public function setCodGruppoEquival($codGruppoEquival)
    {
      $this->codGruppoEquival = $codGruppoEquival;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getDescrGruppoEquival()
    {
      return $this->descrGruppoEquival;
    }

    /**
     * @param stringType $descrGruppoEquival
     * @return dettaglioPrescrizioneType
     */
    public function setDescrGruppoEquival($descrGruppoEquival)
    {
      $this->descrGruppoEquival = $descrGruppoEquival;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getTestoLibero()
    {
      return $this->testoLibero;
    }

    /**
     * @param stringType $testoLibero
     * @return dettaglioPrescrizioneType
     */
    public function setTestoLibero($testoLibero)
    {
      $this->testoLibero = $testoLibero;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getDescrTestoLiberoNote()
    {
      return $this->descrTestoLiberoNote;
    }

    /**
     * @param stringType $descrTestoLiberoNote
     * @return dettaglioPrescrizioneType
     */
    public function setDescrTestoLiberoNote($descrTestoLiberoNote)
    {
      $this->descrTestoLiberoNote = $descrTestoLiberoNote;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getNonSost()
    {
      return $this->nonSost;
    }

    /**
     * @param stringType $nonSost
     * @return dettaglioPrescrizioneType
     */
    public function setNonSost($nonSost)
    {
      $this->nonSost = $nonSost;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getMotivazNote()
    {
      return $this->motivazNote;
    }

    /**
     * @param stringType $motivazNote
     * @return dettaglioPrescrizioneType
     */
    public function setMotivazNote($motivazNote)
    {
      $this->motivazNote = $motivazNote;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getCodMotivazione()
    {
      return $this->codMotivazione;
    }

    /**
     * @param stringType $codMotivazione
     * @return dettaglioPrescrizioneType
     */
    public function setCodMotivazione($codMotivazione)
    {
      $this->codMotivazione = $codMotivazione;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getNotaProd()
    {
      return $this->notaProd;
    }

    /**
     * @param stringType $notaProd
     * @return dettaglioPrescrizioneType
     */
    public function setNotaProd($notaProd)
    {
      $this->notaProd = $notaProd;
      return $this;
    }

    /**
     * @return integerType
     */
    public function getQuantita()
    {
      return $this->quantita;
    }

    /**
     * @param integerType $quantita
     * @return dettaglioPrescrizioneType
     */
    public function setQuantita($quantita)
    {
      $this->quantita = $quantita;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getPrescrizione1()
    {
      return $this->prescrizione1;
    }

    /**
     * @param stringType $prescrizione1
     * @return dettaglioPrescrizioneType
     */
    public function setPrescrizione1($prescrizione1)
    {
      $this->prescrizione1 = $prescrizione1;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getPrescrizione2()
    {
      return $this->prescrizione2;
    }

    /**
     * @param stringType $prescrizione2
     * @return dettaglioPrescrizioneType
     */
    public function setPrescrizione2($prescrizione2)
    {
      $this->prescrizione2 = $prescrizione2;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getCodCatalogoPrescr()
    {
      return $this->codCatalogoPrescr;
    }

    /**
     * @param stringType $codCatalogoPrescr
     * @return dettaglioPrescrizioneType
     */
    public function setCodCatalogoPrescr($codCatalogoPrescr)
    {
      $this->codCatalogoPrescr = $codCatalogoPrescr;
      return $this;
    }

    /**
     * @return string1Type
     */
    public function getTipoAccesso()
    {
      return $this->tipoAccesso;
    }

    /**
     * @param string1Type $tipoAccesso
     * @return dettaglioPrescrizioneType
     */
    public function setTipoAccesso($tipoAccesso)
    {
      $this->tipoAccesso = $tipoAccesso;
      return $this;
    }

    /**
     * @return maxString10
     */
    public function getNumeroNota()
    {
      return $this->numeroNota;
    }

    /**
     * @param maxString10 $numeroNota
     * @return dettaglioPrescrizioneType
     */
    public function setNumeroNota($numeroNota)
    {
      $this->numeroNota = $numeroNota;
      return $this;
    }

    /**
     * @return maxString10
     */
    public function getCondErogabilita()
    {
      return $this->condErogabilita;
    }

    /**
     * @param maxString10 $condErogabilita
     * @return dettaglioPrescrizioneType
     */
    public function setCondErogabilita($condErogabilita)
    {
      $this->condErogabilita = $condErogabilita;
      return $this;
    }

    /**
     * @return maxString10
     */
    public function getApproprPrescrittiva()
    {
      return $this->approprPrescrittiva;
    }

    /**
     * @param maxString10 $approprPrescrittiva
     * @return dettaglioPrescrizioneType
     */
    public function setApproprPrescrittiva($approprPrescrittiva)
    {
      $this->approprPrescrittiva = $approprPrescrittiva;
      return $this;
    }

    /**
     * @return maxString10
     */
    public function getPatologia()
    {
      return $this->patologia;
    }

    /**
     * @param maxString10 $patologia
     * @return dettaglioPrescrizioneType
     */
    public function setPatologia($patologia)
    {
      $this->patologia = $patologia;
      return $this;
    }

}
