<?php

class elencoDettagliPrescrizioniType
{

    /**
     * @var dettaglioPrescrizioneType[] $DettaglioPrescrizione
     */
    protected $DettaglioPrescrizione = null;

    /**
     * @param dettaglioPrescrizioneType[] $DettaglioPrescrizione
     */
    public function __construct(array $DettaglioPrescrizione)
    {
      $this->DettaglioPrescrizione = $DettaglioPrescrizione;
    }

    /**
     * @return dettaglioPrescrizioneType[]
     */
    public function getDettaglioPrescrizione()
    {
      return $this->DettaglioPrescrizione;
    }

    /**
     * @param dettaglioPrescrizioneType[] $DettaglioPrescrizione
     * @return elencoDettagliPrescrizioniType
     */
    public function setDettaglioPrescrizione(array $DettaglioPrescrizione)
    {
      $this->DettaglioPrescrizione = $DettaglioPrescrizione;
      return $this;
    }

}
