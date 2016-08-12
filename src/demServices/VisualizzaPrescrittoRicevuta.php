<?php

class VisualizzaPrescrittoRicevuta
{

    /**
     * @var nreType $nre
     */
    protected $nre = null;

    /**
     * @var cfMedicoType $cfMedico1
     */
    protected $cfMedico1 = null;

    /**
     * @var cfMedicoType $cfMedico2
     */
    protected $cfMedico2 = null;

    /**
     * @var codRegioneType $codRegione
     */
    protected $codRegione = null;

    /**
     * @var stringType $codASLAo
     */
    protected $codASLAo = null;

    /**
     * @var stringType $codStruttura
     */
    protected $codStruttura = null;

    /**
     * @var codSpecializzazioneType $codSpecializzazione
     */
    protected $codSpecializzazione = null;

    /**
     * @var stringType $testata1
     */
    protected $testata1 = null;

    /**
     * @var stringType $testata2
     */
    protected $testata2 = null;

    /**
     * @var tipoRicettaType $tipoRic
     */
    protected $tipoRic = null;

    /**
     * @var stringType $codiceAss
     */
    protected $codiceAss = null;

    /**
     * @var stringType $cognNome
     */
    protected $cognNome = null;

    /**
     * @var stringType $indirizzo
     */
    protected $indirizzo = null;

    /**
     * @var stringType $oscuramDati
     */
    protected $oscuramDati = null;

    /**
     * @var stringType $numTessSasn
     */
    protected $numTessSasn = null;

    /**
     * @var stringType $socNavigaz
     */
    protected $socNavigaz = null;

    /**
     * @var tipoPrescType $tipoPrescrizione
     */
    protected $tipoPrescrizione = null;

    /**
     * @var stringType $ricettaInterna
     */
    protected $ricettaInterna = null;

    /**
     * @var stringType $codEsenzione
     */
    protected $codEsenzione = null;

    /**
     * @var stringType $nonEsente
     */
    protected $nonEsente = null;

    /**
     * @var stringType $reddito
     */
    protected $reddito = null;

    /**
     * @var stringType $codDiagnosi
     */
    protected $codDiagnosi = null;

    /**
     * @var stringType $descrizioneDiagnosi
     */
    protected $descrizioneDiagnosi = null;

    /**
     * @var dataOraType $dataCompilazione
     */
    protected $dataCompilazione = null;

    /**
     * @var tipoVisitaType $tipoVisita
     */
    protected $tipoVisita = null;

    /**
     * @var stringType $dispReg
     */
    protected $dispReg = null;

    /**
     * @var stringType $provAssistito
     */
    protected $provAssistito = null;

    /**
     * @var stringType $aslAssistito
     */
    protected $aslAssistito = null;

    /**
     * @var indicPrescType $indicazionePrescr
     */
    protected $indicazionePrescr = null;

    /**
     * @var indicPrescType $altro
     */
    protected $altro = null;

    /**
     * @var prioritaType $classePriorita
     */
    protected $classePriorita = null;

    /**
     * @var stringType $statoEstero
     */
    protected $statoEstero = null;

    /**
     * @var stringType $istituzCompetente
     */
    protected $istituzCompetente = null;

    /**
     * @var stringType $numIdentPers
     */
    protected $numIdentPers = null;

    /**
     * @var stringType $numIdentTess
     */
    protected $numIdentTess = null;

    /**
     * @var dataOraType $dataNascitaEstero
     */
    protected $dataNascitaEstero = null;

    /**
     * @var dataOraType $dataScadTessera
     */
    protected $dataScadTessera = null;

    /**
     * @var elencoDettagliPrescrizioniType $ElencoDettagliPrescrizioni
     */
    protected $ElencoDettagliPrescrizioni = null;

    /**
     * @var stringType $statoProcesso
     */
    protected $statoProcesso = null;

    /**
     * @var stringType $codAutenticazione
     */
    protected $codAutenticazione = null;

    /**
     * @var dataOraType $dataInserimento
     */
    protected $dataInserimento = null;

    /**
     * @var codEsitoType $codEsitoVisualizzazione
     */
    protected $codEsitoVisualizzazione = null;

    /**
     * @var elencoErroriRicetteType $ElencoErroriRicette
     */
    protected $ElencoErroriRicette = null;

    /**
     * @var elencoComunicazioniType $ElencoComunicazioni
     */
    protected $ElencoComunicazioni = null;

