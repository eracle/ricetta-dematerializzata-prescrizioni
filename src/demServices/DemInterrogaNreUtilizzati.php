<?php

class DemInterrogaNreUtilizzati extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'InterrogaNreUtilRichiesta' => '\\InterrogaNreUtilRichiesta',
      'InterrogaNreUtilRicevuta' => '\\InterrogaNreUtilRicevuta',
      'elencoNreUtilRecordType' => '\\elencoNreUtilRecordType',
      'nreUtilRecordType' => '\\nreUtilRecordType',
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
        $wsdl = 'demInterrogaNreUtilizzati.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param InterrogaNreUtilRichiesta $InterrogaNreUtilRichiesta
     * @return InterrogaNreUtilRicevuta
     */
    public function interrogaNreUtilizzati(InterrogaNreUtilRichiesta $InterrogaNreUtilRichiesta)
    {
      return $this->__soapCall('interrogaNreUtilizzati', array($InterrogaNreUtilRichiesta));
    }

}
