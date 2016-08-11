<?php
//require('ClientPrescrizione.php');
require_once('demInvioPrescritto/autoload.php');
require_once('config.php');

class ClientPrescrizioneTest extends PHPUnit_Framework_TestCase
{



    public function test_InvioPrescritto(){




      //$ret =

      //echo json_encode($ret);


      /*
      $prescrizioni = array(
        array(
        'codProdPrest' => '89.7',
        'descrProdPrest' =>'',
        'quantita' => 1
        )
    );
    echo json_encode($prescrizioni);
    echo PHP_EOL;
      $client = new ClientPrescrizione();
      $this->assertNotNull($client);

      $risposta = $client -> InvioPrescritto(
    		'PROVAX00X00X000Y',
    		'130',
    		'202',
    		'F',
    		'P',
    		'',//  oppure campo descrizioneDiagnosi vedi TODO dopo
    		$prescrizioni
    	);

      echo json_encode($risposta);
      echo PHP_EOL;
      */
    }


}
?>