    /**
     * @var elencoNotaType $ElencoNota
     */
    protected $ElencoNota = null;

    /**
     * @param nreType $nre
     * @param cfMedicoType $cfMedico1
     * @param cfMedicoType $cfMedico2
     * @param codRegioneType $codRegione
     * @param stringType $codASLAo
     * @param stringType $codStruttura
     * @param codSpecializzazioneType $codSpecializzazione
     * @param stringType $testata1
     * @param stringType $testata2
     * @param tipoRicettaType $tipoRic
     * @param stringType $codiceAss
     * @param stringType $cognNome
     * @param stringType $indirizzo
     * @param stringType $oscuramDati
     * @param stringType $numTessSasn
     * @param stringType $socNavigaz
     * @param tipoPrescType $tipoPrescrizione
     * @param stringType $ricettaInterna
     * @param stringType $codEsenzione
     * @param stringType $nonEsente
     * @param stringType $reddito
     * @param stringType $codDiagnosi
     * @param stringType $descrizioneDiagnosi
     * @param dataOraType $dataCompilazione
     * @param tipoVisitaType $tipoVisita
     * @param stringType $dispReg
     * @param stringType $provAssistito
     * @param stringType $aslAssistito
     * @param indicPrescType $indicazionePrescr
     * @param indicPrescType $altro
     * @param prioritaType $classePriorita
     * @param stringType $statoEstero
     * @param stringType $istituzCompetente
     * @param stringType $numIdentPers
     * @param stringType $numIdentTess
     * @param dataOraType $dataNascitaEstero
     * @param dataOraType $dataScadTessera
     * @param elencoDettagliPrescrizioniType $ElencoDettagliPrescrizioni
     * @param stringType $statoProcesso
     * @param stringType $codAutenticazione
     * @param dataOraType $dataInserimento
     * @param codEsitoType $codEsitoVisualizzazione
     * @param elencoErroriRicetteType $ElencoErroriRicette
     * @param elencoComunicazioniType $ElencoComunicazioni
     * @param elencoNotaType $ElencoNota
     */
    public function __construct($nre, $cfMedico1, $cfMedico2, $codRegione, $codASLAo, $codStruttura, $codSpecializzazione, $testata1, $testata2, $tipoRic, $codiceAss, $cognNome, $indirizzo, $oscuramDati, $numTessSasn, $socNavigaz, $tipoPrescrizione, $ricettaInterna, $codEsenzione, $nonEsente, $reddito, $codDiagnosi, $descrizioneDiagnosi, $dataCompilazione, $tipoVisita, $dispReg, $provAssistito, $aslAssistito, $indicazionePrescr, $altro, $classePriorita, $statoEstero, $istituzCompetente, $numIdentPers, $numIdentTess, $dataNascitaEstero, $dataScadTessera, $ElencoDettagliPrescrizioni, $statoProcesso, $codAutenticazione, $dataInserimento, $codEsitoVisualizzazione, $ElencoErroriRicette, $ElencoComunicazioni, $ElencoNota)
    {
      $this->nre = $nre;
      $this->cfMedico1 = $cfMedico1;
      $this->cfMedico2 = $cfMedico2;
      $this->codRegione = $codRegione;
      $this->codASLAo = $codASLAo;
      $this->codStruttura = $codStruttura;
      $this->codSpecializzazione = $codSpecializzazione;
      $this->testata1 = $testata1;
      $this->testata2 = $testata2;
      $this->tipoRic = $tipoRic;
      $this->codiceAss = $codiceAss;
      $this->cognNome = $cognNome;
      $this->indirizzo = $indirizzo;
      $this->oscuramDati = $oscuramDati;
      $this->numTessSasn = $numTessSasn;
      $this->socNavigaz = $socNavigaz;
      $this->tipoPrescrizione = $tipoPrescrizione;
      $this->ricettaInterna = $ricettaInterna;
      $this->codEsenzione = $codEsenzione;
      $this->nonEsente = $nonEsente;
      $this->reddito = $reddito;
      $this->codDiagnosi = $codDiagnosi;
      $this->descrizioneDiagnosi = $descrizioneDiagnosi;
      $this->dataCompilazione = $dataCompilazione;
      $this->tipoVisita = $tipoVisita;
      $this->dispReg = $dispReg;
      $this->provAssistito = $provAssistito;
      $this->aslAssistito = $aslAssistito;
      $this->indicazionePrescr = $indicazionePrescr;
      $this->altro = $altro;
      $this->classePriorita = $classePriorita;
      $this->statoEstero = $statoEstero;
      $this->istituzCompetente = $istituzCompetente;
      $this->numIdentPers = $numIdentPers;
      $this->numIdentTess = $numIdentTess;
      $this->dataNascitaEstero = $dataNascitaEstero;
      $this->dataScadTessera = $dataScadTessera;
      $this->ElencoDettagliPrescrizioni = $ElencoDettagliPrescrizioni;
      $this->statoProcesso = $statoProcesso;
      $this->codAutenticazione = $codAutenticazione;
      $this->dataInserimento = $dataInserimento;
      $this->codEsitoVisualizzazione = $codEsitoVisualizzazione;
      $this->ElencoErroriRicette = $ElencoErroriRicette;
      $this->ElencoComunicazioni = $ElencoComunicazioni;
      $this->ElencoNota = $ElencoNota;
    }

