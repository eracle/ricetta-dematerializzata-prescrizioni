<?php

class InterrogaNreUtilRicevuta
{

    /**
     * @var codEsitoType $codEsitoInterrogaNreUtilizzati
     */
    protected $codEsitoInterrogaNreUtilizzati = null;

    /**
     * @var elencoNreUtilRecordType $ElencoNreUtilRecord
     */
    protected $ElencoNreUtilRecord = null;

    /**
     * @var elencoErroriRicetteType $ElencoErroriRicette
     */
    protected $ElencoErroriRicette = null;

    /**
     * @var elencoComunicazioniType $ElencoComunicazioni
     */
    protected $ElencoComunicazioni = null;

    /**
     * @param codEsitoType $codEsitoInterrogaNreUtilizzati
     * @param elencoNreUtilRecordType $ElencoNreUtilRecord
     * @param elencoErroriRicetteType $ElencoErroriRicette
     * @param elencoComunicazioniType $ElencoComunicazioni
     */
    public function __construct($codEsitoInterrogaNreUtilizzati, $ElencoNreUtilRecord, $ElencoErroriRicette, $ElencoComunicazioni)
    {
      $this->codEsitoInterrogaNreUtilizzati = $codEsitoInterrogaNreUtilizzati;
      $this->ElencoNreUtilRecord = $ElencoNreUtilRecord;
      $this->ElencoErroriRicette = $ElencoErroriRicette;
      $this->ElencoComunicazioni = $ElencoComunicazioni;
    }

    /**
     * @return codEsitoType
     */
    public function getCodEsitoInterrogaNreUtilizzati()
    {
      return $this->codEsitoInterrogaNreUtilizzati;
    }

    /**
     * @param codEsitoType $codEsitoInterrogaNreUtilizzati
     * @return InterrogaNreUtilRicevuta
     */
    public function setCodEsitoInterrogaNreUtilizzati($codEsitoInterrogaNreUtilizzati)
    {
      $this->codEsitoInterrogaNreUtilizzati = $codEsitoInterrogaNreUtilizzati;
      return $this;
    }

    /**
     * @return elencoNreUtilRecordType
     */
    public function getElencoNreUtilRecord()
    {
      return $this->ElencoNreUtilRecord;
    }

    /**
     * @param elencoNreUtilRecordType $ElencoNreUtilRecord
     * @return InterrogaNreUtilRicevuta
     */
    public function setElencoNreUtilRecord($ElencoNreUtilRecord)
    {
      $this->ElencoNreUtilRecord = $ElencoNreUtilRecord;
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
     * @return InterrogaNreUtilRicevuta
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
     * @return InterrogaNreUtilRicevuta
     */
    public function setElencoComunicazioni($ElencoComunicazioni)
    {
      $this->ElencoComunicazioni = $ElencoComunicazioni;
      return $this;
    }

}
