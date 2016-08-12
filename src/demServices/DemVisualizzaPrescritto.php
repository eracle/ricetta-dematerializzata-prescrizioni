<?php

class DemVisualizzaPrescritto extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'VisualizzaPrescrittoRichiesta' => '\\VisualizzaPrescrittoRichiesta',
      'VisualizzaPrescrittoRicevuta' => '\\VisualizzaPrescrittoRicevuta',
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
        $wsdl = 'demVisualizzaPrescritto.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param VisualizzaPrescrittoRichiesta $VisualizzaPrescrittoRichiesta
     * @return VisualizzaPrescrittoRicevuta
     */
    public function visualizzaPrescritto(VisualizzaPrescrittoRichiesta $VisualizzaPrescrittoRichiesta)
    {
      return $this->__soapCall('visualizzaPrescritto', array($VisualizzaPrescrittoRichiesta));
    }

}