    /**
     * @return nreType
     */
    public function getNre()
    {
      return $this->nre;
    }

    /**
     * @param nreType $nre
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setNre($nre)
    {
      $this->nre = $nre;
      return $this;
    }

    /**
     * @return cfMedicoType
     */
    public function getCfMedico1()
    {
      return $this->cfMedico1;
    }

    /**
     * @param cfMedicoType $cfMedico1
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setCfMedico1($cfMedico1)
    {
      $this->cfMedico1 = $cfMedico1;
      return $this;
    }

    /**
     * @return cfMedicoType
     */
    public function getCfMedico2()
    {
      return $this->cfMedico2;
    }

    /**
     * @param cfMedicoType $cfMedico2
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setCfMedico2($cfMedico2)
    {
      $this->cfMedico2 = $cfMedico2;
      return $this;
    }

    /**
     * @return codRegioneType
     */
    public function getCodRegione()
    {
      return $this->codRegione;
    }

    /**
     * @param codRegioneType $codRegione
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setCodRegione($codRegione)
    {
      $this->codRegione = $codRegione;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getCodASLAo()
    {
      return $this->codASLAo;
    }

    /**
     * @param stringType $codASLAo
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setCodASLAo($codASLAo)
    {
      $this->codASLAo = $codASLAo;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getCodStruttura()
    {
      return $this->codStruttura;
    }

    /**
     * @param stringType $codStruttura
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setCodStruttura($codStruttura)
    {
      $this->codStruttura = $codStruttura;
      return $this;
    }

    /**
     * @return codSpecializzazioneType
     */
    public function getCodSpecializzazione()
    {
      return $this->codSpecializzazione;
    }

    /**
     * @param codSpecializzazioneType $codSpecializzazione
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setCodSpecializzazione($codSpecializzazione)
    {
      $this->codSpecializzazione = $codSpecializzazione;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getTestata1()
    {
      return $this->testata1;
    }

    /**
     * @param stringType $testata1
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setTestata1($testata1)
    {
      $this->testata1 = $testata1;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getTestata2()
    {
      return $this->testata2;
    }

    /**
     * @param stringType $testata2
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setTestata2($testata2)
    {
      $this->testata2 = $testata2;
      return $this;
    }

    /**
     * @return tipoRicettaType
     */
    public function getTipoRic()
    {
      return $this->tipoRic;
    }

    /**
     * @param tipoRicettaType $tipoRic
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setTipoRic($tipoRic)
    {
      $this->tipoRic = $tipoRic;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getCodiceAss()
    {
      return $this->codiceAss;
    }

    /**
     * @param stringType $codiceAss
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setCodiceAss($codiceAss)
    {
      $this->codiceAss = $codiceAss;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getCognNome()
    {
      return $this->cognNome;
    }

    /**
     * @param stringType $cognNome
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setCognNome($cognNome)
    {
      $this->cognNome = $cognNome;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getIndirizzo()
    {
      return $this->indirizzo;
    }

    /**
     * @param stringType $indirizzo
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setIndirizzo($indirizzo)
    {
      $this->indirizzo = $indirizzo;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getOscuramDati()
    {
      return $this->oscuramDati;
    }

    /**
     * @param stringType $oscuramDati
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setOscuramDati($oscuramDati)
    {
      $this->oscuramDati = $oscuramDati;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getNumTessSasn()
    {
      return $this->numTessSasn;
    }

    /**
     * @param stringType $numTessSasn
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setNumTessSasn($numTessSasn)
    {
      $this->numTessSasn = $numTessSasn;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getSocNavigaz()
    {
      return $this->socNavigaz;
    }

    /**
     * @param stringType $socNavigaz
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setSocNavigaz($socNavigaz)
    {
      $this->socNavigaz = $socNavigaz;
      return $this;
    }

    /**
     * @return tipoPrescType
     */
    public function getTipoPrescrizione()
    {
      return $this->tipoPrescrizione;
    }

