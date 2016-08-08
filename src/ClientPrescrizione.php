<?php
//require('config_endpoint.php');
require('config_endpoint_test.php');


/*********************************************************

					Parte di Configurazione:

**********************************************************/

/* Soap login name. */
define( "LOGIN" , "" );

/* Soap password. */
define( "PASSWORD" , "" );


/* Codice PIN in possesso del Elemento soggetto erogatore o del SAR che obbligatorio richiede il servizio. */
define( "PINCODE" , "3070279104" );

/* Codice della regione della struttura erogatrice. */
define( "CODICE_REGIONE_EROGATORE" , "190" );

/* Codice della ASL della struttura erogatrice. */
define( "CODICE_ASL_EROGATORE" , "206" );

/* Codice della struttura erogatrice secondo la codifica con cui sono state assegnate le credenziali di accesso al Sistema TS. */
define( "CODICE_SSA_EROGATORE" , "440500" );

/* Identificativo dell’utente che ha effettuato l’operazione.*/
define( "PWD" , "UZ8GAXCT" );



/** DEFINIZIONE CERTIFICATI **/

/* Path del file contenente il certificato della CA (Certification authority). */
define( "CA_CERT_FILE" ,  "./cert/AddTrustExternalCARoot.crt" );

/* Path del file del certificato SSL usato per cifrare il pincode. */
define( "CERT_CIFRA_PINCODE" , "./cert/SanitelCF.cer" );





/** DEFINIZIONE FILE WSDL **/

/* Directory contenente il file wsdl dello specifico servizio. */
define( "demInvioPrescritto_WSDL","./wsdl/demInvioPrescritto.wsdl");

/* Directory contenente il file wsdl dello specifico servizio. */
define( "demVisualizzaPrescritto_WSDL","./wsdl/demVisualizzaPrescritto.wsdl");

/* Directory contenente il file wsdl dello specifico servizio. */
define( "demAnnullaPrescritto_WSDL","./wsdl/demAnnullaPrescritto.wsdl");

/* Directory contenente il file wsdl dello specifico servizio. */
define( "demInterrogaNreUtilizzati_WSDL","./wsdl/demInterrogaNreUtilizzati.wsdl");




/*********************************************************


					DEFINIZIONE DELLA CLASSE:


*********************************************************/
/**
* Classe di interfacciamento con i web service SOGEI.
*/
class ClientPrescrizione{

	/* SoapClient per il servizio di invio di una prescrizione */
	public $client_demInvioPrescritto

	/* SoapClient per il servizio di visualizzazione di una prescrizione */
	public $client_demVisualizzaPrescritto

	/* SoapClient per il servizio di annullamento di una prescrizione */
	public $client_demAnnullaPrescritto

	/* SoapClient per il servizio di interrogazione degli nre utilizzati */
	public $client_demInterrogaNreUtilizzati



	/* Chiave publica usata per criptare e decriptare di alcuni campi del messaggio soap.*/
	private $publicKey;

	/* Codice PIN cifrato.*/
	private $pinCode_cifrato;





	public functinon ClientPrescrizione(){

		/*
		*  Apertura del file contenente la chiave publica "sanitel"
		*/
		$keyFile = fopen(CERT_CIFRA_PINCODE, "r");
		$this->publicKey = fread($keyFile, 8192);
		fclose($keyFile);
		openssl_get_publickey($this->publicKey);

		/*
		* Inizializzazione del contesto necessario
		* per effettuare la chiamata soap, in modo da usare ssl e
		* verificare il certificato del server attraverso l'uso
		* del file ca (certification authority).
		*/
		$context = stream_context_create(
			array(
				'ssl' => array(
					'verify_peer' => true,
					'cafile' => CA_CERT_FILE,
					'verify_depth' => 3)
				));

		// Cifratura pincode
		if (PINCODE <> '') {
			$this->pinCode_cifrato = $this -> cifraSanitel(PINCODE);
		}


		/* Inizializzazione oggetti SoapClient */
		$this->$client_demInvioPrescritto = new SoapClient(
			demInvioPrescritto_WSDL,
			array(
				'login' => LOGIN,
				'password' => PASSWORD,
				'location' => demInvioPrescritto_ENDPOINT,
				'authentication' => SOAP_AUTHENTICATION_BASIC,
				'stream_context' => $context
			));

		$this->$client_demVisualizzaPrescritto = new SoapClient(
			demVisualizzaPrescritto_WSDL,
			array(
				'login' => LOGIN,
				'password' => PASSWORD,
				'location' => demVisualizzaPrescritto_ENDPOINT,
				'authentication' => SOAP_AUTHENTICATION_BASIC,
				'stream_context' => $context
			));

		$this->$client_demAnnullaPrescritto = new SoapClient(
			demAnnullaPrescritto_WSDL,
			array(
				'login' => LOGIN,
				'password' => PASSWORD,
				'location' => demAnnullaPrescritto_ENDPOINT,
				'authentication' => SOAP_AUTHENTICATION_BASIC,
				'stream_context' => $context
			));

		$this->$client_demInterrogaNreUtilizzati = new SoapClient(
			demInterrogaNreUtilizzati_WSDL,
			array(
				'login' => LOGIN,
				'password' => PASSWORD,
				'location' => demInterrogaNreUtilizzati_ENDPOINT,
				'authentication' => SOAP_AUTHENTICATION_BASIC,
				'stream_context' => $context
			));


	}



	/*
	* Cifra con il certificato "SanitelCertificate".
	*/
	public function cifraSanitel($text) {
		openssl_public_encrypt($text, $cryptText, $this->publicKey, OPENSSL_PKCS1_PADDING);
		return (base64_encode($cryptText));

	}




	/**
	*  Permette l'invio di una prescrizione.
	*  @param
	*/
	public function InvioPrescritto(){

	}


	/**
	*  Permette la visualizzazione di una prescrizione.
	*  @param
	*/
	public function VisualizzaPrescritto(){

	}


	/**
	*  Permette l'annullamento di una prescrizione.
	*  @param
	*/
	public function AnnullaPrescritto(){

	}


	/**
	*  Permette di visualizzare gli nre utilizzati.
	*  @param
	*/
	public function InterrogaNreUtilizzati(){

	}
}

?>
