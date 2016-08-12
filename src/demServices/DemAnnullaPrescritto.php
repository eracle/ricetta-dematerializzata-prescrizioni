<?php

class DemAnnullaPrescritto extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AnnullaPrescrittoRichiesta' => '\\AnnullaPrescrittoRichiesta',
      'AnnullaPrescrittoRicevuta' => '\\AnnullaPrescrittoRicevuta',
      'elencoErroriRicetteType' => '\\elencoErroriRicetteType',
      'erroreRicettaType' => '\\erroreRicettaType',
      'elencoComunicazioniType' => '\\elencoComunicazioniType',
      'comunicazioneType' => '\\comunicazioneType',
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
        $wsdl = 'demAnnullaPrescritto.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param AnnullaPrescrittoRichiesta $AnnullaPrescrittoRichiesta
     * @return AnnullaPrescrittoRicevuta
     */
    public function annullaPrescritto(AnnullaPrescrittoRichiesta $AnnullaPrescrittoRichiesta)
    {
      return $this->__soapCall('annullaPrescritto', array($AnnullaPrescrittoRichiesta));
    }

}