    /**
     * @param tipoPrescType $tipoPrescrizione
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setTipoPrescrizione($tipoPrescrizione)
    {
      $this->tipoPrescrizione = $tipoPrescrizione;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getRicettaInterna()
    {
      return $this->ricettaInterna;
    }

    /**
     * @param stringType $ricettaInterna
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setRicettaInterna($ricettaInterna)
    {
      $this->ricettaInterna = $ricettaInterna;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getCodEsenzione()
    {
      return $this->codEsenzione;
    }

    /**
     * @param stringType $codEsenzione
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setCodEsenzione($codEsenzione)
    {
      $this->codEsenzione = $codEsenzione;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getNonEsente()
    {
      return $this->nonEsente;
    }

    /**
     * @param stringType $nonEsente
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setNonEsente($nonEsente)
    {
      $this->nonEsente = $nonEsente;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getReddito()
    {
      return $this->reddito;
    }

    /**
     * @param stringType $reddito
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setReddito($reddito)
    {
      $this->reddito = $reddito;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getCodDiagnosi()
    {
      return $this->codDiagnosi;
    }

    /**
     * @param stringType $codDiagnosi
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setCodDiagnosi($codDiagnosi)
    {
      $this->codDiagnosi = $codDiagnosi;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getDescrizioneDiagnosi()
    {
      return $this->descrizioneDiagnosi;
    }

    /**
     * @param stringType $descrizioneDiagnosi
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setDescrizioneDiagnosi($descrizioneDiagnosi)
    {
      $this->descrizioneDiagnosi = $descrizioneDiagnosi;
      return $this;
    }

    /**
     * @return dataOraType
     */
    public function getDataCompilazione()
    {
      return $this->dataCompilazione;
    }

    /**
     * @param dataOraType $dataCompilazione
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setDataCompilazione($dataCompilazione)
    {
      $this->dataCompilazione = $dataCompilazione;
      return $this;
    }

    /**
     * @return tipoVisitaType
     */
    public function getTipoVisita()
    {
      return $this->tipoVisita;
    }

    /**
     * @param tipoVisitaType $tipoVisita
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setTipoVisita($tipoVisita)
    {
      $this->tipoVisita = $tipoVisita;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getDispReg()
    {
      return $this->dispReg;
    }

    /**
     * @param stringType $dispReg
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setDispReg($dispReg)
    {
      $this->dispReg = $dispReg;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getProvAssistito()
    {
      return $this->provAssistito;
    }

    /**
     * @param stringType $provAssistito
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setProvAssistito($provAssistito)
    {
      $this->provAssistito = $provAssistito;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getAslAssistito()
    {
      return $this->aslAssistito;
    }

    /**
     * @param stringType $aslAssistito
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setAslAssistito($aslAssistito)
    {
      $this->aslAssistito = $aslAssistito;
      return $this;
    }

    /**
     * @return indicPrescType
     */
    public function getIndicazionePrescr()
    {
      return $this->indicazionePrescr;
    }

    /**
     * @param indicPrescType $indicazionePrescr
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setIndicazionePrescr($indicazionePrescr)
    {
      $this->indicazionePrescr = $indicazionePrescr;
      return $this;
    }

    /**
     * @return indicPrescType
     */
    public function getAltro()
    {
      return $this->altro;
    }

    /**
     * @param indicPrescType $altro
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setAltro($altro)
    {
      $this->altro = $altro;
      return $this;
    }

    /**
     * @return prioritaType
     */
    public function getClassePriorita()
    {
      return $this->classePriorita;
    }

