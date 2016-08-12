<?php


/*********************************************************

					Parte di Configurazione:

**********************************************************/

/* Soap login name. */
define( "LOGIN" , "PROVAX00X00X000Y" );

/* Soap password. */
define( "PASSWORD" , "Salve123" );

define( "PINCODE" , "1234567890");

/** DEFINIZIONE CERTIFICATI **/

/* Path del file contenente il certificato della CA (Certification authority). */
define( "CA_CERT_FILE" ,  "./cert/chain.pem" );
//define( "CA_CERT_FILE" ,  "./cert/ca_test.crt" );
//define ( "CA_PATH" , "./cert/" );

/* Path del file del certificato usato per SSL. */
//define( "SSL_CERTIFICATE" ,  "/home/eracle/php/git/client_prescrizione/src/cert/demservicetest.pem" );

/* Path del file del certificato usato per cifrare il pincode. */
define( "CERT_CIFRA_PINCODE" , "./cert/SanitelCF.cer" );


/** DEFINIZIONE ENDPOINTS dei VARI SERVIZI**/

/* Endpoint di test: */
//define( "ENDPOINT_DOMAIN" , "https://demservicetest.sanita.finanze.it");

// Endpoint di produzione */
define( "ENDPOINT_DOMAIN" , "https://demservice.sanita.finanze.it");

/* Endpoint del servizio di invio di una richiesta di prescrizione. */
define( "demInvioPrescritto_ENDPOINT",
	ENDPOINT_DOMAIN."/DemRicettaPrescrittoServicesWeb/services/demInvioPrescritto");


/* Endpoint del servizio di visualizzazione dei dati di una prescrizione. */
define( "demVisualizzaPrescritto_ENDPOINT",
	ENDPOINT_DOMAIN."/DemRicettaPrescrittoServicesWeb/services/demVisualizzaPrescritto");


/* Endpoint del servizio di annullamento di una prescrizione. */
define( "demAnnullaPrescritto_ENDPOINT",
	ENDPOINT_DOMAIN."/DemRicettaPrescrittoServicesWeb/services/demAnnullaPrescritto");


/* Endpoint del servizio di interrogazione nre utilizzati. */
define( "demInterrogaNreUtilizzati_ENDPOINT",
	ENDPOINT_DOMAIN."/DemRicettaInterrogazioniServicesWeb/services/demInterrogaNreUtilizzati");






/** DEFINIZIONE FILE WSDL **/

/* Directory contenente il file wsdl dello specifico servizio. */
define( "demInvioPrescritto_WSDL","./wsdl/demInvioPrescritto.wsdl");

/* Directory contenente il file wsdl dello specifico servizio. */
define( "demVisualizzaPrescritto_WSDL","./wsdl/demVisualizzaPrescritto.wsdl");

/* Directory contenente il file wsdl dello specifico servizio. */
define( "demAnnullaPrescritto_WSDL","./wsdl/demAnnullaPrescritto.wsdl");

/* Directory contenente il file wsdl dello specifico servizio. */
define( "demInterrogaNreUtilizzati_WSDL","./wsdl/demInterrogaNreUtilizzati.wsdl");






?>
