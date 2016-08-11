<?php

class comunicazioneType
{

    /**
     * @var stringType $codice
     */
    protected $codice = null;

    /**
     * @var stringType $messaggio
     */
    protected $messaggio = null;

    /**
     * @param stringType $codice
     * @param stringType $messaggio
     */
    public function __construct($codice, $messaggio)
    {
      $this->codice = $codice;
      $this->messaggio = $messaggio;
    }

    /**
     * @return stringType
     */
    public function getCodice()
    {
      return $this->codice;
    }

    /**
     * @param stringType $codice
     * @return comunicazioneType
     */
    public function setCodice($codice)
    {
      $this->codice = $codice;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getMessaggio()
    {
      return $this->messaggio;
    }

    /**
     * @param stringType $messaggio
     * @return comunicazioneType
     */
    public function setMessaggio($messaggio)
    {
      $this->messaggio = $messaggio;
      return $this;
    }

}