    /**
     * @param prioritaType $classePriorita
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setClassePriorita($classePriorita)
    {
      $this->classePriorita = $classePriorita;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getStatoEstero()
    {
      return $this->statoEstero;
    }

    /**
     * @param stringType $statoEstero
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setStatoEstero($statoEstero)
    {
      $this->statoEstero = $statoEstero;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getIstituzCompetente()
    {
      return $this->istituzCompetente;
    }

    /**
     * @param stringType $istituzCompetente
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setIstituzCompetente($istituzCompetente)
    {
      $this->istituzCompetente = $istituzCompetente;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getNumIdentPers()
    {
      return $this->numIdentPers;
    }

    /**
     * @param stringType $numIdentPers
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setNumIdentPers($numIdentPers)
    {
      $this->numIdentPers = $numIdentPers;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getNumIdentTess()
    {
      return $this->numIdentTess;
    }

    /**
     * @param stringType $numIdentTess
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setNumIdentTess($numIdentTess)
    {
      $this->numIdentTess = $numIdentTess;
      return $this;
    }

    /**
     * @return dataOraType
     */
    public function getDataNascitaEstero()
    {
      return $this->dataNascitaEstero;
    }

    /**
     * @param dataOraType $dataNascitaEstero
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setDataNascitaEstero($dataNascitaEstero)
    {
      $this->dataNascitaEstero = $dataNascitaEstero;
      return $this;
    }

    /**
     * @return dataOraType
     */
    public function getDataScadTessera()
    {
      return $this->dataScadTessera;
    }

    /**
     * @param dataOraType $dataScadTessera
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setDataScadTessera($dataScadTessera)
    {
      $this->dataScadTessera = $dataScadTessera;
      return $this;
    }

    /**
     * @return elencoDettagliPrescrizioniType
     */
    public function getElencoDettagliPrescrizioni()
    {
      return $this->ElencoDettagliPrescrizioni;
    }

    /**
     * @param elencoDettagliPrescrizioniType $ElencoDettagliPrescrizioni
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setElencoDettagliPrescrizioni($ElencoDettagliPrescrizioni)
    {
      $this->ElencoDettagliPrescrizioni = $ElencoDettagliPrescrizioni;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getStatoProcesso()
    {
      return $this->statoProcesso;
    }

    /**
     * @param stringType $statoProcesso
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setStatoProcesso($statoProcesso)
    {
      $this->statoProcesso = $statoProcesso;
      return $this;
    }

    /**
     * @return stringType
     */
    public function getCodAutenticazione()
    {
      return $this->codAutenticazione;
    }

    /**
     * @param stringType $codAutenticazione
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setCodAutenticazione($codAutenticazione)
    {
      $this->codAutenticazione = $codAutenticazione;
      return $this;
    }

    /**
     * @return dataOraType
     */
    public function getDataInserimento()
    {
      return $this->dataInserimento;
    }

    /**
     * @param dataOraType $dataInserimento
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setDataInserimento($dataInserimento)
    {
      $this->dataInserimento = $dataInserimento;
      return $this;
    }

    /**
     * @return codEsitoType
     */
    public function getCodEsitoVisualizzazione()
    {
      return $this->codEsitoVisualizzazione;
    }

    /**
     * @param codEsitoType $codEsitoVisualizzazione
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setCodEsitoVisualizzazione($codEsitoVisualizzazione)
    {
      $this->codEsitoVisualizzazione = $codEsitoVisualizzazione;
      return $this;
    }

    /**
     * @return elencoErroriRicetteType
     */
    public function getElencoErroriRicette()
    {
      return $this->ElencoErroriRicette;
    }

    /**
     * @param elencoErroriRicetteType $ElencoErroriRicette
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setElencoErroriRicette($ElencoErroriRicette)
    {
      $this->ElencoErroriRicette = $ElencoErroriRicette;
      return $this;
    }

    /**
     * @return elencoComunicazioniType
     */
    public function getElencoComunicazioni()
    {
      return $this->ElencoComunicazioni;
    }

    /**
     * @param elencoComunicazioniType $ElencoComunicazioni
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setElencoComunicazioni($ElencoComunicazioni)
    {
      $this->ElencoComunicazioni = $ElencoComunicazioni;
      return $this;
    }

    /**
     * @return elencoNotaType
     */
    public function getElencoNota()
    {
      return $this->ElencoNota;
    }

    /**
     * @param elencoNotaType $ElencoNota
     * @return VisualizzaPrescrittoRicevuta
     */
    public function setElencoNota($ElencoNota)
    {
      $this->ElencoNota = $ElencoNota;
      return $this;
    }

}
