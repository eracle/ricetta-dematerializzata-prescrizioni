<?php

/**
*
* @param    $codProdPrest           Codice prodotto farmaceutico (AIC) nel caso di prescrizione di farmaco con nome commerciale; Codice prestazione specialistica secondo il tariffario della regione del medico prescrittore. Si veda apposita nota di seguito per la spiegazione ( (***) Impostazione dei codici nomenclatore, catalogo e relative descrizioni per le prestazioni specialistiche) (Elemento facoltativo per le ricette farmaceutiche; elemento obbligatorio per le ricette specialistiche).
*	@param   	$descrProdPrest         Descrizione testuale: - della prescrizione farmaceutica come da Prontuario terapeutico, - della prestazione specialistica. Si veda apposita nota di seguito per la spiegazione ( (***) Impostazione dei codici nomenclatore, catalogo e relative descrizioni per le prestazioni specialistiche) Il contenuto di tale campo è ciò che verrà visualizzato dall’erogatore. (Elemento obbligatorio).
* @param    $codGruppoEquival       Il campo deve contenere il codice del gruppo di equivalenza secondo la codifica AIFA, nel caso di prescrizione farmaceutica con principio attivo. (Elemento facoltativo).
* @param    $descrGruppoEquival     Descrizione testuale del gruppo di equivalenza secondo la dizione AIFA. Il campo deve contenere la descrizione associata a codice gruppo equivalenza secondo la codifica AIFA. Il contenuto del campo è ciò che verrà visualizzato in seguito dall’erogatore. (Elemento facoltativo).
* @param    $testoLibero            Valore ammesso: null (Elemento facoltativo).
* @param    $descrTestoLiberoNote   Il campo può essere utilizzato per scrivere una nota esplicativa di ciò che è stato prescritto per prestazioni specialistiche. (Elemento facoltativo).
* @param    $nonSost                Il campo, è da utilizzarsi solo per prestazioni farmaceutiche. Se impostato indica che il prodotto, per cui è stato indicato il codice AIC, non può essere sostituito con altro prodotto. Valori ammessi: null = campo non utilizzato 1 = il prodotto farmaceutico indicato tramite codice AIC non può essere sostituito (Elemento facoltativo).
* @param    $motivazNote            Il campo, può essere utilizzato per scrivere un commento in testo libero o una nota esplicativa di ciò che è stato prescritto, ed è valevole solo per prescrizioni farmaceutiche. (Elemento facoltativo).
* @param    $codMotivazione         Il campo contiene i codici di motivazione di non sostituibilità di un farmaco: fare riferimento alle linee guida art. 15, comma 11-bis del DL 95/2012, pubblicate nel portale www.sistemats.it. Deve essere compilato se nonSost vale 1(Elemento facoltativo).
* @param    $notaProd               Nota AIFA (solo per prescrizioni farmaceutiche) (Elemento facoltativo).
* @param    $quantita               Quantità di confezioni o di prestazioni specialistiche prescritte. (Elemento obbligatorio).
* @param    $prescrizione1          Campo destinato a informazioni aggiuntive. (Elemento facoltativo).
* @param    $prescrizione2          Campo riservato alle Regioni, nel quale possono inserire informazioni di loro interesse, non controllate dal SAC. Deve essere rispettata la lunghezza del campo e l’utilizzo dei caratteri ammessi. (Elemento facoltativo).
* @param    $codCatalogoPrescr      Il campo, da utilizzarsi unicamente per prescrizioni specialistiche, deve contenere il codice del catalogo regionale della prestazione prescritta. Si veda apposita nota di seguito per la spiegazione ( (***) Impostazione dei codici nomenclatore, catalogo e relative descrizioni per le prestazioni specialistiche) (Elemento obbligatorio per ricette specialistiche dal momento in cui ogni singola Regione ha fornito al Sistema TS il catalogo regionale delle prestazioni; fino a tale momento l’elemento è facoltativo).
* @param    $tipoAccesso            Il campo, da utilizzarsi unicamente per prescrizioni specialistiche del PNGLA, indica se la prestazione richiesta si riferisce: - ad un primo accesso (prima visita o primo esame di diagnostica strumentale, 	visita o prestazione di approfondimento erogati da specialista diverso dal primo osservatore e 	nel caso di un paziente cronico, si considera primo accesso, la visita o l’esame strumentale, 	necessari in seguito ad un peggioramento del quadro clinico), -ad un accesso successivo (visita o prestazione di approfondimento, 	per pazienti presi in carico dal primo specialista, , controllo, follow up). Valori ammessi: 	1= primo accesso, 	0= altra tipologia di accesso (Elemento obbligatorio unicamente per ricette specialistiche ove presenti le prestazioni del Piano Nazionale Governo Liste d’Attesa (PNGLA); elemento facoltativo per tutte le altre prestazioni).
* @param    $numeroNota             Numero progressivo identificativo della nota come previsto nel DM 9 dic 2015 per uno specifico codice prestazione. Il numero nota è sempre presente per le prestazioni del DM 9 dic 2015. Cfr nota (1) (Elemento obbligatorio unicamente per le prescrizioni specialistiche trattate dal DM 9 dic 2015.).
* @param    $condErogabilita        Condizione di erogabilità come prevista nel DM 9 dic 2015 per uno specifico codice prestazione. La condizione di erogabilità può essere presente oppure no per una determinata prestazione. Cfr nota (1) (Elemento obbligatorio, ove previsto, unicamente per le prescrizioni specialistiche trattate dal DM 9 dic 2015.).
* @param    $approprPrescrittiva    Indicazione di appropriatezza prescrittiva come prevista nel DM 9 dic 2015 per uno specifico codice prestazione. L’indicazione di appropriatezza prescrittiva può essere presente oppure no per una determinata prestazione. Cfr nota (1) (Elemento obbligatorio, ove previsto, unicamente per le prescrizioni specialistiche trattate dal DM 9 dic 2015.).
* @param    $patologia              Codice patologia come previsto nel DM 9 dic 2015 per uno specifico codice prestazione. Il codice di patologia può essere presente oppure no per una determinata prestazione. Cfr nota (1) (Elemento obbligatorio, ove previsto, unicamente per le prescrizioni specialistiche trattate dal DM 9 dic 2015.).
*/
class dettaglioPrescrizioneType
{

