<?php

class elencoComunicazioniType
{

    /**
     * @var comunicazioneType[] $Comunicazione
     */
    protected $Comunicazione = null;

    /**
     * @param comunicazioneType[] $Comunicazione
     */
    public function __construct(array $Comunicazione)
    {
      $this->Comunicazione = $Comunicazione;
    }

    /**
     * @return comunicazioneType[]
     */
    public function getComunicazione()
    {
      return $this->Comunicazione;
    }

    /**
     * @param comunicazioneType[] $Comunicazione
     * @return elencoComunicazioniType
     */
    public function setComunicazione(array $Comunicazione)
    {
      $this->Comunicazione = $Comunicazione;
      return $this;
    }

}
