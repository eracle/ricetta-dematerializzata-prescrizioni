<?php

class elencoErroriRicetteType
{

    /**
     * @var erroreRicettaType[] $ErroreRicetta
     */
    protected $ErroreRicetta = null;

    /**
     * @param erroreRicettaType[] $ErroreRicetta
     */
    public function __construct(array $ErroreRicetta)
    {
      $this->ErroreRicetta = $ErroreRicetta;
    }

    /**
     * @return erroreRicettaType[]
     */
    public function getErroreRicetta()
    {
      return $this->ErroreRicetta;
    }

    /**
     * @param erroreRicettaType[] $ErroreRicetta
     * @return elencoErroriRicetteType
     */
    public function setErroreRicetta(array $ErroreRicetta)
    {
      $this->ErroreRicetta = $ErroreRicetta;
      return $this;
    }

}