    /**
     * @var stringType $codProdPrest
     */
    protected $codProdPrest = null;

    /**
     * @var stringType $descrProdPrest
     */
    protected $descrProdPrest = null;

    /**
     * @var stringType $codGruppoEquival
     */
    protected $codGruppoEquival = null;

    /**
     * @var stringType $descrGruppoEquival
     */
    protected $descrGruppoEquival = null;

    /**
     * @var stringType $testoLibero
     */
    protected $testoLibero = null;

    /**
     * @var stringType $descrTestoLiberoNote
     */
    protected $descrTestoLiberoNote = null;

    /**
     * @var stringType $nonSost
     */
    protected $nonSost = null;

    /**
     * @var stringType $motivazNote
     */
    protected $motivazNote = null;

    /**
     * @var stringType $codMotivazione
     */
    protected $codMotivazione = null;

    /**
     * @var stringType $notaProd
     */
    protected $notaProd = null;

    /**
     * @var integerType $quantita
     */
    protected $quantita = null;

    /**
     * @var stringType $prescrizione1
     */
    protected $prescrizione1 = null;

    /**
     * @var stringType $prescrizione2
     */
    protected $prescrizione2 = null;

    /**
     * @var stringType $codCatalogoPrescr
     */
    protected $codCatalogoPrescr = null;

    /**
     * @var string1Type $tipoAccesso
     */
    protected $tipoAccesso = null;

    /**
     * @var maxString10 $numeroNota
     */
    protected $numeroNota = null;

    /**
     * @var maxString10 $condErogabilita
     */
    protected $condErogabilita = null;

    /**
     * @var maxString10 $approprPrescrittiva
     */
    protected $approprPrescrittiva = null;

    /**
     * @var maxString10 $patologia
     */
    protected $patologia = null;

    /**
     * @param integerType $quantita
     */
    public function __construct($quantita)
    {
      $this->quantita = $quantita;
    }

    /**
     * @return stringType
     */
    public function getCodProdPrest()
    {
      return $this->codProdPrest;
    }

