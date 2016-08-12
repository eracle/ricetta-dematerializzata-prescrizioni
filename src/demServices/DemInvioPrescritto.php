<?php

class DemInvioPrescritto extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'InvioPrescrittoRichiesta' => '\\InvioPrescrittoRichiesta',
      'InvioPrescrittoRicevuta' => '\\InvioPrescrittoRicevuta',
      'elencoDettagliPrescrizioniType' => '\\elencoDettagliPrescrizioniType',
      'dettaglioPrescrizioneType' => '\\dettaglioPrescrizioneType',
      'elencoErroriRicetteType' => '\\elencoErroriRicetteType',
      'erroreRicettaType' => '\\erroreRicettaType',
      'elencoComunicazioniType' => '\\elencoComunicazioniType',
      'comunicazioneType' => '\\comunicazioneType',
      'elencoNotaType' => '\\elencoNotaType',
      'notaType' => '\\notaType',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'demInvioPrescritto.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param InvioPrescrittoRichiesta $InvioPrescrittoRichiesta
     * @return InvioPrescrittoRicevuta
     */
    public function invioPrescritto(InvioPrescrittoRichiesta $InvioPrescrittoRichiesta)
    {
      return $this->__soapCall('invioPrescritto', array($InvioPrescrittoRichiesta));
    }

}
