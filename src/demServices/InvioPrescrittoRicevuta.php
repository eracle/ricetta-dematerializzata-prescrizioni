<?php

class InvioPrescrittoRicevuta
{

    /**
     * @var nreType $nre
     */
    protected $nre = null;

    /**
     * @var stringType $codAutenticazione
     */
    protected $codAutenticazione = null;

    /**
     * @var dataOraType $dataInserimento
     */
    protected $dataInserimento = null;

    /**
     * @var codEsitoType $codEsitoInserimento
     */
    protected $codEsitoInserimento = null;

    /**
     * @var elencoErroriRicetteType $ElencoErroriRicette
     */
    protected $ElencoErroriRicette = null;

    /**
     * @var elencoComunicazioniType $ElencoComunicazioni
     */
    protected $ElencoComunicazioni = null;

    /**
     * @var elencoNotaType $ElencoNota
     */
    protected $ElencoNota = null;

    /**
     * @var string1Type $flagPromemoria
     */
    protected $flagPromemoria = null;

    /**
     * @var base64Binary $pdfPromemoria
     */
    protected $pdfPromemoria = null;

    /**
     * @param nreType $nre
     * @param stringType $codAutenticazione
     * @param dataOraType $dataInserimento
     * @param codEsitoType $codEsitoInserimento
     * @param elencoErroriRicetteType $ElencoErroriRicette
     * @param elencoComunicazioniType $ElencoComunicazioni
     * @param elencoNotaType $ElencoNota
     * @param string1Type $flagPromemoria
     * @param base64Binary $pdfPromemoria
     */
    public function __construct($nre, $codAutenticazione, $dataInserimento, $codEsitoInserimento, $ElencoErroriRicette, $ElencoComunicazioni, $ElencoNota, $flagPromemoria, $pdfPromemoria)
    {
      $this->nre = $nre;
      $this->codAutenticazione = $codAutenticazione;
      $this->dataInserimento = $dataInserimento;
      $this->codEsitoInserimento = $codEsitoInserimento;
      $this->ElencoErroriRicette = $ElencoErroriRicette;
      $this->ElencoComunicazioni = $ElencoComunicazioni;
      $this->ElencoNota = $ElencoNota;
      $this->flagPromemoria = $flagPromemoria;
      $this->pdfPromemoria = $pdfPromemoria;
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
     * @return InvioPrescrittoRicevuta
     */
    public function setNre($nre)
    {
      $this->nre = $nre;
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
     * @return InvioPrescrittoRicevuta
     */
    public function setCodAutenticazione($codAutenticazione)
    {
      $this->codAutenticazione = $codAutenticazione;
      return $this;
    }

    /**
     * @return dataOraType
     */
    public function getDataInserimento()
    {
      return $this->dataInserimento;
    }

    /**
     * @param dataOraType $dataInserimento
     * @return InvioPrescrittoRicevuta
     */
    public function setDataInserimento($dataInserimento)
    {
      $this->dataInserimento = $dataInserimento;
      return $this;
    }

    /**
     * @return codEsitoType
     */
    public function getCodEsitoInserimento()
    {
      return $this->codEsitoInserimento;
    }

    /**
     * @param codEsitoType $codEsitoInserimento
     * @return InvioPrescrittoRicevuta
     */
    public function setCodEsitoInserimento($codEsitoInserimento)
    {
      $this->codEsitoInserimento = $codEsitoInserimento;
      return $this;
    }

    /**
     * @return elencoErroriRicetteType
     */
    public function getElencoErroriRicette()
    {
      return $this->ElencoErroriRicette;
    }

    /**
     * @param elencoErroriRicetteType $ElencoErroriRicette
     * @return InvioPrescrittoRicevuta
     */
    public function setElencoErroriRicette($ElencoErroriRicette)
    {
      $this->ElencoErroriRicette = $ElencoErroriRicette;
      return $this;
    }

    /**
     * @return elencoComunicazioniType
     */
    public function getElencoComunicazioni()
    {
      return $this->ElencoComunicazioni;
    }

    /**
     * @param elencoComunicazioniType $ElencoComunicazioni
     * @return InvioPrescrittoRicevuta
     */
    public function setElencoComunicazioni($ElencoComunicazioni)
    {
      $this->ElencoComunicazioni = $ElencoComunicazioni;
      return $this;
    }

    /**
     * @return elencoNotaType
     */
    public function getElencoNota()
    {
      return $this->ElencoNota;
    }

    /**
     * @param elencoNotaType $ElencoNota
     * @return InvioPrescrittoRicevuta
     */
    public function setElencoNota($ElencoNota)
    {
      $this->ElencoNota = $ElencoNota;
      return $this;
    }

    /**
     * @return string1Type
     */
    public function getFlagPromemoria()
    {
      return $this->flagPromemoria;
    }

    /**
     * @param string1Type $flagPromemoria
     * @return InvioPrescrittoRicevuta
     */
    public function setFlagPromemoria($flagPromemoria)
    {
      $this->flagPromemoria = $flagPromemoria;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getPdfPromemoria()
    {
      return $this->pdfPromemoria;
    }

    /**
     * @param base64Binary $pdfPromemoria
     * @return InvioPrescrittoRicevuta
     */
    public function setPdfPromemoria($pdfPromemoria)
    {
      $this->pdfPromemoria = $pdfPromemoria;
      return $this;
    }

}
