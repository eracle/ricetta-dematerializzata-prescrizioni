<?php
require_once('config.php');
require_once('demServices/autoload_invioPrescritto.php');
require_once('demServices/autoload_visualizzaPrescritto.php');
require_once('demServices/autoload_annullaPrescritto.php');
require_once('demServices/autoload_interrogaNreUtilizzati.php');

/*********************************************************


					DEFINIZIONE DELLA CLASSE:


*********************************************************/
/**
* Classe di interfacciamento con i web service SOGEI.
*/
class ClientPrescrizione{

	/* SoapClient per il servizio di invio di una prescrizione */
	public $invioPrescritto;

	/* SoapClient per il servizio di visualizzazione di una prescrizione */
	public $visualizzaPrescritto;

	/* SoapClient per il servizio di annullamento di una prescrizione */
	public $annullaPrescritto;

	/* SoapClient per il servizio di interrogazione degli nre utilizzati */
	public $interrogaNreUtilizzati;



	/* Chiave publica usata per criptare e decriptare di alcuni campi del messaggio soap.*/
	private $publicKey;

	/* Codice PIN cifrato.*/
	private $pinCode_cifrato;





	public function ClientPrescrizione(){

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
					//'capath' => CA_PATH,
					'cafile' => CA_CERT_FILE,
					'verify_depth' => 3)
				));

		// Cifratura pincode
		$this->pinCode_cifrato = $this -> cifraSanitel(PINCODE);


		/* Inizializzazione oggetti SoapClient */
		$this -> invioPrescritto = new DemInvioPrescritto(
			array(
				'login' => LOGIN,
				'password' => PASSWORD,
				'location' => demInvioPrescritto_ENDPOINT,
				'authentication' => SOAP_AUTHENTICATION_BASIC,
				'stream_context' => $context,
				'cache_wsdl' => WSDL_CACHE_NONE,
				//'local_cert'    => SSL_CERTIFICATE,
				'trace' => 1
			),
			demInvioPrescritto_WSDL
		);

    $this -> visualizzaPrescritto = new DemVisualizzaPrescritto(
		array(
			'login' => LOGIN,
			'password' => PASSWORD,
			'location' => demVisualizzaPrescritto_ENDPOINT,
			'authentication' => SOAP_AUTHENTICATION_BASIC,
			'stream_context' => $context,
			'cache_wsdl' => WSDL_CACHE_NONE,
			//'local_cert'    => SSL_CERTIFICATE,
			'trace' => 1
		),
		demVisualizzaPrescritto_WSDL
	);


		$this -> annullaPrescritto = new DemAnnullaPrescritto(
			array(
				'login' => LOGIN,
				'password' => PASSWORD,
				'location' => demAnnullaPrescritto_ENDPOINT,
				'authentication' => SOAP_AUTHENTICATION_BASIC,
				'stream_context' => $context,
				'cache_wsdl' => WSDL_CACHE_NONE,
				//'local_cert'    => SSL_CERTIFICATE,
				'trace' => 1
			),
			demAnnullaPrescritto_WSDL
		);



		$this -> interrogaNreUtilizzati = new DemInterrogaNreUtilizzati(
			array(
				'login' => LOGIN,
				'password' => PASSWORD,
				'location' => demInterrogaNreUtilizzati_ENDPOINT,
				'authentication' => SOAP_AUTHENTICATION_BASIC,
				'stream_context' => $context,
				'cache_wsdl' => WSDL_CACHE_NONE,
				//'local_cert'    => SSL_CERTIFICATE,
				'trace' => 1
			),
			demInterrogaNreUtilizzati_WSDL
		);

	}


