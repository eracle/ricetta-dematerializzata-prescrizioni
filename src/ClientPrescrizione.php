<?php
require_once('config.php');


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
	public $client_demVisualizzaPrescritto;

	/* SoapClient per il servizio di annullamento di una prescrizione */
	public $client_demAnnullaPrescritto;

	/* SoapClient per il servizio di interrogazione degli nre utilizzati */
	public $client_demInterrogaNreUtilizzati;



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
					'cafile' => CA_CERT_FILE,
					'verify_depth' => 3)
				));

		// Cifratura pincode
//		if (PINCODE <> '') {
//			$this->pinCode_cifrato = $this -> cifraSanitel(PINCODE);
//		}

		/* Inizializzazione oggetti SoapClient */
		$this -> invioPrescritto = new DemInvioPrescritto(
			array(
				'login' => LOGIN,
				'password' => PASSWORD,
				'location' => demInvioPrescritto_ENDPOINT,
				'authentication' => SOAP_AUTHENTICATION_BASIC,
				'stream_context' => stream_context_create(array(
						'ssl' => array(
							'verify_peer' => true,
							'cafile' => CA_CERT_FILE,
							'verify_depth' => 3)
						))
			),
			demInvioPrescritto_WSDL
		);

    /*

		$this->client_demVisualizzaPrescritto = new SoapClient(
			demVisualizzaPrescritto_WSDL,
			array(
				'login' => LOGIN,
				'password' => PASSWORD,
				'location' => demVisualizzaPrescritto_ENDPOINT,
				'authentication' => SOAP_AUTHENTICATION_BASIC,
				'stream_context' => $context
			));


		$this->client_demAnnullaPrescritto = new SoapClient(
			demAnnullaPrescritto_WSDL,
			array(
				'login' => LOGIN,
				'password' => PASSWORD,
				'location' => demAnnullaPrescritto_ENDPOINT,
				'authentication' => SOAP_AUTHENTICATION_BASIC,
				'stream_context' => $context
			));

		$this->client_demInterrogaNreUtilizzati = new SoapClient(
			demInterrogaNreUtilizzati_WSDL,
			array(
				'login' => LOGIN,
				'password' => PASSWORD,
				'location' => demInterrogaNreUtilizzati_ENDPOINT,
				'authentication' => SOAP_AUTHENTICATION_BASIC,
				'stream_context' => $context
			));

*/
	}






	/**
	*  Permette l'invio di una prescrizione.
	*  @param
	*/
	public function InvioPrescritto(
		$cfMedico1,
		$CODICE_REGIONE_EROGATORE,
		$codASLAo,
		$codSpecializzazione,
		$tipoPrescrizione,
		$codDiagnosi,//  oppure campo descrizioneDiagnosi vedi TODO dopo
		$ElencoDettagliPrescrizioni
	){
		/*
		if (isset($cfAssistito)) {
			$cfAssistito_cifrato = $this -> cifraSanitel($cfAssistito);
		}
		*/




		/* Inizializzazione delle valori da inserire nella richiesta
			le variabili commentate devono essere passate dal chiamante di questo metodo. */

		$pinCode = $this->pinCode_cifrato;/* Codice PIN in possesso del soggetto abilitato all’invio. (Elemento obbligatorio) Tale campo deve essere inserito criptato tramite l’utilizzo del certificato SanitelCF.cer. */
		//$cfMedico1;/* Codice fiscale del medico “titolare”. (Elemento obbligatorio) */
		$cfMedico2 = '';/*Codice fiscale del medico “sostituto”. (Elemento facoltativo) */
		$codRegione = CODICE_REGIONE_EROGATORE;/* Codice Regione / Provincia Autonoma del medico prescrittore indicato in cfMedico1 (Elemento obbligatorio) */
		//$codASLAo;/* Codice ASL del medico prescrittore indicato in cfMedico1. (Elemento obbligatorio) */
		$codStruttura = '';/* Codice della struttura dove opera il medico indicato in cfMedico1 (Elemento facoltativo) -se la regione ha definito tale dato per i propri medici, il codice struttura deve essere inserito obbligatoriamente; -se la regione non ha definito tale dato per i propri medici, il codice struttura deve essere obbligatoriamente lasciato vuoto. */
		//$codSpecializzazione;/* Specializzazione del medico prescrittore indicato in cfMedico1.  (Elemento obbligatorio)*/
		$testata1 = ''; /* Campo destinato a informazioni aggiuntive (Elemento facoltativo) */
		$testata2 = ''; /* Campo riservato alle Regioni, nel quale possono inserire informazioni di loro interesse, non controllate dal SAC. Deve essere rispettata la lunghezza del campo e l’utilizzo dei caratteri ammessi. (Elemento facoltativo) */
		$nre = ''; /* L’elemento contiene il Numero di ricetta elettronica (NRE). Se l’elemento è vuoto, anche se l’inviante è una Regione con SAR, l’NRE lo assegna il SAC */
		$tipoRic = ''; /* Tipologia della ricetta compilata. Il campo Codice assistito è compilato o meno in funzione del Tipo Ricetta. (Elemento facoltativo)  Valori ammessi: EE = Assicurati extra-europei in temporaneo soggiorno UE = Assicurati europei in temporaneo soggiorno NA = Assistiti SASN con visita ambulatoriale ND = Assistiti SASN con visita domiciliare NE = Assistiti da istituzioni europee NX = Assistiti SASN extraeuropei ST = Stranieri in temporaneo soggiorno */
		$codiceAss = ''; /* Codice Fiscale/STP/ENI/altro che rappresenta l’assistito per cui viene compilata la ricetta. Il campo non va compilato per i soggetti stranieri, per i quali esiste l’apposita sezione. Il Codice assistito deve essere coerente con quanto indicato nel campo Tipo Ricetta. Tale campo deve essere inserito criptato tramite l’utilizzo del certificato SanitelCF.cer. (Elemento facoltativo)*/
		$cognNome = ''; /* Cognome e nome dell’assistito o sue iniziali ove prescritto dalla legge (Elemento facoltativo)*/
		$indirizzo = ''; /* Indirizzo dell’assistito ove prescritto dalla legge (Elemento facoltativo)*/
		$oscuramDati = ''; /* Su richiesta dell’assistito i dati relativi al suo “Cognome e Nome” e all’”Indirizzo” possono essere oscurati e non resi visibili all’erogatore. (Elemento facoltativo) Valori ammessi: “null”= dati visibili all’erogatore; 1			= dati oscurati all’erogatore e visibili solo su richiesta */
		$numTessSasn = ''; /* Numero tessera assistenza SASN, da compilarsi in maniera obbligatoria solo per assistiti SASN come nella matrice dei ricettari cartacei (Elemento facoltativo)*/
		$socNavigaz = ''; /* Società di navigazione, da compilarsi in maniera obbligatoria solo per assistiti SASN, come nella matrice dei ricettari cartacei. (Elemento facoltativo)*/
		//$tipoPrescrizione; /* Valori ammessi in maniera esclusiva: F:farmaceutica, P: specialistica. (Elemento obbligatorio)*/
		$ricettaInterna = ''; /* Il campo, se impostato, indica che la ricetta per prestazioni specialistiche prescritta internamente ad una struttura pubblica deve essere erogata all’interno della stessa struttura. Valori ammessi: “null”= la ricetta non è sottoposta a vincoli di erogazione in una determinata struttura, 1= la ricetta deve essere erogata nella stessa struttura di prescrizione. (Elemento facoltativo)*/
		$codEsenzione = ''; /* Codice esenzione riportato in ricetta (Elemento facoltativo) */
		$nonEsente = ''; /* Campo che indica se l’assistito è esente oppure no. (Elemento facoltativo) Valori ammessi: “null”= ricetta per assistito esente, 1= ricetta per assistito non esente.  */
		$reddito = ''; /* Campo che indica se l’assistito è esente per reddito oppure no. (Elemento facoltativo) Valori ammessi: “null”= ricetta per assistito non esente per reddito; 1= ricetta per assistito esente per reddito  */
		//$codDiagnosi; /*Codice diagnosi o del sospetto diagnostico secondo la codifica ICD9-CM. Regole di compilazione dei campi codDiagnosi e descrizioneDiagnosi per ricette specialistiche: ciascuno dei due campi può essere compilato in alternativa all’altro, oppure possono essere compilati entrambi. Quindi si può avere: - solo codDiagnosi compilato, - solo descrDiagnosi compilato, - codDiagnosi e descrDiagnosi compilati entrambi. Per tutte le prescrizioni specialistiche la compilazione di almeno uno dei due campi è obbligatoria. (Elemento facoltativo per ricette farmaceutiche; elemento obbligatorio per ricette specialistiche) */
		$descrizioneDiagnosi = ''; /* Descrizione della diagnosi o del sospetto diagnostico in testo libero. Regole di compilazione dei campi codDiagnosi e descrizioneDiagnosi per ricette specialistiche: ciascuno dei due campi può essere compilato in alternativa all’altro, oppure possono essere compilati entrambi. Quindi si può avere: - solo codDiagnosi compilato, - solo descrDiagnosi compilato, - codDiagnosi e descrDiagnosi compilati entrambi. Per tutte le prescrizioni specialistiche la compilazione di almeno uno dei due campi è obbligatoria. (Elemento facoltativo per ricette farmaceutiche; elemento obbligatorio per ricette specialistiche) */

		//TODO: testare la data che sia nel formato giusto
		$dataCompilazione = date('Y-m-d h:i:s');/* Data compilazione della ricetta da parte del medico nel formato aaaa-mm-gg HH:MM:SS (Elemento obbligatorio)*/
		$tipoVisita = 'A'; /* Tipologia della visita. Valori ammessi: A = ambulatoriale D = domiciliare (Elemento obbligatorio)*/
		$dispReg = ''; /* Disposizioni regionali specifiche (Elemento facoltativo)*/
		$provAssistito = ''; /* Provincia di residenza dell’assistito, Il campo deve essere compilato congiuntamente a AslAssistito. (Elemento facoltativo)*/
		$aslAssistito = ''; /* Asl di residenza dell’assistito Il campo deve essere compilato congiuntamente a ProvAssistito. (Elemento facoltativo)*/
		$indicazionePrescr = ''; /* Tipologia della prescrizione. Valori ammessi: “null”= campo non impostato S= Suggerita, H= Ricovero, (Elemento facoltativo)*/
		$altro = ''; /* Il campo “Altro”, come da ricetta cartacea, a disposizione per usi futuri. Valore ammesso: “null”= campo non impostato A=Altro (Elemento facoltativo)*/
		$classePriorita = ''; /* Classe di priorità della prescrizione. Valori ammessi: “null”= campo non impostato U=” Nel più breve tempo possibile, comunque, se differibile, entro 72 ore”, B=”Entro 10 giorni”, D=”Entro 30 (visite), entro 60 giorni (visite strumentali)”, P=”Senza priorità” N.B.: nel caso in cui nelle ricette siano presenti più prestazioni, la classe di priorità sarà ricondotta a tutte le prestazioni presenti nella ricetta. La classe priorità è obbligatoria se almeno una delle prestazioni della ricetta fa parte della lista delle prestazioni del PNGLA. (Elemento obbligatorio unicamente per le prestazioni del Piano Nazionale Governo Liste d’Attesa (PNGLA); elemento facoltativo per tutte le altre prestazioni)*/
		$statoEstero = ''; /* Stato del soggetto assicurato da istituzioni estere (Elemento facoltativo)*/
		$istituzCompetente = ''; /* Istituzione competente del soggetto assicurato da istituzioni estere (Elemento facoltativo)*/
		$numIdentPers = ''; /* Numero di identificazione personale del soggetto assicurato da istituzioni estere (Elemento facoltativo)*/
		$numIdentTess = ''; /* Numero di identificazione della tessera del soggetto assicurato da istituzioni estere (Elemento facoltativo)*/
		$dataNascitaEstero = ''; /* Data di nascita del soggetto assicurato da istituzioni estere nel formato Aaaa-mm-gg (Elemento facoltativo)*/
		$dataScadTessera = ''; /* Data scadenza della tessera del soggetto assicurato da istituzioni estere nel formato Aaaa-mm-gg (Elemento facoltativo)*/
		//$ElencoDettagliPrescrizioni= '';

		$invioPrescritto -> invioPrescritto(new InvioPrescrittoRichiesta($pinCode, $cfMedico1, $cfMedico2, $codRegione, $codASLAo, $codStruttura, $codSpecializzazione, $testata1, $testata2, $nre, $tipoRic, $codiceAss, $cognNome, $indirizzo, $oscuramDati, $numTessSasn, $socNavigaz, $tipoPrescrizione, $ricettaInterna, $codEsenzione, $nonEsente, $reddito, $codDiagnosi, $descrizioneDiagnosi, $dataCompilazione, $tipoVisita, $dispReg, $provAssistito, $aslAssistito, $indicazionePrescr, $altro, $classePriorita, $statoEstero, $istituzCompetente, $numIdentPers, $numIdentTess, $dataNascitaEstero, $dataScadTessera, $ElencoDettagliPrescrizioni ));

		/* Creo la lista della prescrizioni*/
		$lista_prescrizioni = array();

		foreach ($prescrizioni as $key => $value) {
			echo json_encode($key);
			echo json_encode($value);
			echo PHP_EOL;
			array_push($lista_prescrizioni,
				array(
					'DettaglioPrescrizione' => array(
						/*Codice prodotto farmaceutico (AIC) nel caso di prescrizione di farmaco con nome commerciale; Codice prestazione specialistica secondo il tariffario della regione del medico prescrittore. Si veda apposita nota di seguito per la spiegazione ( (***) Impostazione dei codici nomenclatore, catalogo e relative descrizioni per le prestazioni specialistiche) (Elemento facoltativo per le ricette farmaceutiche; elemento obbligatorio per le ricette specialistiche) */
						'codProdPrest' => $value['codProdPrest'] ,

						/* 	Descrizione testuale: - della prescrizione farmaceutica come da Prontuario terapeutico, - della prestazione specialistica. Si veda apposita nota di seguito per la spiegazione ( (***) Impostazione dei codici nomenclatore, catalogo e relative descrizioni per le prestazioni specialistiche) Il contenuto di tale campo è ciò che verrà visualizzato dall’erogatore. (Elemento obbligatorio)
						*/
						'descrProdPrest' => $value['descrProdPrest'],

						/* Il campo deve contenere il codice del gruppo di equivalenza secondo la codifica AIFA, nel caso di prescrizione farmaceutica con principio attivo. (Elemento facoltativo)*/
						//'codGruppoEquival' => ,

						/* Descrizione testuale del gruppo di equivalenza secondo la dizione AIFA. Il campo deve contenere la descrizione associata a codice gruppo equivalenza secondo la codifica AIFA. Il contenuto del campo è ciò che verrà visualizzato in seguito dall’erogatore. (Elemento facoltativo)*/
						//'descrGruppoEquival' => ,

						/* Valore ammesso: null (Elemento facoltativo)*/
						//'testoLibero' => ,

						/* Il campo può essere utilizzato per scrivere una nota esplicativa di ciò che è stato prescritto per prestazioni specialistiche. (Elemento facoltativo)*/
						//'descrTestoLiberoNote' => ,

						/* Il campo, è da utilizzarsi solo per prestazioni farmaceutiche. Se impostato indica che il prodotto, per cui è stato indicato il codice AIC, non può essere sostituito con altro prodotto. Valori ammessi: null = campo non utilizzato 1 = il prodotto farmaceutico indicato tramite codice AIC non può essere sostituito (Elemento facoltativo)*/
						//'nonSost' => ,

						/* Il campo, può essere utilizzato per scrivere un commento in testo libero o una nota esplicativa di ciò che è stato prescritto, ed è valevole solo per prescrizioni farmaceutiche. (Elemento facoltativo)*/
						//'motivazNote' => ,


						/* Il campo contiene i codici di motivazione di non sostituibilità di un farmaco: fare riferimento alle linee guida art. 15, comma 11-bis del DL 95/2012, pubblicate nel portale www.sistemats.it. Deve essere compilato se nonSost vale 1(Elemento facoltativo)*/
						//'codMotivazione' => ,


						/* Nota AIFA (solo per prescrizioni farmaceutiche) (Elemento facoltativo)*/
						//'notaProd' => ,


						/* Quantità di confezioni o di prestazioni specialistiche prescritte. (Elemento obbligatorio)*/
						'quantita' => $value['quantita'],


						/* Campo destinato a informazioni aggiuntive. (Elemento facoltativo)*/
						//'prescrizione1' => ,


						/* Campo riservato alle Regioni, nel quale possono inserire informazioni di loro interesse, non controllate dal SAC. Deve essere rispettata la lunghezza del campo e l’utilizzo dei caratteri ammessi. (Elemento facoltativo)*/
						//'prescrizione2' => ,


						/* Il campo, da utilizzarsi unicamente per prescrizioni specialistiche, deve contenere il codice del catalogo regionale della prestazione prescritta. Si veda apposita nota di seguito per la spiegazione ( (***) Impostazione dei codici nomenclatore, catalogo e relative descrizioni per le prestazioni specialistiche) (Elemento obbligatorio per ricette specialistiche dal momento in cui ogni singola Regione ha fornito al Sistema TS il catalogo regionale delle prestazioni; fino a tale momento l’elemento è facoltativo)*/
						//'codCatalogoPrescr' => ,

						/* Il campo, da utilizzarsi unicamente per prescrizioni specialistiche del PNGLA, indica se la prestazione richiesta si riferisce: - ad un primo accesso (prima visita o primo esame di diagnostica strumentale, 	visita o prestazione di approfondimento erogati da specialista diverso dal primo osservatore e 	nel caso di un paziente cronico, si considera primo accesso, la visita o l’esame strumentale, 	necessari in seguito ad un peggioramento del quadro clinico), -ad un accesso successivo (visita o prestazione di approfondimento, 	per pazienti presi in carico dal primo specialista, , controllo, follow up). Valori ammessi: 	1= primo accesso, 	0= altra tipologia di accesso (Elemento obbligatorio unicamente per ricette specialistiche ove presenti le prestazioni del Piano Nazionale Governo Liste d’Attesa (PNGLA); elemento facoltativo per tutte le altre prestazioni)*/
						//'tipoAccesso' => ,

						/* Numero progressivo identificativo della nota come previsto nel DM 9 dic 2015 per uno specifico codice prestazione. Il numero nota è sempre presente per le prestazioni del DM 9 dic 2015. Cfr nota (1) (Elemento obbligatorio unicamente per le prescrizioni specialistiche trattate dal DM 9 dic 2015.)*/
						//'numeroNota' => ,

						/* Condizione di erogabilità come prevista nel DM 9 dic 2015 per uno specifico codice prestazione. La condizione di erogabilità può essere presente oppure no per una determinata prestazione. Cfr nota (1) (Elemento obbligatorio, ove previsto, unicamente per le prescrizioni specialistiche trattate dal DM 9 dic 2015.)*/
						//'condErogabilita' => ,


						/* Indicazione di appropriatezza prescrittiva come prevista nel DM 9 dic 2015 per uno specifico codice prestazione. L’indicazione di appropriatezza prescrittiva può essere presente oppure no per una determinata prestazione. Cfr nota (1) (Elemento obbligatorio, ove previsto, unicamente per le prescrizioni specialistiche trattate dal DM 9 dic 2015.)*/
						//'approprPrescrittiva' => ,

						/* Codice patologia come previsto nel DM 9 dic 2015 per uno specifico codice prestazione. Il codice di patologia può essere presente oppure no per una determinata prestazione. Cfr nota (1) (Elemento obbligatorio, ove previsto, unicamente per le prescrizioni specialistiche trattate dal DM 9 dic 2015.)*/
						//'patologia' => ,
					)
			)
		);
		}




		$InvioPrescrittoRichiesta = array(

		);

		echo json_encode($InvioPrescrittoRichiesta);
		echo PHP_EOL;

		$ret = $this -> client_demInvioPrescritto -> invioPrescritto($InvioPrescrittoRichiesta);

		return $ret;
	}


	/**
	*  Permette la visualizzazione di una prescrizione.
	*  @param
	*/
	public function VisualizzaPrescritto(){
		/* (Elemento facoltativo)*/
		//'' => ,
		/* (Elemento obbligatorio)*/
		//'' => ,,
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


	/*
	* Cifra con il certificato "SanitelCertificate".
	*/
	public function cifraSanitel($text) {
		openssl_public_encrypt($text, $cryptText, $this->publicKey, OPENSSL_PKCS1_PADDING);
		return (base64_encode($cryptText));

	}


}

?>