    /**
     * @param stringType $codProdPrest
     * @return dettaglioPrescrizioneType
     */
    public function setCodProdPrest($codProdPrest)
    {
      $this->codProdPrest = $codProdPrest;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getDescrProdPrest()
    {
      return $this->descrProdPrest;
    }

    /**
     * @param stringType $descrProdPrest
     * @return dettaglioPrescrizioneType
     */
    public function setDescrProdPrest($descrProdPrest)
    {
      $this->descrProdPrest = $descrProdPrest;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getCodGruppoEquival()
    {
      return $this->codGruppoEquival;
    }

    /**
     * @param stringType $codGruppoEquival
     * @return dettaglioPrescrizioneType
     */
    public function setCodGruppoEquival($codGruppoEquival)
    {
      $this->codGruppoEquival = $codGruppoEquival;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getDescrGruppoEquival()
    {
      return $this->descrGruppoEquival;
    }

    /**
     * @param stringType $descrGruppoEquival
     * @return dettaglioPrescrizioneType
     */
    public function setDescrGruppoEquival($descrGruppoEquival)
    {
      $this->descrGruppoEquival = $descrGruppoEquival;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getTestoLibero()
    {
      return $this->testoLibero;
    }

    /**
     * @param stringType $testoLibero
     * @return dettaglioPrescrizioneType
     */
    public function setTestoLibero($testoLibero)
    {
      $this->testoLibero = $testoLibero;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getDescrTestoLiberoNote()
    {
      return $this->descrTestoLiberoNote;
    }

    /**
     * @param stringType $descrTestoLiberoNote
     * @return dettaglioPrescrizioneType
     */
    public function setDescrTestoLiberoNote($descrTestoLiberoNote)
    {
      $this->descrTestoLiberoNote = $descrTestoLiberoNote;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getNonSost()
    {
      return $this->nonSost;
    }

    /**
     * @param stringType $nonSost
     * @return dettaglioPrescrizioneType
     */
    public function setNonSost($nonSost)
    {
      $this->nonSost = $nonSost;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getMotivazNote()
    {
      return $this->motivazNote;
    }

    /**
     * @param stringType $motivazNote
     * @return dettaglioPrescrizioneType
     */
    public function setMotivazNote($motivazNote)
    {
      $this->motivazNote = $motivazNote;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getCodMotivazione()
    {
      return $this->codMotivazione;
    }

    /**
     * @param stringType $codMotivazione
     * @return dettaglioPrescrizioneType
     */
    public function setCodMotivazione($codMotivazione)
    {
      $this->codMotivazione = $codMotivazione;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getNotaProd()
    {
      return $this->notaProd;
    }

    /**
     * @param stringType $notaProd
     * @return dettaglioPrescrizioneType
     */
    public function setNotaProd($notaProd)
    {
      $this->notaProd = $notaProd;
      return $this;
    }

    /**
     * @return integerType
     */
    public function getQuantita()
    {
      return $this->quantita;
    }

    /**
     * @param integerType $quantita
     * @return dettaglioPrescrizioneType
     */
    public function setQuantita($quantita)
    {
      $this->quantita = $quantita;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getPrescrizione1()
    {
      return $this->prescrizione1;
    }

    /**
     * @param stringType $prescrizione1
     * @return dettaglioPrescrizioneType
     */
    public function setPrescrizione1($prescrizione1)
    {
      $this->prescrizione1 = $prescrizione1;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getPrescrizione2()
    {
      return $this->prescrizione2;
    }

    /**
     * @param stringType $prescrizione2
     * @return dettaglioPrescrizioneType
     */
    public function setPrescrizione2($prescrizione2)
    {
      $this->prescrizione2 = $prescrizione2;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getCodCatalogoPrescr()
    {
      return $this->codCatalogoPrescr;
    }

    /**
     * @param stringType $codCatalogoPrescr
     * @return dettaglioPrescrizioneType
     */
    public function setCodCatalogoPrescr($codCatalogoPrescr)
    {
      $this->codCatalogoPrescr = $codCatalogoPrescr;
      return $this;
    }

    /**
     * @return string1Type
     */
    public function getTipoAccesso()
    {
      return $this->tipoAccesso;
    }

    /**
     * @param string1Type $tipoAccesso
     * @return dettaglioPrescrizioneType
     */
    public function setTipoAccesso($tipoAccesso)
    {
      $this->tipoAccesso = $tipoAccesso;
      return $this;
    }

    /**
     * @return maxString10
     */
    public function getNumeroNota()
    {
      return $this->numeroNota;
    }

    /**
     * @param maxString10 $numeroNota
     * @return dettaglioPrescrizioneType
     */
    public function setNumeroNota($numeroNota)
    {
      $this->numeroNota = $numeroNota;
      return $this;
    }

    /**
     * @return maxString10
     */
    public function getCondErogabilita()
    {
      return $this->condErogabilita;
    }

    /**
     * @param maxString10 $condErogabilita
     * @return dettaglioPrescrizioneType
     */
    public function setCondErogabilita($condErogabilita)
    {
      $this->condErogabilita = $condErogabilita;
      return $this;
    }

    /**
     * @return maxString10
     */
    public function getApproprPrescrittiva()
    {
      return $this->approprPrescrittiva;
    }

    /**
     * @param maxString10 $approprPrescrittiva
     * @return dettaglioPrescrizioneType
     */
    public function setApproprPrescrittiva($approprPrescrittiva)
    {
      $this->approprPrescrittiva = $approprPrescrittiva;
      return $this;
    }

    /**
     * @return maxString10
     */
    public function getPatologia()
    {
      return $this->patologia;
    }

    /**
     * @param maxString10 $patologia
     * @return dettaglioPrescrizioneType
     */
    public function setPatologia($patologia)
    {
      $this->patologia = $patologia;
      return $this;
    }

}