/*
*
*		@param	$codProdPrest1				Codice prodotto farmaceutico (AIC) nel caso di prescrizione di farmaco con nome commerciale; Codice prestazione specialistica secondo il tariffario della regione del medico prescrittore. Si veda apposita nota di seguito per la spiegazione ( (***) Impostazione dei codici nomenclatore, catalogo e relative descrizioni per le prestazioni specialistiche) (Elemento facoltativo per le ricette farmaceutiche; elemento obbligatorio per le ricette specialistiche).
*		@param	$codProdPrest2
*		@param	$codProdPrest3
*		@param	$codProdPrest4
*		@param	$codProdPrest5
*		@param	$codProdPrest6
*		@param	$codProdPrest7
*		@param	$codProdPrest8
*		@param 	$descrProdPrest1			Descrizione testuale: - della prescrizione farmaceutica come da Prontuario terapeutico, - della prestazione specialistica. Si veda apposita nota di seguito per la spiegazione ( (***) Impostazione dei codici nomenclatore, catalogo e relative descrizioni per le prestazioni specialistiche) Il contenuto di tale campo è ciò che verrà visualizzato dall’erogatore. (Elemento obbligatorio).
*		@param 	$descrProdPrest2
*		@param 	$descrProdPrest3
*		@param 	$descrProdPrest4
*		@param 	$descrProdPrest5
*		@param 	$descrProdPrest6
*		@param 	$descrProdPrest7
*		@param 	$descrProdPrest8
*/
	public function InvioPrescritto(
		$cfMedico1,
		$codASLAo,
		$codRegione,
		$codSpecializzazione,
		$tipoPrescrizione,
		$codDiagnosi,
		$codProdPrest1,
		$descrProdPrest1,
		$codProdPrest2 = NULL,
		$codProdPrest3 = NULL,
		$codProdPrest4 = NULL,
		$codProdPrest5 = NULL,
		$codProdPrest6 = NULL,
		$codProdPrest7 = NULL,
		$codProdPrest8 = NULL,
		$descrProdPrest2 = '',
		$descrProdPrest3 = '',
		$descrProdPrest4 = '',
		$descrProdPrest5 = '',
		$descrProdPrest6 = '',
		$descrProdPrest7 = '',
		$descrProdPrest8 = ''
	){

		$prescrizioni = array();
		$this -> init_prescrizione($prescrizioni, $codProdPrest1, $descrProdPrest1);
		$this -> init_prescrizione($prescrizioni, $codProdPrest2, $descrProdPrest2);
		$this -> init_prescrizione($prescrizioni, $codProdPrest3, $descrProdPrest3);
		$this -> init_prescrizione($prescrizioni, $codProdPrest4, $descrProdPrest4);
		$this -> init_prescrizione($prescrizioni, $codProdPrest5, $descrProdPrest5);
		$this -> init_prescrizione($prescrizioni, $codProdPrest6, $descrProdPrest6);
		$this -> init_prescrizione($prescrizioni, $codProdPrest7, $descrProdPrest7);
		$this -> init_prescrizione($prescrizioni, $codProdPrest8, $descrProdPrest8);


		$elenco_prescrizioni = new elencoDettagliPrescrizioniType($prescrizioni);

		//echo var_dump($elenco_prescrizioni);

		return $this	->	__InvioPrescritto(
			$elenco_prescrizioni,
			$cfMedico1,
			$codASLAo,
			$codRegione,
			$codSpecializzazione,
			$tipoPrescrizione,
			$codDiagnosi
		);

	}

	public function init_prescrizione($prescrizioni , $codProdPrest, $descrProdPres){
		/*vedere la classe dettaglioPrescrizioneType per ottenere informazioni sugli ulteriori campi che
		e' possibile inserire in una singola prescrizione.
		*/
		if(!is_null($codProdPrest)){
			$det_prescrizione = new dettaglioPrescrizioneType(1);
			$det_prescrizione->setCodProdPrest($codProdPrest);
			$det_prescrizione->setDescrProdPrest($descrProdPres);
			array_push($prescrizioni,$det_prescrizione);
		}
	}



	/**
	*		Permette l'invio di una prescrizione.
	*		@param	$ElencoDettagliPrescrizioni		Elenco delle prescrizioni, istanza della classe elencoDettagliPrescrizioniType (Elemento obbligatorio).
	*		@param	$cfMedico1										Codice fiscale del medico “titolare”. (Elemento obbligatorio).
	*		@param	$codASLAo											Codice ASL del medico prescrittore indicato in cfMedico1. (Elemento obbligatorio).
	*		@param	$codRegione			 							Codice Regione / Provincia Autonoma del medico prescrittore indicato in cfMedico1 (Elemento obbligatorio) .
	*		@param	$codSpecializzazione					Specializzazione del medico prescrittore indicato in cfMedico1.  (Elemento obbligatorio).
	*		@param	$tipoPrescrizione							Valori ammessi in maniera esclusiva: F:farmaceutica, P: specialistica. (Elemento obbligatorio)
	*		@param	$codDiagnosi									Codice diagnosi o del sospetto diagnostico secondo la codifica ICD9-CM. Regole di compilazione dei campi codDiagnosi e descrizioneDiagnosi per ricette specialistiche: ciascuno dei due campi può essere compilato in alternativa all’altro, oppure possono essere compilati entrambi. Quindi si può avere: - solo codDiagnosi compilato, - solo descrDiagnosi compilato, - codDiagnosi e descrDiagnosi compilati entrambi. Per tutte le prescrizioni specialistiche la compilazione di almeno uno dei due campi è obbligatoria. (Elemento facoltativo per ricette farmaceutiche, elemento obbligatorio per ricette specialistiche)
	*		@param	$cfMedico2			 							Codice fiscale del medico “sostituto”. (Elemento facoltativo) .
	*		@param	$codStruttura		 							Codice della struttura dove opera il medico indicato in cfMedico1 (Elemento facoltativo) -se la regione ha definito tale dato per i propri medici, il codice struttura deve essere inserito obbligatoriamente, -se la regione non ha definito tale dato per i propri medici, il codice struttura deve essere obbligatoriamente lasciato vuoto.
	*		@param	$testata1				 							Campo destinato a informazioni aggiuntive (Elemento facoltativo) .
	*		@param	$testata2				 							Campo riservato alle Regioni, nel quale possono inserire informazioni di loro interesse, non controllate dal SAC. Deve essere rispettata la lunghezza del campo e l’utilizzo dei caratteri ammessi. (Elemento facoltativo) .
	*		@param	$nre						 							L’elemento contiene il Numero di ricetta elettronica (NRE). Se l’elemento è vuoto, anche se l’inviante è una Regione con SAR, l’NRE lo assegna il SAC .
	*		@param	$tipoRic				 							Tipologia della ricetta compilata. Il campo Codice assistito è compilato o meno in funzione del Tipo Ricetta. (Elemento facoltativo)  Valori ammessi: EE = Assicurati extra-europei in temporaneo soggiorno UE = Assicurati europei in temporaneo soggiorno NA = Assistiti SASN con visita ambulatoriale ND = Assistiti SASN con visita domiciliare NE = Assistiti da istituzioni europee NX = Assistiti SASN extraeuropei ST = Stranieri in temporaneo soggiorno .
	*		@param	$codiceAss			 							Codice Fiscale/STP/ENI/altro che rappresenta l’assistito per cui viene compilata la ricetta. Il campo non va compilato per i soggetti stranieri, per i quali esiste l’apposita sezione. Il Codice assistito deve essere coerente con quanto indicato nel campo Tipo Ricetta. Tale campo deve essere inserito criptato tramite l’utilizzo del certificato SanitelCF.cer. (Elemento facoltativo).
	*		@param	$cognNome				 							Cognome e nome dell’assistito o sue iniziali ove prescritto dalla legge (Elemento facoltativo).
	*		@param	$indirizzo			 							Indirizzo dell’assistito ove prescritto dalla legge (Elemento facoltativo).
	*		@param	$oscuramDati		 							Su richiesta dell’assistito i dati relativi al suo “Cognome e Nome” e all’”Indirizzo” possono essere oscurati e non resi visibili all’erogatore. (Elemento facoltativo) Valori ammessi: “null”= dati visibili all’erogatore, 1			= dati oscurati all’erogatore e visibili solo su richiesta .
	*		@param	$numTessSasn		 							Numero tessera assistenza SASN, da compilarsi in maniera obbligatoria solo per assistiti SASN come nella matrice dei ricettari cartacei (Elemento facoltativo).
	*		@param	$socNavigaz			 							Società di navigazione, da compilarsi in maniera obbligatoria solo per assistiti SASN, come nella matrice dei ricettari cartacei. (Elemento facoltativo).
	*		@param	$ricettaInterna	 							Il campo, se impostato, indica che la ricetta per prestazioni specialistiche prescritta internamente ad una struttura pubblica deve essere erogata all’interno della stessa struttura. Valori ammessi: “null”= la ricetta non è sottoposta a vincoli di erogazione in una determinata struttura, 1= la ricetta deve essere erogata nella stessa struttura di prescrizione. (Elemento facoltativo).
	*		@param	$codEsenzione		 							Codice esenzione riportato in ricetta (Elemento facoltativo) .
	*		@param	$nonEsente			 							Campo che indica se l’assistito è esente oppure no. (Elemento facoltativo) Valori ammessi: “null”= ricetta per assistito esente, 1= ricetta per assistito non esente.  .
	*		@param	$reddito				 							Campo che indica se l’assistito è esente per reddito oppure no. (Elemento facoltativo) Valori ammessi: “null”= ricetta per assistito non esente per reddito, 1= ricetta per assistito esente per reddito  .
	*		@param	$descrizioneDiagnosi					Descrizione della diagnosi o del sospetto diagnostico in testo libero. Regole di compilazione dei campi codDiagnosi e descrizioneDiagnosi per ricette specialistiche: ciascuno dei due campi può essere compilato in alternativa all’altro, oppure possono essere compilati entrambi. Quindi si può avere: - solo codDiagnosi compilato, - solo descrDiagnosi compilato, - codDiagnosi e descrDiagnosi compilati entrambi. Per tutte le prescrizioni specialistiche la compilazione di almeno uno dei due campi è obbligatoria. (Elemento facoltativo per ricette farmaceutiche, elemento obbligatorio per ricette specialistiche).
	*		@param	$dataCompilazione							Data compilazione della ricetta da parte del medico nel formato aaaa-mm-gg HH:MM:SS (Elemento obbligatorio).
	*		@param	$tipoVisita										Tipologia della visita. Valori ammessi: A = ambulatoriale D = domiciliare (Elemento obbligatorio).
	*		@param	$dispReg											Disposizioni regionali specifiche (Elemento facoltativo).
	*		@param	$provAssistito								Provincia di residenza dell’assistito, Il campo deve essere compilato congiuntamente a AslAssistito. (Elemento facoltativo).
	*		@param	$aslAssistito									Asl di residenza dell’assistito Il campo deve essere compilato congiuntamente a ProvAssistito. (Elemento facoltativo).
	*		@param	$indicazionePrescr						Tipologia della prescrizione. Valori ammessi: “null”= campo non impostato S= Suggerita, H= Ricovero, (Elemento facoltativo).
	*		@param	$altro												Il campo “Altro”, come da ricetta cartacea, a disposizione per usi futuri. Valore ammesso: “null”= campo non impostato A=Altro (Elemento facoltativo).
	*		@param	$classePriorita								Classe di priorità della prescrizione. Valori ammessi: “null”= campo non impostato U=” Nel più breve tempo possibile, comunque, se differibile, entro 72 ore”, B=”Entro 10 giorni”, D=”Entro 30 (visite), entro 60 giorni (visite strumentali)”, P=”Senza priorità” N.B.: nel caso in cui nelle ricette siano presenti più prestazioni, la classe di priorità sarà ricondotta a tutte le prestazioni presenti nella ricetta. La classe priorità è obbligatoria se almeno una delle prestazioni della ricetta fa parte della lista delle prestazioni del PNGLA. (Elemento obbligatorio unicamente per le prestazioni del Piano Nazionale Governo Liste d’Attesa (PNGLA), elemento facoltativo per tutte le altre prestazioni).
	*		@param	$statoEstero									Stato del soggetto assicurato da istituzioni estere (Elemento facoltativo).
	*		@param	$istituzCompetente						Istituzione competente del soggetto assicurato da istituzioni estere (Elemento facoltativo).
	*		@param	$numIdentPers									Numero di identificazione personale del soggetto assicurato da istituzioni estere (Elemento facoltativo).
	*		@param	$numIdentTess									Numero di identificazione della tessera del soggetto assicurato da istituzioni estere (Elemento facoltativo).
	*		@param	$dataNascitaEstero						Data di nascita del soggetto assicurato da istituzioni estere nel formato Aaaa-mm-gg (Elemento facoltativo).
	*		@param	$dataScadTessera							Data scadenza della tessera del soggetto assicurato da istituzioni estere nel formato Aaaa-mm-gg (Elemento facoltativo).ù
	*/
	public function __InvioPrescritto(
		$ElencoDettagliPrescrizioni,
		$cfMedico1,
		$codASLAo,
		$codRegione,
		$codSpecializzazione,
		$tipoPrescrizione,
		$codDiagnosi,
		$cfMedico2 = '',
		$codStruttura = '',
		$testata1 = '',
		$testata2 = '',
		$nre = '',
		$tipoRic = '',
		$codiceAss = '',
		$cognNome = '',
		$indirizzo = '',
		$oscuramDati = '',
		$numTessSasn = '',
		$socNavigaz = '',
		$ricettaInterna = '',
		$codEsenzione = '',
		$nonEsente = '',
		$reddito = '',
		$descrizioneDiagnosi = '',
		$dataCompilazione = NULL,
		$tipoVisita = 'A',
		$dispReg = '',
		$provAssistito = '',
		$aslAssistito = '',
		$indicazionePrescr = '',
		$altro = '',
		$classePriorita = '',
		$statoEstero = '',
		$istituzCompetente = '',
		$numIdentPers = '',
		$numIdentTess = '',
		$dataNascitaEstero = '',
		$dataScadTessera = ''
		){


		//Codice PIN in possesso del soggetto abilitato all’invio. (Elemento obbligatorio) Tale campo deve essere inserito criptato tramite l’utilizzo del certificato SanitelCF.cer.
		$pinCode = $this -> pinCode_cifrato;

		//TODO: testare la data che sia nel formato giusto
		$dataCompilazione = date('Y-m-d h:i:s');



		$InvioPrescrittoRicevuta = $this -> invioPrescritto -> invioPrescritto(
		new InvioPrescrittoRichiesta($pinCode, $cfMedico1, $cfMedico2, $codRegione, $codASLAo, $codStruttura, $codSpecializzazione, $testata1, $testata2, $nre, $tipoRic, $codiceAss, $cognNome, $indirizzo, $oscuramDati, $numTessSasn, $socNavigaz, $tipoPrescrizione, $ricettaInterna, $codEsenzione, $nonEsente, $reddito, $codDiagnosi, $descrizioneDiagnosi, $dataCompilazione, $tipoVisita, $dispReg, $provAssistito, $aslAssistito, $indicazionePrescr, $altro, $classePriorita, $statoEstero, $istituzCompetente, $numIdentPers, $numIdentTess, $dataNascitaEstero, $dataScadTessera, $ElencoDettagliPrescrizioni ));
		return $InvioPrescrittoRicevuta;
	}


	/**
	* Permette la visualizzazione di una prescrizione./*
	* @param  $nre          Numero Ricetta Elettronica
	* @param  $cfMedico     Codice fiscale del medico “titolare” o “sostituto” che ha prescritto la ricetta. Si veda apposita nota per la spiegazione( (**)Regole da seguire per la prescrizione da parte di sostituti).
	*/
	public function VisualizzaPrescritto($nre, $cfMedico){
		//Codice PIN in possesso del soggetto abilitato all’invio. (Elemento obbligatorio) Tale campo deve essere inserito criptato tramite l’utilizzo del certificato SanitelCF.cer.
		$pinCode = $this -> pinCode_cifrato;

		return $this -> visualizzaPrescritto -> visualizzaPrescritto(new VisualizzaPrescrittoRichiesta($pinCode, $nre, $cfMedico));

	}


	/**
	* Permette l'annullamento di una prescrizione.
	* @param  $nre          Numero Ricetta Elettronica
	* @param  $cfMedico     Codice fiscale del medico “titolare” o “sostituto” che ha prescritto la ricetta. Si veda apposita nota per la spiegazione( (**)Regole da seguire per la prescrizione da parte di sostituti).
	*/
	public function AnnullaPrescritto($nre, $cfMedico){
		//Codice PIN in possesso del soggetto abilitato all’invio. (Elemento obbligatorio) Tale campo deve essere inserito criptato tramite l’utilizzo del certificato SanitelCF.cer.
		$pinCode = $this -> pinCode_cifrato;

		return $this -> annullaPrescritto -> annullaPrescritto(new AnnullaPrescrittoRichiesta($pinCode, $nre, $cfMedico));

	}

		/**
		* Permette di visualizzare gli nre utilizzati.
		* @param	$codRegione									 	Codice Regione / Provincia Autonoma del medico prescrittore per cui si richiede la lista;
		* @param	$cfMedico											Codice fiscale del medico titolare della ricetta;
		*	@param	$nre													Numero Ricetta Elettronica (è un criterio di ricerca).	Se l’NRE è l’unico criterio di ricerca che si vuole adottare per avere in risposta i dati puntuali su un certo numero elettronico, tale elemento diventa obbligatorio.
		* @param	$codLotto											Codice del lotto di NRE (è un criterio di ricerca);
		* @param	$cfAssistito									Codice fiscale dell’assistito presente in ricetta (è un criterio di ricerca);
		* @param	$tipoPrescr										Tipologia di prescrizione (è un criterio di ricerca) Elemento facoltativo. Valori: F= prescrizione farmaceutica P= prescrizione specialistica.
		* @param	$dataCompilazioneRicettaDal		Data di compilazione della ricetta- limite minimo (è un criterio di ricerca) Elemento facoltativo. In tale campo va inserito il limite inferiore del range di ricerca. Tale elemento è obbligatorio se i criteri di ricerca sono diversi dall’nre puntuale.
		* @param	$dataCompilazioneRicettaAl		Data di compilazione della ricetta- limite massimo (è un criterio di ricerca) Elemento facoltativo. In tale campo va inserito il limite superiore del range di ricerca. Tale elemento è obbligatorio se i criteri di ricerca sono diversi dall’nre puntuale.
		*/
		public function InterrogaNreUtilizzati(
			$codRegione,
			$cfMedico,
			$nre = '',
			$codLotto = '',
			$cfAssistito = '',
			$tipoPrescr = '',
			$dataCompilazioneRicettaDal = '',
			$dataCompilazioneRicettaAl = ''
			){
				//Codice PIN in possesso del soggetto abilitato all’invio. (Elemento obbligatorio) Tale campo deve essere inserito criptato tramite l’utilizzo del certificato SanitelCF.cer.
				$pinCode = $this -> pinCode_cifrato;

				return $this -> interrogaNreUtilizzati -> interrogaNreUtilizzati(
				new InterrogaNreUtilRichiesta($pinCode, $codRegione, $nre, $codLotto, $cfMedico, $cfAssistito, $tipoPrescr, $dataCompilazioneRicettaDal, $dataCompilazioneRicettaAl));

	}


	/*
	* Cifra con il certificato "SanitelCertificate".
	*/
	public function cifraSanitel($text) {
		openssl_public_encrypt($text, $cryptText, $this->publicKey, OPENSSL_PKCS1_PADDING);
		return (base64_encode($cryptText));

	}


}

?>
