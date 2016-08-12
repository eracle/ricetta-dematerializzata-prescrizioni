<?php
require('ClientPrescrizione.php');

require_once('config.php');

class ClientPrescrizioneTest extends PHPUnit_Framework_TestCase
{



    public function test_services(){
      

    }





/*
public function test_InvioPrescritto(){
      $client = new ClientPrescrizione();
      //$this->assertNotNull($client);

      $cfMedico1 = 'PROVAX00X00X000Y';
      $codASLAo = '101';
      $codice_regione_erogatore = '020';
      $codSpecializzazione = 'F';
      $tipoPrescrizione = 'F';
      $codDiagnosi = '12';
      $codProdPrest1 = '123';
      $descrProdPrest1 = 'prova';

      $response = $client -> InvioPrescritto(
        $cfMedico1,
        $codASLAo,
        $codice_regione_erogatore,
        $codSpecializzazione,
        $tipoPrescrizione,
        $codDiagnosi,
        $codProdPrest1,
        $descrProdPrest1
      );

      echo "====== REQUEST HEADERS =====" . PHP_EOL;
      echo var_dump($client-> invioPrescritto -> __getLastRequestHeaders());
      echo "========= REQUEST ==========" . PHP_EOL;
      var_dump($client-> invioPrescritto -> __getLastRequest());
      echo "========= RESPONSE =========" . PHP_EOL;
      var_dump($response);

}
*
*/

}
?>
