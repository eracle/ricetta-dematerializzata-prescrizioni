<?php

class AnnullaPrescrittoRicevuta
{

    /**
     * @var nreType $nre
     */
    protected $nre = null;

    /**
     * @var codEsitoType $codEsitoAnnullamento
     */
    protected $codEsitoAnnullamento = null;

    /**
     * @var elencoErroriRicetteType $ElencoErroriRicette
     */
    protected $ElencoErroriRicette = null;

    /**
     * @var elencoComunicazioniType $ElencoComunicazioni
     */
    protected $ElencoComunicazioni = null;

    /**
     * @param nreType $nre
     * @param codEsitoType $codEsitoAnnullamento
     * @param elencoErroriRicetteType $ElencoErroriRicette
     * @param elencoComunicazioniType $ElencoComunicazioni
     */
    public function __construct($nre, $codEsitoAnnullamento, $ElencoErroriRicette, $ElencoComunicazioni)
    {
      $this->nre = $nre;
      $this->codEsitoAnnullamento = $codEsitoAnnullamento;
      $this->ElencoErroriRicette = $ElencoErroriRicette;
      $this->ElencoComunicazioni = $ElencoComunicazioni;
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
     * @return AnnullaPrescrittoRicevuta
     */
    public function setNre($nre)
    {
      $this->nre = $nre;
      return $this;
    }

    /**
     * @return codEsitoType
     */
    public function getCodEsitoAnnullamento()
    {
      return $this->codEsitoAnnullamento;
    }

    /**
     * @param codEsitoType $codEsitoAnnullamento
     * @return AnnullaPrescrittoRicevuta
     */
    public function setCodEsitoAnnullamento($codEsitoAnnullamento)
    {
      $this->codEsitoAnnullamento = $codEsitoAnnullamento;
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
     * @return AnnullaPrescrittoRicevuta
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
     * @return AnnullaPrescrittoRicevuta
     */
    public function setElencoComunicazioni($ElencoComunicazioni)
    {
      $this->ElencoComunicazioni = $ElencoComunicazioni;
      return $this;
    }

}
